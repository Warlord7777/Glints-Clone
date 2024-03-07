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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->id('bookmarks_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('job_vacancy_id');
            $table->foreign('user_id')->references('user_id')->on('job_seekers');
            $table->foreign('job_vacancy_id')->references('job_vacancy_id')->on('job_vacancies')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
