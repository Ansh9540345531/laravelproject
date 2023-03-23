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
        Schema::create('cab_enquiries', function (Blueprint $table) {
            $table->id();
            $table->text('pickup_location');
            $table->text('drop_location');
            $table->text('mobile');
            $table->text('person');
            $table->text('pickup_date');
            $table->text('return_date');
            $table->text('time');
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
        Schema::dropIfExists('cab_enquiries');
    }
};
