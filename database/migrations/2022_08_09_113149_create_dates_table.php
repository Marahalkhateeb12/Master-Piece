<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subhall_id');
            $table->date('date');
            $table->integer('4:00-6:00');
            $table->integer('6:00-8:00');
            $table->integer('8:00-10:00');
            $table->integer('10:00-12:00');
            $table->double('price');
            $table->timestamps();

            $table->foreign('subhall_id')->on('sub__halls')->references('id')
            ->onDelete('CASCADE')
             ->onUpdate('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
