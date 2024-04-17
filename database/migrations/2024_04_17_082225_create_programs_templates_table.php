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
        Schema::create('programs_templates', function (Blueprint $table) {
            $table->id();
            $table->text('template_content');
            $table->boolean('status');
            $table->integer('nb_days');
            $table->foreignId('target_id')->constrained('targets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs_templates');
    }
};
