<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('zkteco_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('school_id')->nullable()->index();
            $table->string('name');
            $table->string('serial_number')->nullable()->unique();
            $table->string('ip_address')->nullable();
            $table->unsignedSmallInteger('port')->default(4370);
            $table->string('api_token', 64)->nullable();
            $table->enum('sync_mode', ['push', 'pull', 'both'])->default('both');
            $table->boolean('active')->default(true);
            $table->timestamp('last_sync_at')->nullable();
            $table->text('last_sync_message')->nullable();
            $table->timestamps();
        });

        Schema::create('zkteco_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('school_id')->nullable()->index();
            $table->time('start_time')->default('08:00:00');
            $table->time('late_time')->default('08:30:00');
            $table->time('absent_time')->default('09:30:00');
            $table->enum('mapping_field', ['admission_no', 'user_id', 'roll_no'])->default('admission_no');
            $table->boolean('auto_sync_enabled')->default(true);
            $table->unsignedSmallInteger('sync_interval_minutes')->default(5);
            $table->timestamps();
        });

        Schema::create('zkteco_punch_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zkteco_device_id')->nullable()->index();
            $table->unsignedInteger('school_id')->nullable()->index();
            $table->string('device_pin');
            $table->timestamp('punch_time');
            $table->unsignedTinyInteger('verify_type')->nullable();
            $table->unsignedTinyInteger('status')->nullable();
            $table->string('device_serial')->nullable();
            $table->boolean('is_processed')->default(false)->index();
            $table->boolean('sync_success')->nullable();
            $table->text('sync_message')->nullable();
            $table->unsignedBigInteger('student_attendance_id')->nullable();
            $table->timestamps();

            $table->unique(['zkteco_device_id', 'device_pin', 'punch_time'], 'zkteco_punch_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zkteco_punch_logs');
        Schema::dropIfExists('zkteco_settings');
        Schema::dropIfExists('zkteco_devices');
    }
};
