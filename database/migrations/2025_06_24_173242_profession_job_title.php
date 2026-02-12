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
        Schema::create('profession_job_title', function(Blueprint $table) {
            $table->foreignId('profession_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('job_title_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['profession_id', 'job_title_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profession_job_title');
    }
};
