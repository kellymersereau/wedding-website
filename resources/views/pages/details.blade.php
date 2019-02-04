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
		<p>
			We are getting married at <span class="bold">The Berkeley Hotel</span> in <span class="bold">Asbury Park, NJ</span> on <span class="bold">October 11<sup>th</sup>, 2019</span>.
		</p>
		<h2>
			Ceremony
		</h2>
		<p class="bold">
			Where: <span class="regular">The roof</span>
		</p>
		<p class="bold">
			What time: <span class="regular">5:30pm</span>
		</p>
		<p>
			Our ceremony will take place on the roof of The Berkeley Hotel at 5:30pm <span class="bold">sharp</span>.  To get to the roof, go to the mezzanine level of the hotel and take the center elevator up to the roof.  There is only one elevator that goes to the roof, so please come early to make sure you are able to get to the ceremony on time.
		</p>
		
		<h2>
			Reception
		</h2>
		<p class="bold">
			Where: <span class="regular">The mezzanine level</span>
		</p>
		<p class="bold">
			What time: <span class="regular">6:00pm</span>
		</p>
		<p>
			Our reception will take place on the mezzanine level of The Berkeley Hotel, with cocktail hour starting immediately after the ceremony.
		</p>
		
		<h2>
			After Party
		</h2>
		<p class="bold">
			Where: <span class="regular">Asbury Lanes</span>
		</p>
		<p class="bold">
			What time: <span class="regular">11:30pm</span>
		</p>
		<p>
			Since we're in Asbury, we figured we would take advantage of the situation and have our after party someplace super cool, so we decided to have it at <span class="bold">Asbury Lanes</span>.  Asbury Lanes is a 3 minute walk from The Berkeley Hotel, once the reception has ended we will make our way over to the lanes for some drinking, bowling and more fun.
		</p>
		
		<div class="cta-wrapper">
			<div class="cta">
				<p>
					We know everyone is looking to get wild and have a fantastic evening, so we've put together a list of accommodations nearby that way no one has to drive home.
				</p>
				<a href="/wedding-details/accommodations">
					Accommodations
				</a>
			</div>
			
			<div class="cta">
				<p>
					Since this is going to be a super fun night, we figured why not make it into a super fun weekend.  We don't want the party to stop after the reception so we've made some additional plans for the rest of the wedding weekend.
				</p>
				<a href="/wedding-details/accommodations">
					Other events
				</a>
			</div>
		</div>
	</div>


@endsection