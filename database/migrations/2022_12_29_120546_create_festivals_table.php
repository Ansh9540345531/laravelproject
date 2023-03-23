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
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->text('first_festival_name');
            $table->text('photo1');
            $table->text('first_festival_url');
            $table->text('second_festival_name');
            $table->text('photo2');
            $table->text('second_festival_url');
            $table->text('third_festival_name');
            $table->text('photo3');
            $table->text('third_festival_url');
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
        Schema::dropIfExists('festivals');
    }
};
