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
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->integer('program_nb_jours')->nullable();
            $table->string('program_name')->nullable();
            $table->string('program_mode')->nullable();
            $table->string('program_level')->nullable();
            $table->string('program_type_exercice')->nullable();
            $table->string('program_objectif')->nullable();
            $table->string('program_group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program');
    }
};
