<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubHallServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__hall__services', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sub_hall_id');
            $table->string('description');
            $table->foreign('sub_hall_id')->on('sub__halls')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
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
        Schema::dropIfExists('sub__hall__services');
    }
}
