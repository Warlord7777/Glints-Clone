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
            Schema::create('expertclasses', function (Blueprint $table) {
                $table->id('class_id');
                $table->string('category');
                $table->string('class_image');
                $table->string('class_title');
                $table->dateTime('date_time');
                $table->string('language');
                $table->string('class_type');
                $table->unsignedBigInteger('mentor_id');
                $table->foreign('mentor_id')->references('user_id')->on('job_seekers');
                $table->text('class_description')->nullable();
                $table->integer('price')->nullable();
                $table->text('facility')->nullable();
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_classes');
    }
};