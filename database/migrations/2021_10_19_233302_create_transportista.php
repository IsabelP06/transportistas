<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportista', function (Blueprint $table) {
            $table->id();
            $table->string("sap");
            $table->string("nombre");
            $table->string("correo");
            $table->string("usuario");
            $table->string("password");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transportista');
    }
}
