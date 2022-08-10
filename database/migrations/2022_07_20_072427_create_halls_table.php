<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hall_name')->unique();
            $table->string('hall_description');
            $table->string('image');
            $table->string('location');
            $table->string('hours');
            $table->string('hall_address');
            $table->string('facebook');
            $table->string('instagram');
           $table->unsignedBigInteger('hall_mobile')->unique();
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
        Schema::dropIfExists('halls');
    }
}
