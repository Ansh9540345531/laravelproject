<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('promo_code');
            $table->integer('customer_id');
            $table->integer('sub_total');
            $table->integer('total_amount');
            $table->integer('razorpay_paid_amount');
            $table->integer('razorpay_payment_id');
            $table->integer('razorpay_order_id');
            $table->integer('razorpay_signature');
            $table->integer('razorpay_order_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
