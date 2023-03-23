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
        Schema::create('package_products', function (Blueprint $table) {
            $table->id('id');
            $table->text('package_name');
            $table->text('sort_description');
            $table->text('description');
            $table->text('highlight');
            $table->text('image');
            $table->text('package_destination');
            $table->text('package_day');
            $table->text('package_no_of_person');
            $table->text('category_id');
            $table->text('package_amenitie');
            $table->text('near_by_location');
            $table->text('package_price');
            $table->text('selling_price');
            $table->text('customize_day_price');
            $table->text('customize_person_price');
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('package_products');
    }
};
