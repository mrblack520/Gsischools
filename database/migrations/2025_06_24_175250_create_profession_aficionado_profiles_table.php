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
        Schema::create('profession_aficionado_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('profession_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('other_profession', 255)->nullable();
            $table->foreignId('practice_area_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('job_title_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('institution_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->text('current_institution')->nullable();
            $table->integer('years_of_experience');
            $table->foreignId('university_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('course_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('work_experience_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('set null');
            $table->integer('status');
            $table->integer('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profession_aficionado_profiles');
    }
};
