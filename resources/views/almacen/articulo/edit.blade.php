@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Articulo: {{$articulos->name}}</h3>
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


		<div class="row">
	    <div class="col-lg-6 col-sm-6 col-xs-12">
		   <div class="form-group">
            	<label for="name">Nombre</label>
            	<input type="text" name="name"require value="{{$articulos->name}}" class="form-control" placeholder="Nombre...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-xs-12">
		<div class="form-group">
            	<label for="price">Precio</label>
            	<input type="text" name="price"require value="{{$articulos->price}}" class="form-control" placeholder="Precio...">
            </div>
       </div>
		<div class="col-lg-6 col-sm-6 col-xs-12">
		   <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	</div>

            <a href="/adm/articulos"><button class="btn btn-success">Articulos</button></a>
		</div>
	</div>
@endsection