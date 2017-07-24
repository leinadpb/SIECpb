@extends('layouts.master')

<!-- Where a single product must be shown -->

@section('content')

	@if(Session::has('edited'))
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info alert-dismissible" role='alert'>{{ Session::get('edited') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	@endif

	<div class="page-header">
		<h1><a class='back-icon' href='{{ URL::previous() }}'><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a> {{ $product->name }} <span style="font-size: 14dp"><a href='{{ route("modifyProduct", ["id" => $product->id]) }}' ttype="button" class="btn btn-sm btn-info">Modificar</a> <a href='{{ route("deleteProduct", ["id" => $product->id]) }}' type="button" class="btn btn-sm btn-danger">Eliminar</a></span></h1>
	</div>
	<div class="row">

		<div class="col-md-5">
			<a href="#" class="thumbnail">
		      <img class="img-responsive" src="{{ $product->front_image }}" alt="{{ $product->name }}">
		    </a>
		</div>

		<div class="col-md-7">
			<div class=""><h3>Descripción</h3></div>
			<hr>
			<div class="description">
				<span>{{ $product->short_des }}</span>
				<br>
				<span>Nombre de la empresa: {{ $product->product_owner }}</span>
				<br>
				<span>Plataforma utilizada: {{ $product->platform }}</span>
				<br>
			</div>
		</div>
	</div>
<br>
	<div> <!-- Start -->
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs nav-justified" role="tablist">
	  	<li role="presentation" class="active"><a href="#descripcion" aria-controls="descripcion" role="tab" data-toggle="tab">Descripción</a></li>
	    <li role="presentation"><a href="#caracteristicas" aria-controls="caracteristicas" role="tab" data-toggle="tab">Características</a></li>
	    <li role="presentation"><a href="#servicios" aria-controls="servicios" role="tab" data-toggle="tab">Servicios</a></li>
	    <li role="presentation"><a href="#paginas" aria-controls="paginas" role="tab" data-toggle="tab">Páginas</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class='container'>
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane" id="caracteristicas">
		    	<div align="left"><h3>Características</h3></div>
		    	<hr>
		    	<ul>
		    		<li>Responsive</li>
		    		<li>Moderna</li>
		    		<li>Simple</li>
		    	</ul>
		    </div>
		    <div role="tabpanel" class="tab-pane active" id="descripcion">
		    	<div align="left"><h3>Descripción</h3></div>
		    	<hr>
		    	<div class='container'>
		    		<p>
		    			Aquí va la descripción larga del producto. Máximo de 500 caracteres.
		    		</p>
		    	</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="servicios">
		    	<div align="left"><h3>Servicios</h3></div>
		    	<hr>
		    	<ul>
		    		<li>...</li>
		    		<li>...</li>
		    		<li>...</li>
		    	</ul>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="paginas">
		    	<div align="left"><h3>Páginas</h3></div>
		    	<hr>
		    	<ul>
		    		<li>...</li>
		    		<li>...</li>
		    		<li>...</li>
		    	</ul>
		    </div>
		  </div>
	  </div>
	</div>
	<!-- End -->
<br>
<hr>
@stop

@section('page-script')
<script type="text/javascript">
	
</script>
@stop