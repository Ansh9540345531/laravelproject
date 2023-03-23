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
        Schema::create('hotel_home_sections', function (Blueprint $table) {
            $table->id();
            $table->text('hotelier_id');
            $table->text('photo');
            $table->text('hotel_name');
            $table->text('description')->nullable();
            $table->text('hotel_location');
            $table->text('hotel_catagories');
            $table->text('hotel_amenities');
            $table->text('hotel_price');
            $table->text('button_text');
            $table->text('button_url');
            $table->text('featured');
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
        Schema::dropIfExists('hotel_home_sections');
    }
};
