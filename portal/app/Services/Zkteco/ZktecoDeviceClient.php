<?php

namespace App\Services\Zkteco;

/**
 * Minimal ZKTeco TCP client for pulling attendance logs.
 * Compatible with most ZK standalone devices on port 4370.
 */
class ZktecoDeviceClient
{
    private const CMD_CONNECT = 1000;

    private const CMD_EXIT = 1001;

    private const CMD_ENABLEDEVICE = 1002;

    private const CMD_DISABLEDEVICE = 1003;

    private const CMD_ACK = 2000;

    private const CMD_PREPARE_DATA = 1500;

    private const CMD_DATA = 1501;

    private const CMD_ATTLOG_RRQ = 13;

    private string $ip;

    private int $port;

    private int $timeout;

    private $socket = null;

    private int $sessionId = 0;

    private int $replyId = 0;

    private string $recvBuffer = '';

    public function __construct(string $ip, int $port = 4370, ?int $timeout = null)
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->timeout = $timeout ?? (int) config('zkteco.pull_timeout', 10);
    }

    public function connect(): bool
    {
        $this->socket = @fsockopen($this->ip, $this->port, $errno, $errstr, $this->timeout);

        if (! $this->socket) {
            throw new \RuntimeException("Cannot connect to {$this->ip}:{$this->port} - {$errstr} ({$errno})");
        }

        stream_set_timeout($this->socket, $this->timeout);

        $response = $this->command(self::CMD_CONNECT, '');

        return $response !== false;
    }

    public function disconnect(): void
    {
        if ($this->socket) {
            $this->command(self::CMD_EXIT, '');
            fclose($this->socket);
            $this->socket = null;
        }
    }

    public function getAttendances(): array
    {
        $this->connect();

        try {
            $this->command(self::CMD_DISABLEDEVICE, '');

            $sizeData = $this->command(self::CMD_ATTLOG_RRQ, '');
            $size = is_numeric($sizeData) ? (int) $sizeData : 0;

            if ($size <= 0) {
                return [];
            }

            $raw = $this->readData($size);

            return $this->parseAttendanceData($raw);
        } finally {
            $this->command(self::CMD_ENABLEDEVICE, '');
            $this->disconnect();
        }
    }

    public function testConnection(): bool
    {
        try {
            $this->connect();
            $this->disconnect();

            return true;
        } catch (\Throwable) {
            return false;
        }
    }

    private function command(int $command, string $payload): mixed
    {
        if (! $this->socket) {
            throw new \RuntimeException('Not connected to device.');
        }

        $buf = $this->createHeader($command, 0, $this->sessionId, $this->replyId, $payload);
        fwrite($this->socket, $buf);

        $this->recvBuffer = fread($this->socket, 1024);

        if ($this->recvBuffer === false || strlen($this->recvBuffer) < 8) {
            return false;
        }

        $header = unpack('vcommand/vchecksum/vsession/vreply/vdata/vpadding', substr($this->recvBuffer, 0, 8));

        $this->sessionId = $header['session'] ?? $this->sessionId;
        $this->replyId = $header['reply'] ?? $this->replyId;

        if (($header['command'] ?? 0) === self::CMD_PREPARE_DATA) {
            return $header['data'] ?? 0;
        }

        if (($header['command'] ?? 0) === self::CMD_DATA) {
            return substr($this->recvBuffer, 8);
        }

        if (($header['command'] ?? 0) === self::CMD_ACK) {
            return substr($this->recvBuffer, 8);
        }

        return substr($this->recvBuffer, 8);
    }

    private function readData(int $size): string
    {
        $data = '';

        while (strlen($data) < $size) {
            $chunk = $this->command(self::CMD_DATA, '');
            if ($chunk === false || $chunk === '') {
                break;
            }
            $data .= $chunk;
        }

        return $data;
    }

    private function createHeader(int $command, int $checksum, int $sessionId, int $replyId, string $payload): string
    {
        $payloadLength = strlen($payload);
        $buf = pack('vvvv', $command, $checksum, $sessionId, $replyId);
        $buf .= pack('v', $payloadLength);
        $buf .= pack('v', 0);
        $buf .= $payload;

        return $buf;
    }

    private function parseAttendanceData(string $raw): array
    {
        $records = [];
        $entrySize = 40;
        $count = intdiv(strlen($raw), $entrySize);

        for ($i = 0; $i < $count; $i++) {
            $entry = substr($raw, $i * $entrySize, $entrySize);
            if (strlen($entry) < $entrySize) {
                break;
            }

            $uid = unpack('V', substr($entry, 0, 4))[1] ?? 0;
            $timestamp = $this->decodeTime(substr($entry, 4, 4));
            $state = ord($entry[24] ?? "\0");
            $type = ord($entry[25] ?? "\0");

            $records[] = [
                'uid' => $uid,
                'timestamp' => $timestamp,
                'state' => $state,
                'type' => $type,
            ];
        }

        return $records;
    }

    private function decodeTime(string $bytes): string
    {
        if (strlen($bytes) < 4) {
            return now()->format('Y-m-d H:i:s');
        }

        $t = unpack('V', $bytes)[1] ?? 0;
        $second = $t % 60;
        $t = intdiv($t, 60);
        $minute = $t % 60;
        $t = intdiv($t, 60);
        $hour = $t % 24;
        $t = intdiv($t, 24);
        $day = ($t % 31) + 1;
        $t = intdiv($t, 31);
        $month = ($t % 12) + 1;
        $year = intdiv($t, 12) + 2000;

        return sprintf('%04d-%02d-%02d %02d:%02d:%02d', $year, $month, $day, $hour, $minute, $second);
    }
}
