<!-- PORTAFOLIO -->
@extends('layouts.master')

@section('content')
<div class="myContent">
	<!-- Header -->
	<div class="page-header">
		<h1>Portafolio</h1>
	</div>
<div class='container'>
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