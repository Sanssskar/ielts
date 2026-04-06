<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->integer('question_number');
            $table->text('question_text');
            $table->enum('type', [
                'mcq',
                'matching',
                'true_false',
                'sentence_completion',
                'diagram_labelling',
                'short_answer',
                'essay'
            ]);
            $table->integer('points')->default(1);
            $table->integer('order')->default(1);
            $table->json('metadata')->nullable();   // for diagram data, matching pairs, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
