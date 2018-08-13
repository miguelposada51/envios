<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('descripcion');
            $table->string('estado_envio');
            $table->bigInteger('user_envia_id');
            $table->string('user_envia_nombre');
            $table->bigInteger('user_recibe_id');
            $table->string('user_recibe_nombre');
            $table->string('tipo_envio_desc');
            $table->date('fecha_envio');
            $table->date('fecha_recibido');
            $table->unsignedInteger('dep_origen_id');
            $table->unsignedInteger('dep_destino_id');
            $table->unsignedInteger('muni_origen_id');
            $table->unsignedInteger('muni_destino_id');
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
        Schema::dropIfExists('envios');
    }
}
