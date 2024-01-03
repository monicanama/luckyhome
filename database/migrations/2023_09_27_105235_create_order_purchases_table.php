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
        Schema::create('order_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->decimal('totalcost', 8, 2);
            $table->string('payment_method');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->string('reference_number')->nullable();


            $table->foreign('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_purchases');
    }
};
