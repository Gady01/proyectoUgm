@extends('layout')
@section('content')

		<form method="POST" action="{{route('mantenimiento.update', $manten)}}">
	{{csrf_field()}}{{ method_field('PUT')}}

<div class="col-md-4">
	<div class="card-header">
                <h3 class="card-title text-center text-primary">Actualizar Registros</h3>
     </div>
	<div class="form-group  {{$errors->has('t_equipo') ? 'has-error':'' }}">
		<label>Tipo de Equipo</label>
		<input type="" name="t_equipo" class="form-control" value="{{ old('t_equipo',$manten->t_equipo)}}">
		{!! $errors->first('t_equipo','<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group {{$errors->has('marca') ? 'has-error':''}}">
		<label>Marca</label>
		<input type="" name="marca" class="form-control"  value="{{ old('marca',$manten->marca) }}">
		{!! $errors->first('marca','<span class="help-block">:message</span>')!!}
	</div>

	<div class="form form-group {{$errors->has('modelo') ? 'has-error':''}}">
		<label>Model	o de Equipo</label>
		<input type="" name="modelo" class="form-control" value="{{ old('modelo',$manten->modelo) }}">
		{!! $errors->first('modelo','<span class="help-block">:message</span>')!!}
	</div>

	<div class="form form-group {{$errors->has('n_serie') ? 'has-error':''}}">
		<label>Número de Serie</label>
		<input type="" name="n_serie" class="form-control" value="{{ old('n_serie',$manten->n_serie) }}">
		{!! $errors->first('n_serie','<span class="help-block">:message</span>')!!}
	</div>

	<div class="form-group {{$errors->has('fecha_manten') ? 'has-error':''}}">
		<label>Fecha de publicación</label>

			<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
				<input type="text" name="fecha_manten" class="form-control pull-right" value="{{ old('fecha_manten',$manten->fecha_manten ? $manten->fecha_manten->format('d-m-Y') : null) }}" id="datepicker">
			</div>

		{!! $errors->first('fecha_manten','<span class="help-block">:message</span>')!!}		
	</div> 

	<label></label> <!--salto de lina para el btn GUARDAR-->

	 <div class="box-foter">
                  <button type="submit" class="btn btn-primary btn-inline btn-lg">Guardar</button>
                   <button action="{{ route('mantenimiento')}}" type="submit" class="btn btn-default float-right btn-lg">Cancel</button>               
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