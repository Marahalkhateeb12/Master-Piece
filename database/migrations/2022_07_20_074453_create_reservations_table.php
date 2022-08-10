<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('user_name');
            $table->unsignedBigInteger('mobile');
            $table->unsignedInteger('sub_hall_id');
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('sub_hall_id')->on('sub__halls')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->enum('status',['Pinding','Available','	Not Available'])->default('Pinding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
