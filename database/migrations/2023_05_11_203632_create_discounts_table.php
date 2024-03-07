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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id('discount_id');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('class_id')->on('expertclasses')->onDelete('cascade');
            $table->dateTime('starting_time')->nullable();
            $table->dateTime('ending_time')->nullable();
            $table->float('discount', 3, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};