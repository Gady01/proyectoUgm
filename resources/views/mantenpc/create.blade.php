@extends('layout')
@section('content')

<div class="col-md-4">
		<form method="POST" action="{{route('mantenimiento.store')}}">
	{{csrf_field()}}

<div class="card-header">
                <h3 class="card-title text-center text-primary">Nuevo Equipo</h3>
     </div>

<div class="form-group  {{$errors->has('t_equipo') ? 'has-error':'' }}">
	<label>Tipo de Equipo</label>
	<input type="" name="t_equipo" class="form-control" placeholder="Tipo de equipo" value="{{ old('t_equipo')}}">
	{!! $errors->first('t_equipo','<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {{$errors->has('marca') ? 'has-error':''}}">
	<label>Marca</label>
	<input type="" name="marca" class="form-control" placeholder="Marca"  value="{{ old('marca') }}">
	{!! $errors->first('marca','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{$errors->has('modelo') ? 'has-error':''}}">
	<label>Modelo de Equipo</label>
	<input type="" name="modelo" class="form-control" placeholder="Modelo" value="{{ old('modelo') }}">
	{!! $errors->first('modelo','<span class="help-block">:message</span>')!!}
</div>	

<div class="form-group {{$errors->has('n_serie') ? 'has-error':''}}">
	<label>Número de Serie</label>
	<input type="" name="n_serie" class="form-control" placeholder="Numero de serie" value="{{ old('n_serie') }}">
	{!! $errors->first('n_serie','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group {{$errors->has('fecha_manten') ? 'has-error':''}}">
	<label>Fecha de publicación</label>

		<div class="input-group date">
			<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</div>
	<input type="text" name="fecha_manten" class="form-control pull-right" placeholder="Fecha" value="{{ old('fecha_manten') }}" id="datepicker">
		</div>
	{!! $errors->first('fecha_manten','<span class="help-block">:message</span>')!!}	
</div> 

<label></label> <!--salto de lina para el btn GUARDAR-->


		<div class="box-foter">
			<button type="submit" class="btn btn-primary btn-block btn-lg">Guardar</button>
		</div>





		</form>
@stop
</div>
{{-- CODIGO PARA CALENDARIO --}}
@push('style')

	<link rel="stylesheet" type="text/css" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


@endpush
@push('script')

	<script src="\adminlte\bower_components\bootstrap-datepicker\dist\js\bootstrap-datepicker.min.js"></script>	
	<script>
	
		$('#datepicker').datepicker({
			languaje: "es",
			autoclose: true,
			format: 'dd-mm-yyyy',
			todayHighligt: true,
		});
	</script>


@endpush
