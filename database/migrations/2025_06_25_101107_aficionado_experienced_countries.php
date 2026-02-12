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
        Schema::create('aficionado_experienced_countries', function(Blueprint $table)
        {
           $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
           $table->unsignedBigInteger('profession_aficionado_profile_id');
           $table->foreign('profession_aficionado_profile_id', 'paf_exp_countries')
           ->references('id')
           ->on('profession_aficionado_profiles')
           ->onUpdate('cascade')
           ->onDelete('cascade');
           $table->primary(['country_id', 'profession_aficionado_profile_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aficionado_experienced_countries');
    }
};
