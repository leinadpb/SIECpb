<!-- Add a new product -->
@extends('layouts.master')

@section('content')

	<div class="page-header">
		<h1><a class='back-icon' href='{{ URL::previous() }}'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a> Modificar elemento</h1>
	</div>
	<div class='container-fluid'>
		<!-- Start Form -->
			@include('partials.modify-form')
		<!-- End Form -->
	</div>
	<br>

@endsection