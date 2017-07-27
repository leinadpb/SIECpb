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
		<h1>
			<a class='back-icon' href='{{ route("portafolio") }}'><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a> {{ $product->name }} <span>
			@if (!Auth::guest()) 
			<a href='{{ route("modifyProduct", ["id" => $product->id]) }}' class='icons'><span class='glyphicon glyphicon-pencil' aria-hidden="true"></span></a>
		<span><a href='{{ route("deleteProduct", ["id" => $product->id]) }}' class='icons'><span class='glyphicon glyphicon-remove' aria-hidden="true"></span></a>
			@endif
		
	</div>
	<div class="row">

		<div class="col-md-5">
			@if(count($product->images()->get()) == 0)
				<a href="#" class="thumbnail">
		      		<img class="img-responsive" src="{{ $product->front_image }}" alt="{{ $product->name }}">
		    	</a>
			@else
				@include('partials.slider')
			@endif
			
		</div>

		<div class="col-md-7">
			<div class="des-title"><h3>Descripción</h3></div>
			<hr>
			<div class="description">
				<div class=''>
					{{ $product->long_des }}
				</div>
			</div>
		</div>
	</div>
<br>
	<div> <!-- Start -->
	  <!-- Nav tabs -->
	  <ul class="nav nav-pills nav-justified" role="tablist">
	  	<li role="presentation" class="active"><a href="#descripcion" aria-controls="descripcion" role="tab" data-toggle="tab">Ver video</a></li>
	    <li role="presentation"><a href="#detalles" aria-controls="detalles" role="tab" data-toggle="tab">Detalles</a></li>
	    <li role="presentation"><a href="#servicios" aria-controls="servicios" role="tab" data-toggle="tab">Contacto</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class='container'>
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane details" id="detalles">
		    	<br>
		    		<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Cliente </p></div>
					  		<div class='value'>{{ $product->name }}</div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Plataforma </p></div>
					  		<div class='value'>{{ $product->platform }}</div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Características </p></div>
					  		<div class='value'>{{ $product->characteristics }}</div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Valor aproximado </p></div>
					  		<div class='value'><span class="moneda">US$</span>{{ $product->price }}</div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Dirección web </p></div>
					  		<div class='value'><a href='{{ $product->product_url }}' target="_blank">{{ $product->product_url }}</a></div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Propietario </p></div>
					  		<div class='value'>{{ $product->product_owner }}</div>
					  	</div><hr>
					  	<div class='myGroup'>
					  		<div align="left"><p class='mini-title'>Creado por </p></div>
					  		<div class='value'>{{ $product->product_creator }}</div>
					  	</div>
					  </div>
					</div>
		    </div>
		    <div role="tabpanel" class="tab-pane active" id="descripcion">
		    <br>
		    	<div class="panel panel-default">
				  <div class="panel-body">
					<div align="center"><h3 >{{ $product->name }}</h3></div>
			    	<hr>
				    <div class="embed-responsive embed-responsive-16by9">
				    	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F6GgZMY0YkY"></iframe>
					</div>
				  </div>
				</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="servicios">
		    	<div align="left"><h3>Contacto</h3></div>
		    	<hr>
		    	<div class='container'>
			    	<div class="panel panel-default">
					  <div class="panel-body">
					    {{ $product->long_des }}
					  </div>
					</div>
		    	</div>
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