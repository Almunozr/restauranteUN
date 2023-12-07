<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('beneficiario');
            $table->string('descripcion');
            $table->string('respuesta')->nullable();
            
            // $table->string('permisoSabados');

            //$table->foreign('beneficiario')->references('id')->on('beneficiarios');

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
        //
        Schema::dropIfExists('solicitudes');
    }
}
