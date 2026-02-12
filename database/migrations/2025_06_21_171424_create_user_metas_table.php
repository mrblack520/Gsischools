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
        Schema::create('user_metas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('other_career_stage')->nullable();
            $table->string('other_interested_field')->nullable();
            $table->string('other_goal')->nullable();
            $table->integer('joinned_as')->nullable();
            $table->foreignId('location_id')->nullable()->constrained('countries')->onUpdate('cascade')->onDelete('set null');

            $table->text('bio')->nullable();
            $table->text('topics')->nullable();

            $table->boolean('community_updates')->default(false);
            $table->boolean('accepted_terms')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_metas');
    }
};
