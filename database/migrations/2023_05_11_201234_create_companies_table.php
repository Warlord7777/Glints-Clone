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
                Schema::create('companies', function (Blueprint $table) {
                    $table->primary('company_id');
                    $table->unsignedBigInteger('company_id');
                    $table->foreign('company_id')->references('id')->on('users')->onDelete('cascade');
                    $table->string('banner')->nullable();
                    $table->string('logo_company')->default('profile/defaultpp.webp');
                    $table->string('company_name')->nullable();
                    $table->string('company_field')->nullable();
                    $table->string('company_location')->nullable();
                    $table->string('company_size')->nullable();
                    $table->text('company_address')->nullable();
                    $table->string('company_website')->nullable();
                    $table->string('short_description')->nullable();
                    $table->text('company_description')->nullable();
                    $table->string('company_industry')->nullable();
                    $table->timestamps();
                });
                
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
