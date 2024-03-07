<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('job_vacancies', function (Blueprint $table) {
                $table->id('job_vacancy_id');
                $table->string('job_name');
                $table->string('job_position');
                $table->unsignedDecimal('estimated_salary', 10, 2);
                $table->string('country');
                $table->string('city');
                $table->string('job_experience');
                $table->text('description');
                $table->enum('job_type', ['Penuh', 'Paruh', 'Magang', 'Proyek']);
                $table->enum('job_system', ['remote', 'wfo']);
                $table->text('job_skills');
                $table->unsignedBigInteger('company_id');
                $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade');
                $table->timestamps();
            });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};