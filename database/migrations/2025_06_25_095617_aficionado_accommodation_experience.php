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
        Schema::create('aficionado_accommodation_experience', function(Blueprint $table)
        {
            $table->unsignedBigInteger('university_aficionado_profile_id');
            $table->unsignedBigInteger('accommodation_experience_id');

            $table->foreign('university_aficionado_profile_id', 'fk_aae_univ_profile')
                ->references('id')
                ->on('university_aficionado_profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('accommodation_experience_id', 'fk_aae_accom_exp')
                ->references('id')
                ->on('accommodation_experiences')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->primary(['university_aficionado_profile_id', 'accommodation_experience_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aficionado_accommodation_experience');
    }
};
