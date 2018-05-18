@extends('layout')
@section('content')

<div class="col-md-4">
	<form method="POST" action="{{route('t_equipo.store')}}">
		{{csrf_field()}}

		<div class="card-header">
	                <h3 class="card-title text-center text-primary">Tipo de Equipo</h3>
		</div>

		<div class="form-group  {{$errors->has('nombre') ? 'has-error':'' }}">
			<label>Tipo de Equipo</label>
			<input 	type="" name="nombre"
					class="form-control"
					placeholder="Tipo de equipo"
					style="text-transform:capitalize" 
					value="{{ old('nombre')}}">

			{!! $errors->first('nombre','<span class="help-block">:message</span>') !!}
		</div>


		<label></label> <!--salto de lina para el btn GUARDAR-->


		<div class="box-foter">
				<button type="submit" 
						class="btn btn-primary btn-block btn-lg">Guardar</button>
		</div>

	</form>
</div>
@stop