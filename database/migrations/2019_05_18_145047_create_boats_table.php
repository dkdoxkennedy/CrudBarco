<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameBoat',60);
            $table->double('price');
            $table->string('cidade',100);
            $table->double('boatSize');
            $table->string('boatDescription',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voi
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
