@extends('master')

@section('cuerpo')
<h1>Restaurantes</h1>
<table class="table table-striped">
	<tr>
		<th>Id Restaurante</th>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>Teléfono</th>
		<th>Acciones</th>
	</tr>
	@foreach($restaurantes as $rest)
	<tr>
		<td>{{ $rest->idRestaurante }}</td>
		<td>{{ $rest->nombreRestaurante }}</td>
		<td>{{ $rest->direccion }}</td>
		<td>{{ $rest->telefono }}</td>
		<td>
			<a class="btn btn-default" data-toggle="collapse" href="#collapse{{ $rest->idRestaurante }}">
				<img src="{{ asset('img/eye-icon.png') }}" alt="Mostrar" class="icon-20">
			</a>
			<a href="/editar/{{$rest->idRestaurante}}" class="btn btn-default">
				<img src="{{ asset('img/edit-icon.png') }}" alt="Editar" class="icon-20">
			</a>
			<a href="#" class="btn btn-default">
				<img src="{{ asset('img/delete-icon.png') }}" alt="Borrar" class="icon-20">
			</a>
		</td>
	</tr>
	<tr class="collapse" id="collapse{{ $rest->idRestaurante }}">
		<td colspan="5">
			<div class="well">
			    <table class="table table-striped">
			    	@if(count($rest->horarios) == 0)
			    	<tr>
			    		<td colspan="5" class="text-center">
			    			<label>No hay horarios registrados</label><br>
			    			<a class="btn btn-default" href="/horarios/{{ $rest->idRestaurante }}">
								<img src="{{ asset('img/plus-icon.png') }}" alt="Mostrar" class="icon-20"> Agregar horario
							</a>
			    		</td>
			    	</tr>			    	
					@else
					<tr>
						<td>{{ $rest->horarios }}</td>
					</tr>
					@endif
			    </table>
			</div>
		</td>
	</tr>
	@endforeach
</table>
@endsection