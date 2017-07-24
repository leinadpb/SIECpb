<!-- Add a new product -->
@extends('layouts.master')

@section('content')

	<div class="page-header">
		<h1>Agregar al portafolio</h1>
	</div>
	<div class='container-fluid'>
		<!-- Start Form -->
			@include('partials.add-form')
		<!-- End Form -->
	</div>
	<br>

@endsection