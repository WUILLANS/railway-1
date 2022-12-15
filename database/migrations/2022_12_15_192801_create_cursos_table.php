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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('denCur',50);// taller de programacion
            $table->integer('hrsCur');// 10 horas
            $table->integer('creCur');// 8 creditos
            $table->integer('PlaCur');// 2011,2022, 1990
            $table->string('tipCur',20);//transversal o especialidad
            $table->integer('estCur');
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
        Schema::dropIfExists('cursos');
    }
};
