<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubhallServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subhall__services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subhall_id');
            $table->unsignedInteger('service_id');
            $table->timestamps();

            
            $table->foreign('subhall_id')->on('sub__halls')->references('id')
            ->onDelete('CASCADE')
             ->onUpdate('CASCADE');
            

            $table->foreign('service_id')->on('services')->references('id')
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
        Schema::dropIfExists('subhall__services');
    }
}
