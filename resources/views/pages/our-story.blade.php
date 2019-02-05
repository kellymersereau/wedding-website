@extends('template')

@section('extra-css')
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
@endsection

@section('content')
	
	<div class="hero">
		<div class="clipped-title">
			<h1>
				Our Story
			</h1>
		</div>
	</div>
	
	<div class="slider-wrapper">
		<div class="slider">
			<div>
				<img src="/img/photos/engagement/Me-15.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-24.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-50.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-75.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-83.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-19.jpg">
			</div>
			<div>
				<img src="/img/photos/engagement/Me-76.jpg">
			</div>
		</div>
	</div>
@endsection

@section('extra-js')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
@endsection