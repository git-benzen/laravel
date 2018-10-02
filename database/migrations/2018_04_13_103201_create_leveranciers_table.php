<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeveranciersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adres');
            $table->string('email');
            $table->integer('name');
            $table->integer('btw');
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
        Schema::dropIfExists('leveranciers');
    }
}
