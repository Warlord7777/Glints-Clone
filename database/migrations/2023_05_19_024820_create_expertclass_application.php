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
        Schema::create('expertclass_application', function (Blueprint $table) {
            $table->id('application_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('job_seekers');
            $table->integer('status');
            $table->string('linked_in');
            $table->string('pekerjaan');
            $table->string('perusahaan');
            $table->string('posisi_kerja');
            $table->enum('level_pekerjaan', ['non-management', 'junior-level', 'mid-level', 'senior-level']);
            $table->enum('ukuran_perusahaan', ['1-50', '51-300', '301-500', '501-1000', '>1000']);
            $table->enum('pengalaman_kerja', ['<3', '3-4', '5-6', '7-10', '>10']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expertclass_application');
    }
};
