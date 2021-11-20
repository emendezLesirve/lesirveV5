@extends('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos <a href="articulos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.articulo.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
	                 
                    <th>Id</th>
					<th>Nombre</th>
                    <th>Precio</th>
					
				</thead>
               @foreach ($articulos as $art)
				<tr>
                    <td>{{ $art->id}}</td>
					<td>{{ $art->name}}</td>
                    <td>{{ $art->price}}</td>
	
				<td>
				<a href="{{URL::action('ArticuloController@edit',$art->id)}}"><button class="btn btn-info">Editar</button></a>
                <a href="" data-target="#modal-delete-{{$art->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
				</td>
				</tr>
				@include('almacen.articulo.modal')
				@endforeach
			</table>
		</div>
		
	</div>
</div>


@endsection