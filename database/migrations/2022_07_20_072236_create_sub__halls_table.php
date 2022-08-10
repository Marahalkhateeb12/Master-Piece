<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__halls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subhall_name');
            $table->string('subhall_description');
            $table->unsignedInteger('hall_id');
            $table->unsignedInteger('number_of_people_W');
            $table->unsignedInteger('number_of_people_M');
            $table->unsignedInteger('area');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            // $table->foreign('hall_id')->on('halls')->references('id')
            // ->onDelete('CASCADE')
            // ->onUpdate('CASCADE');
            $table->rememberToken();
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
        Schema::dropIfExists('sub__halls');
    }
}
