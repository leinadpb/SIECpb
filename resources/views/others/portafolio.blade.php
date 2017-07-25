<!-- PORTAFOLIO -->
@extends('layouts.master')

@section('content')
<div class="myContent">
	<!-- Header -->
	<div class="myHeader row">
		<div class='col-md-2'>
			<h1>Portafolio </h1>
		</div>
		<!-- Search Box -->
		<div class='col-md-4 search-box'>
			<form method='get' action='{{ route("search") }}'>
				<div class="input-group">
		      		<input name='search' type="text" class="form-control" placeholder="Search for...">
		      		<span class="input-group-btn">
		        		<button class="btn btn-primary" type="submit">Go!</button>
		      		</span>
		    	</div><!-- /input-group -->
			</form>
			<a class='btn btn-scondary btn-sm' role="button" data-toggle="collapse" href="#search-advanced-form" aria-expanded="false" aria-controls="collapseExample">Búsqueda avanzada</a>
		</div>
	<!-- End Search Box -->
	</div>
@include('partials.advance-search-fom')
<div class='container'>
	@if(Session::has('mySearch'))
		<div><p class='text-info'>{{ Session::get('mySearch')}}</p></div>
	@endif
	<br>
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