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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_information_id')->constrained('personal_information')->onDelete('cascade');

            $table->boolean('answer_1')->nullable();

            $table->boolean('answer_2')->nullable();
            $table->string('answer_2_detail')->nullable();

            $table->boolean('answer_3')->nullable();
            $table->string('answer_3_detail')->nullable();

            $table->boolean('answer_4')->nullable();
            $table->string('answer_4_detail')->nullable();
            $table->date('answer_4_date_filed')->nullable();
            $table->string('answer_4_status')->nullable();

            $table->boolean('answer_5')->nullable();
            $table->string('answer_5_detail')->nullable();

            $table->boolean('answer_6')->nullable();
            $table->string('answer_6_detail')->nullable();

            $table->boolean('answer_7')->nullable();
            $table->string('answer_7_detail')->nullable();

            $table->boolean('answer_8')->nullable();
            $table->string('answer_8_detail')->nullable();

            $table->boolean('answer_9')->nullable();
            $table->string('answer_9_detail')->nullable();

            $table->boolean('answer_10')->nullable();
            $table->string('answer_10_detail')->nullable();

            $table->boolean('answer_11')->nullable();
            $table->string('answer_11_id')->nullable();

            $table->boolean('answer_12')->nullable();
            $table->string('answer_12_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
