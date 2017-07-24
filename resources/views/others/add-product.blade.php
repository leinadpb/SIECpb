<!-- Add a new product -->
@extends('layouts.master')

@section('content')

	<div class="page-header">
		<h1><a class='back-icon' href='{{ URL::previous() }}'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a> Agregar al portafolio</h1>
	</div>
	<div class='container-fluid'>
		<!-- Start Form -->
			@include('partials.add-form')
		<!-- End Form -->
	</div>
	<br>

@endsection