<?php

namespace envios;

use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    //
    protected $table = "envios";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_envia_nombre', 'user_envia_id', 'user_recibe_nombre',
        'user_recibe_id', 'tipo_envio_desc', 'descripcion','estado_envio', 'fecha_envio', 'fecha_recibido',
        'dep_origen_id', 'dep_destino_id', 'muni_origen_id','muni_destino_id',
    ];
}
