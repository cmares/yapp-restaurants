@extends('master')

@section('cuerpo')
<h1>Nuevo restaurante</h1>
<div class="row">
	{!! Form::open(['route' => ['restaurant_update', $restaurante->idRestaurante], 'method' => 'put']) !!}
		 <input type="hidden" name="id" id="id" value="{{ $restaurante->idRestaurante }}">
		<div class="form-group col-md-6">
		    <label>Nombre</label>
		    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del restaurante" value="{{ $restaurante->nombreRestaurante }}">
		</div>
		<div class="form-group col-md-6">
		    <label>Teléfono</label>
		    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del restaurante" value="{{ $restaurante->telefono }}">
		</div>
		<div class="form-group col-md-12">
			<label>Dirección</label>
			<textarea name="direccion" id="direccion" rows="3" placeholder="Calle #" class="form-control">{{ $restaurante->direccion }}</textarea>
		</div>
		<button type="submit" class="btn btn-default">Guardar</button>
	{!! Form::close() !!}
</div>

@endsection