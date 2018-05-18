@extends('layout')
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tipo de Equipo</h3>
			</div>
			<!--/box-header-->
			<div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Tipo de Equipo</th>
							<th>Proximo</th>
							<th>Actualizado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($t_equipos as $eq)
						<tr>
							<td>{{ $eq->nombre}}</td>

							<td>{{ $eq->created_at}}</td>
							<td>{{ $eq->updated_at}}</td>
							
							<td>
								
								<a href="{{route('t_equipo.edit',$eq)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>

								<form method="POST" action="{{route('t_equipo.destroy',$eq)}}" style="display: inline">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="btn-button" class="btn btn-xs btn-danger" onclick="return confirm('¿Estas seguro de eliminar datos?')"><i class="fa fa-trash-o"></i></button></form>
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