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
        Schema::create('trainer_models', function (Blueprint $table) {
            $table->id();
            $table->string('Trainer_Name');
            $table->string('Trainer_Email')->unique();
            $table->string('Trainer_Speciality')->unique();
            $table->string('Trainer_Description');
            $table->string('Trainer_Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_models');
    }
};
