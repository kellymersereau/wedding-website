@extends('template')

@section('title')
	404 - Page Not Found
@endsection

@section('content')
	
	<div class="hero">
		<div class="clipped-title">
			<h1>
				{{ $exception->getStatusCode() }} error
			</h1>
		</div>
	</div>
	
	<div class="content no-padding-top" id="error-page">
		<div class="line-break first"></div>
		<div class="copy-wrapper">
			<h2>page not found!</h2>
			<p>
				We're sorry! The page you are looking for cannot be found. Please return to the homepage using the link below or use the navigation at the top of the page to browse the rest of the site.
			</p>
		</div>
		<div class="button-container single-btn">
			<div class="button-wrapper">
				<a href="/">
					<div class="copy">
						<p>
							Return to homepage
						</p>
					</div>
					<div class="img-wrapper">
						<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/arrow_right.png">
					</div>
				</a>
			</div>
		</div>


@endsection