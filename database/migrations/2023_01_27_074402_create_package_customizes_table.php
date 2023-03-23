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
        Schema::create('package_customizes', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->text('package_id');
            $table->text('package_start_destination');
            $table->text('package_end_destination');
            $table->text('package_start_date');
            $table->text('package_end_date');
            $table->text('package_custom_price');
            $table->text('package_custom_person');
            $table->text('package_custom_day');
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
        Schema::dropIfExists('package_customizes');
    }
};
