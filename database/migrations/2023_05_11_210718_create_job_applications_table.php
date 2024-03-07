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
        Schema::create('job_applications', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('job_vacancy_id');
                $table->unsignedBigInteger('company_id');
                $table->string('resume');
                $table->integer('status')->default(0);
                $table->string('phone_number');
                $table->text('application_letter')->nullable();
                $table->timestamps();
            
                // Menambahkan foreign key constraint untuk kolom user_id
                $table->foreign('user_id')
                      ->references('user_id')
                      ->on('job_seekers')
                      ->onDelete('cascade');
            
                // Menambahkan foreign key constraint untuk kolom job_vacancy_id
                $table->foreign('job_vacancy_id')
                      ->references('job_vacancy_id')
                      ->on('job_vacancies')
                      ->onDelete('cascade');
            
                // Menambahkan foreign key constraint untuk kolom company_id
                $table->foreign('company_id')
                      ->references('company_id')
                      ->on('companies')
                      ->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
