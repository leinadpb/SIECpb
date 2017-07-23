<!-- PORTAFOLIO -->
@extends('layouts.master')

@section('content')
<div class="myContent">
	<!-- Header -->
	<div class="page-header">
		<h1>Portafolio</h1>
	</div>
<div class='container-fluid'>
	<!-- View -->
	<div class="">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{URL::to('images/example.png')}}" alt="...">
	      <div class="caption">
	        <h3>Product Name</h3>
	        <p>Breve descripción aquí...</p>
	        <p><a href="{{route('showProduct', ['id' => 1])}}" class="btn btn-primary pButton" role="button">Detalles</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End -->
	<!-- View -->
	<div class="">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{URL::to('images/example.png')}}" alt="...">
	      <div class="caption">
	        <h3>Product Name</h3>
	        <p>Breve descripción aquí...</p>
	        <p><a href="{{route('showProduct', ['id' => 1])}}" class="btn btn-primary pButton" role="button">Detalles</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End -->
	<!-- View -->
	<div class="">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{URL::to('images/example.png')}}" alt="...">
	      <div class="caption">
	        <h3>Product Name</h3>
	        <p>Breve descripción aquí...</p>
	        <p><a href="{{route('showProduct', ['id' => 1])}}" class="btn btn-primary pButton" role="button">Detalles</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End -->
</div>
	
</div>
<br>
@endsection