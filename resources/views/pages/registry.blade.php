@extends('template')

@section('content')
	
	<div class="hero">
		<div class="clipped-title">
			<h1>
				Gift Registry
			</h1>
		</div>
	</div>

	<div class="content no-padding-top">
		<div class="line-break first"></div>

        <h3 class="center padding-bottom">
            We are registered at the following stores:
        </h3>
		<div class="flex-wrapper">
			<div class="flex-link">
				<a href="https://www.wayfair.com/registry/wedding/KellyAndBrian10.11.2019" target="_blank" norelopener>
					<div class="img-wrapper">
						<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/wayfair-logo.jpg" alt="Wayfair Logo">
					</div>
					<div class="button">Go to registry <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/carrot-right.png"> </div>
				</a>
			</div>
			
			<div class="flex-link">
				<a href="https://www.crateandbarrel.com/gift-registry/kelly-mersereau-and-brian-taylor/r5892057" target="_blank" relnoopener>
					<div class="img-wrapper">
						<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/Crate-Barrel-Logo.jpg" alt="Crate and Barrel Logo">
					</div>
					<div class="button">Go to registry <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/carrot-right.png"> </div>
				</a>
			</div>
			
			<div class="flex-link">
				<a href="https://www.amazon.com/gp/registry/wedding/9OPF6B7IEA5U" target="_blank" norelopener>
					<div class="img-wrapper">
						<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/amazon_logo_RGB.jpg" alt="Amazon Logo">
					</div>
					<div class="button">Go to registry <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/carrot-right.png"> </div>
				</a>
			</div>
			
			<div class="flex-link">
				<a href="https://www.honeyfund.com/wedding/TaylorMersereau" target="_blank">
					<div class="img-wrapper">
						<img src="https://www.honeyfund.com/share/honeyfund3.png" alt="Honeyfund Logo">
					</div>
					<div class="button">Go to registry <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/carrot-right.png"> </div>
				</a>
			</div>

		</div>
	</div>


@endsection
