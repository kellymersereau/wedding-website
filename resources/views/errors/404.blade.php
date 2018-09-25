@extends('template')

@section('title')
	404 - Page Not Found
@endsection

@section('content')
	
	<div class="placeholder-hero">
		<h1>{{ $exception->getStatusCode() }}</h1>
		<h2>Sorry &mdash; We're unable to find the page you are looking for.</h2>
		<a href="/" title="Home">Go back.</a>
	</div>


@endsection