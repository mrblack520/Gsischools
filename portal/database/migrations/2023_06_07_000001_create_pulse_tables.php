<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Pulse\Support\PulseMigration;

return new class extends PulseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! $this->shouldRun()) {
            return;
        }

        // Pulse Values
        Schema::create('pulse_values', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->unsignedInteger('timestamp');
            $blueprint->string('type', 50); // limited length
            $blueprint->mediumText('key');
            match ($this->driver()) {
                'mariadb', 'mysql' => $blueprint->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                'pgsql' => $blueprint->uuid('key_hash')->storedAs('md5("key")::uuid'),
                'sqlite' => $blueprint->string('key_hash'),
            };
            $blueprint->mediumText('value');

            $blueprint->index('timestamp');
            $blueprint->index('type');
            $blueprint->unique(['type', 'key_hash']);
        });

        // Pulse Entries
        Schema::create('pulse_entries', function (Blueprint $blueprint): void {
            $blueprint->id();
            $blueprint->unsignedInteger('timestamp');
            $blueprint->string('type', 50); // limited length
            $blueprint->mediumText('key');
            match ($this->driver()) {
                'mariadb', 'mysql' => $blueprint->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
                'pgsql' => $blueprint->uuid('key_hash')->storedAs('md5("key")::uuid'),
                'sqlite' => $blueprint->string('key_hash'),
            };
            $blueprint->bigInteger('value')->nullable();

            $blueprint->index('timestamp');
            $blueprint->index('type');
            $blueprint->index('key_hash');
            $blueprint->index(['timestamp', 'type', 'key_hash', 'value']);
        });

        // Pulse Aggregates
        Schema::create('pulse_aggregates', function (Blueprint $blueprint): void {
    $blueprint->id();
    $blueprint->unsignedInteger('bucket');
    $blueprint->unsignedMediumInteger('period');
    $blueprint->string('type', 50); // limit column length here
    $blueprint->mediumText('key');
    match ($this->driver()) {
        'mariadb', 'mysql' => $blueprint->char('key_hash', 16)->charset('binary')->virtualAs('unhex(md5(`key`))'),
        'pgsql' => $blueprint->uuid('key_hash')->storedAs('md5("key")::uuid'),
        'sqlite' => $blueprint->string('key_hash'),
    };
    $blueprint->string('aggregate', 50); // limit column length here
    $blueprint->decimal('value', 20, 2);
    $blueprint->unsignedInteger('count')->nullable();

    $blueprint->unique(['bucket', 'period', 'type', 'aggregate', 'key_hash']);
    $blueprint->index(['period', 'bucket']);
    $blueprint->index('type');

    // Just create the index normally — no (50) here
    $blueprint->index(['period', 'type', 'aggregate', 'bucket'], 'pulse_aggregates_period_type_aggregate_bucket_index');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulse_values');
        Schema::dropIfExists('pulse_entries');
        Schema::dropIfExists('pulse_aggregates');
    }
};
