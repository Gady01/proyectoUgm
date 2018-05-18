@extends('layout')
	@section('content')

		<div class="col-md-4">
			<form method="POST" action="{{route('t_equipo.update', $t_equipo)}}">
				{{csrf_field()}}{{ method_field('PUT')}}


				<div class="card-header">
                	<h3 class="card-title text-center text-primary">Actualizar Tipo de Equipo</h3>
    			 </div>
				<div class="form-group {{$errors->has('nombre') ? 'has-error':'' }}">
					<label>Tipo de Equipo</label>
						<input type="" 	name="nombre" 
										class="form-control"
										style="text-transform:capitalize"  
										value="{{ old('nombre',$t_equipo->nombre)}}">
					{!! $errors->first('nombre','<span class="help-block">:message</span>') !!}
				</div>

	

	<label></label> <!--salto de lina para el btn GUARDAR-->

	 	<div class="box-foter">
                  <button type="submit" class="btn btn-primary btn-inline btn-lg">Guardar</button>
                   <button action="{{ route('t_equipo')}}" type="submit" class="btn btn-default float-right btn-lg">Cancel</button>               
     	 </div>

		





		</form>
</div>
@stop
