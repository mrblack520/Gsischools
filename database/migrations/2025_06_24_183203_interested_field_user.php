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
        Schema::create('interested_field_user', function (Blueprint $table) {
            $table->foreignId('user_meta_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('profession_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['profession_id', 'user_meta_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interested_field_user');
    }
};
