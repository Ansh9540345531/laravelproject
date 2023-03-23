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
        Schema::create('helicopters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('email')->unique();
            $table->string('from');
            $table->string('to');
            $table->string('date');
            $table->string('time');
            $table->string('adult');
            $table->string('children');
            $table->string('message');
            $table->string('checkbox');
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
        Schema::dropIfExists('helicopters');
    }
};
