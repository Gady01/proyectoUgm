@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Mantenimientos</h3>
			</div>
			<!--/box-header-->
			<div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Tipo de pc</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>#Serie</th>
							<th>Proximo Mantenimiento</th>
							<th>Fecha de proactivo</th>
							<th>Actualizado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mantenimientos as $manten)
						<tr>
							<td>{{ $manten->t_equipo}}</td>
							<td>{{ $manten->marca}}</td>
							<td>{{ $manten->modelo}}</td>
							<td>{{ $manten->n_serie}}</td>
							<td>{{ $manten->fecha_manten->diffForHumans()}}</td>
							<td>{{ $manten->created_at}}</td>
							<td>{{ $manten->updated_at}}</td>
							
							<td>
								
								<a href="{{ route('mantenimiento.edit',$manten) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>

								<form method="POST" action="{{ route('mantenimiento.destroy',$manten) }}" style="display: inline">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="btn-button" class="btn btn-xs btn-danger" onclick="return confirm('¿Estas seguro de eliminar datos?')"><i class="fa fa-trash-o"></i></button></form>
							</td>
							</tr>
						@endforeach
					
				</table>
			</div>
			<!--/.box-body-->
		</div>
		<!--/.box-->
	</div>
	<!--/.col-->
</div>
@stop