@extends('layouts.admin')
	@section('content')



	{!!Form::open(['route'=>'socio.store', 'method'=>'POST'])!!}


<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>


<div class="form-group">
		{!!Form::label('direccion','Contraseña:')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	

	<div class="form-group">
		{!!Form::label('telefono','Telefono:')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>

	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection