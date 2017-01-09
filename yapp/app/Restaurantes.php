<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurantes extends Model
{
    protected $fillable = [
        'nombreRestaurante', 'direccion', 'telefono',
    ];
    protected $visible = [
        'idRestaurante','nombreRestaurante', 'direccion', 'telefono', 'horarios'
    ];

    public function horarios()
    {
        return $this->hasMany('App\Horarios','id_restaurante');
    }
}
