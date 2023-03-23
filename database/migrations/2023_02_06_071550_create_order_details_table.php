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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('order_details_id');
            $table->text('order_no');
            $table->text('customer_id');
            $table->text('customer_name');
            $table->text('customer_email');
            $table->text('customer_address');
            $table->text('customer_mobile');
            $table->text('checkin_date');
            $table->text('checkout_date');
            $table->text('product_id');
            $table->text('product_name');
            $table->text('product_price');
            $table->integer('product_quantity');
            $table->text('payment_name');
            $table->text('payment_price');
            $table->text('payment_method');
            $table->text('payment_paid_amount');
            $table->text('transaction_id');
            $table->text('order_details_status');
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
        Schema::dropIfExists('order_details');
    }
};
