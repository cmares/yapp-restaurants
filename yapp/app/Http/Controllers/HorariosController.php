<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horarios;

class HorariosController extends Controller
{
    public function getHorarios($idRestaurante) {
    	$horarios = Horarios::where('id_restaurante','=', $idRestaurante)->with('restaurante')->first();
    	dd($horarios);
    	return view('findHorarios', compact('horarios'));
    }
}
