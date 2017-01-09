<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurantes;
use DB;

class RestauranteController extends Controller
{
    public function index() {
    	$restaurantes = Restaurantes::select('*')->with('horarios')->paginate(10);
    	return view('findRestaurant', compact('restaurantes'));
    }

    public function create()
    {
    	return view('newRestaurant');
    }

    public function store(Request $request) {
    	if(trim($request->nombre) != '' && trim($request->telefono) != '' && trim($request->direccion) != '')
    	{
    		DB::beginTransaction();
    		$restaurantes = Restaurantes::create([
    			'nombreRestaurante' => $request->nombre,
    			'direccion' => $request->direccion,
    			'telefono' => $request->telefono
    			]);
    	}
    	if($restaurantes) {
    		DB::commit();
    		return redirect()->route('restaurantes');
    	} else {
    		DB::rollBack();
    		return redirect()->route('restaurant_create');
    	}

    }

    public function edit($id) {
    	$restaurante = Restaurantes::where('idRestaurante', '=', $id)->first();
    	return view('editRestaurant', compact('restaurante'));
    }

    public function update(Request $request) {
    	if(trim($request->nombre) != '' && trim($request->telefono) != '' && trim($request->direccion) != '')
    	{
    		DB::beginTransaction();
	    	$restaurante = Restaurantes::where('idRestaurante', '=', $request->id)
	    		->update([
	    			'nombreRestaurante' => $request->nombre,
	    			'direccion' => $request->direccion,
	    			'telefono' => $request->telefono
	    		]);
	    }
	    if($restaurante) {
    		DB::commit();
    		return redirect()->route('restaurantes');
    	} else {
    		DB::rollBack();
    		return redirect()->url('editar/'.$request->id);
    	}
    }

    public function delete($id) {
    	//
    }
}
