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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->primary('user_id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('profile_picture')->default('profile/defaultpp.webp');
            $table->string('location')->nullable();
            $table->string('telephone')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('skills')->nullable();
            $table->string('preferred_job_type')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('preferred_location')->nullable();
            $table->string('residence_status')->nullable();
            $table->string('nationality')->nullable();
            $table->text('description')->nullable();
            $table->text('interest')->nullable();
            $table->text('portfolio')->nullable();
            $table->boolean('expert')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
