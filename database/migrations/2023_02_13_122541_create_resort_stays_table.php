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
        Schema::create('resort_stays', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('mobile');
            $table->text('person');
            $table->text('checkin_date');
            $table->text('checkout_date');
            $table->text('message');
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
        Schema::dropIfExists('resort_stays');
    }
};
