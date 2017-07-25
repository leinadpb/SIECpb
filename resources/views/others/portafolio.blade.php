<!-- PORTAFOLIO -->
@extends('layouts.master')

@section('content')
<div class="myContent">
	<!-- Header -->
	<div class="page-header">
		<h1>Portafolio 
			@if (!Auth::guest()) 
			<a href='{{ route("add_product") }}' class='add-product-icon'><span class='glyphicon glyphicon-plus' aria-hidden="true"></span></a>
			@endif
		</h1>
	</div>
<div class='container'>
	<!-- Search Box -->
	<div class='search-box'>
		<form method='post' action=''>

		</form>
	</div>
	<!-- End Search Box -->
	@foreach($products as $p)
	<!-- View -->
	<div class="view">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{ $p->front_image }}" alt="{{ $p->name }}">
	      <div class="caption">
	        <h3>{{ $p->name }}</h3>
	        <p>{{ $p->short_des }}</p>
	        <p><a href="{{route('showProduct', ['id' => $p->id ])}}" class="btn btn-primary pButton" role="button">Detalles</a></p>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End -->
	@endforeach
</div>
	
</div>
<br>
@endsection