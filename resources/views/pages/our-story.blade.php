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
	
	<div class="content no-padding-top">
		<div class="line-break first"></div>
		
	</div>
	
	<div class="slider-wrapper">
		<div class="slider">
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-15.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-24.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-50.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-75.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-83.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-19.jpg">
			</div>
			<div>
				<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/Me-76.jpg">
			</div>
		</div>
	</div>
@endsection

@section('extra-js')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
@endsection