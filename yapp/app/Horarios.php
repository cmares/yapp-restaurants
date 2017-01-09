<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
     protected $fillable = [
        'dia', 'hora_inicio', 'hora_fin','id_restaurante'
    ];
    protected $visible = [
        'idHorario','dia','hora_inicio', 'hora_fin', 'id_restaurante', 'restaurante'
    ];

    public function restaurante()
    {
        return $this->belongsTo('App\Restaurante','id_restaurante');
    }

    public function scopeBuscarEntreHorario($query, $hora_inicio, $hora_fin)
    {
        $query->where('hora_inicio','>=', $hora_inicio)
              ->where('hora_fin','<=', $hora_fin);
    }

    public function scopeDespuesHoraInicio($query, $hora)
    {
        $query->where('hora_inicio', '>=', $hora);
    }

    public function scopeHoraExacta($query, $hora) 
    {
        $query->where('hora_inicio', '>=', $hora)
              ->where('hora_fin','<=', $hora);
    }
}
