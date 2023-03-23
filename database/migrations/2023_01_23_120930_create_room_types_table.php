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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->text('hotelier_id');
            $table->text('user_role');
            $table->text('room_photo');
            $table->text('room_name');
            $table->text('extra_facility');
            $table->text('guest');
            $table->text('hotel_offer');
            $table->text('today_price');
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
        Schema::dropIfExists('room_types');
    }
};
