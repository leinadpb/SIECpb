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
			<div class=""><h3>Descripción</h3></div>
			<hr>
			<div class="description">
				<span>{{ $product->short_des }}</span>
				<br>
				<span>Nombre de la empresa: {{ $product->product_owner }}</span>
				<br>
				<span>Plataforma utilizada: {{ $product->platform }}</span>
				<br>
				<span>Tipo de producto: {{ $product->type }}</span>
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
		    			{{ $product->long_des }}
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