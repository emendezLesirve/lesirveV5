@extends('layouts.admin')

@section ('contenido')

<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>		
			{!!Form::open(array('url'=>'adm/articulos','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
	<div class="row">
	    <div class="col-lg-6 col-sm-6 col-xs-12">
		   <div class="form-group">
            	<label for="name">Nombre</label>
            	<input type="text" name="name"require value="{{old('name')}}" class="form-control" placeholder="Nombre...">
            </div>
   </div>
		<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="form-group">
            	<label for="price">Precio</label>
            	<input type="text" name="price"require value="{{old('price')}}" class="form-control" placeholder="Precio...">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-xs-12">
		   <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
				


            </div>
		</div>
	</div>

			{!!Form::close()!!}	


@endsection