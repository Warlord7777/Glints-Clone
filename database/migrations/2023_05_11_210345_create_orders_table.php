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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Menambahkan foreign key constraint untuk kolom class_id
            $table->foreign('class_id')
                ->references('class_id')
                ->on('expertclasses')
                ->onDelete('cascade');

            // Menambahkan foreign key constraint untuk kolom discount_id
            $table->foreign('discount_id')
                ->references('discount_id')
                ->on('discounts')
                ->onDelete('cascade');

            // Menambahkan foreign key constraint untuk kolom account_id
            $table->foreign('user_id')
                ->references('user_id')
                ->on('job_seekers')
                ->onDelete('cascade');

            $table->string('payment_method');
            $table->string('proof');
            $table->integer('status')->default(0);
            $table->string('bank_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};