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
        Schema::create('mega_offers', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('offer');
            $table->text('heading');
            $table->text('description');
            $table->text('list1');
            $table->text('list2');
            $table->text('list3');
            $table->text('button_name');
            $table->text('button_link');
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
        Schema::dropIfExists('mega_offers');
    }
};
