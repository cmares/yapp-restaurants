@extends('master')

@section('cuerpo')
<h1>Horario del restaurante {{ $horarios->restaurante->nombreRestaurante }}</h1>
<table class="table table-striped">
	<tr>
		<th>Día</th>
		<th>Hora Inicio</th>
		<th>Hora Fin</th>
	</tr>
	@foreach($horarios as $horario)
	<tr>
		<td>{{ $horario->dia }}</td>
		<td>{{ $horario->hora_inicio }}</td>
		<td>{{ $horario->hora_fin }}</td>
	</tr>
	@endforeach
</table>
@endsection