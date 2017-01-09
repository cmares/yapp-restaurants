@extends('master')

@section('cuerpo')
<h1>Nuevo restaurante</h1>
<div class="row">
	{!! Form::open(['route' => ['restaurant_store', 'method' => 'post']]) !!}
		<div class="form-group col-md-6">
		    <label>Nombre</label>
		    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del restaurante">
		</div>
		<div class="form-group col-md-6">
		    <label>Teléfono</label>
		    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del restaurante">
		</div>
		<div class="form-group col-md-12">
			<label>Dirección</label>
			<textarea name="direccion" id="direccion" rows="3" placeholder="Calle #" class="form-control"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Guardar</button>
	{!! Form::close() !!}
</div>

@endsection