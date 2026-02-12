<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attended_universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('university_aficionado_profile_id');
            $table->foreignId('course_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->integer('status');
            $table->string('other_status', 500);
            $table->foreign('university_aficionado_profile_id', 'uni_afi_id')
                ->references('id')
                ->on('university_aficionado_profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attended_universities');
    }
};
