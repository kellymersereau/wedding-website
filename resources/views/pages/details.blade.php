@extends('template')

@section('content')
	
	<div class="hero">
		<div class="clipped-title">
			<h1>
				Wedding Details
			</h1>
		</div>
	</div>
	
	<div class="content">
		<div class="line-break"></div>
		
		<div class="intro">
			<h2>October 11<sup>th</sup>, 2019</h2>
			<h3>The Berkeley Oceanfront Hotel</h3>
			<h3>Asbury Park, NJ</h3>
		</div>
		
		<div class="line-break light"></div>
		
		<h2>
			Ceremony
		</h2>
		<div class="copy-group">
			<p>
				<span class="bold">Where:</span> The roof
			</p>
			<p class="padding-bottom">
				<span class="bold">What time:</span> 5:30pm
			</p>
			<p>
				Our ceremony will take place on the roof of The Berkeley Hotel at 5:30pm <span class="bold">sharp</span>.  To get to the roof, go to the mezzanine level of the hotel and take the center elevator up to the roof.  There is only one elevator that goes to the roof, so please come early to make sure you are able to get to the ceremony on time.
			</p>
		</div>
		
		<div class="line-break light"></div>
		<h2>
			Reception
		</h2>
		<div class="copy-group">
			<p>
				<span class="bold">Where:</span> The mezzanine level
			</p>
			<p class="padding-bottom">
				<span class="bold">What time:</span> 6:00pm
			</p>
			<p>
				Our reception will take place on the mezzanine level of The Berkeley Hotel, with cocktail hour starting immediately after the ceremony.
			</p>
		</div>
		
		<div class="line-break light"></div>
		<h2>
			After Party
		</h2>
		<div class="copy-group">
			<p>
				<span class="bold">Where:</span> Asbury Lanes
			</p>
			<p class="padding-bottom">
				<span class="bold">What time:</span> 11:30pm
			</p>
			<p>
				Since we're in Asbury, we figured we would take advantage of the situation and have our after party someplace super cool, so we decided to have it at Asbury Lanes.  Asbury Lanes is a 3 minute walk from The Berkeley Hotel, once the reception has ended we will make our way over to the lanes for some drinking, bowling and more fun.
			</p>
		</div>
		
		<div class="line-break"></div>
		
		<div class="cta-wrapper">
			<h2 class="grey">
				Additional information:
			</h2>
			
			<div class="button-container">
				<div class="button-wrapper">
					<a href="/wedding-details/accommodations">
						<div class="copy">
							<p>
								Accommodations
							</p>
						</div>
						<div class="img-wrapper">
							<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/arrow_right.png">
						</div>
					</a>
				</div>
				<div class="button-wrapper">
					<a href="/wedding-details/other-events">
						<div class="copy">
							<p>
								Other events
							</p>
						</div>
						<div class="img-wrapper">
							<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/arrow_right.png">
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>


@endsection