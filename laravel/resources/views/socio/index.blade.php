@extends('layouts.admin')
	@section('content')

<table class="table">
		<thead>
			<th>Nombre</th>
			<th>direccion</th>
			<th>telefono</th>
		</thead>
	@foreach($socios as $socio)
			<tbody>
				<td>{{$socio->nombre}}</td>
				<td>{{$socio->direccion}}</td>
				<td>{{$socio->telefono}}</td>
			</tbody>
		@endforeach
	</table>

	@stop