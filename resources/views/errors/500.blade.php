@extends('template')

@section('title')
	500 - Internal Server Error
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
			<h2>internal server error!</h2>
			<p>
				We're sorry! Most likely, there is a temporary communication problem and the service timed-out. Please return to the homepage using the link below or use the navigation at the top of the page to browse the rest of the site.
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