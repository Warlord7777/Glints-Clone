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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('company_id')->on('companies');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('business_email');
            $table->string('scheduled_time')->nullable();
            $table->string('media')->nullable();
            $table->integer('status');
            $table->string('note')->nullable();
            $table->string('company_size');
            $table->string('industry');
            $table->string('position');
            $table->string('country');
            $table->string('business_requirement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation');
    }
};
