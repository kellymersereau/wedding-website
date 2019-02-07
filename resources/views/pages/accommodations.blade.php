@extends('template')

@section('content')
	
	<div class="hero">
		<div class="clipped-title">
			<h1>
				Accommodations
			</h1>
		</div>
	</div>
	<div class="content">
		<div class="hotel-wrapper">
			<div class="text-wrapper">
				<h3>The Berkeley Hotel</h3>
				<p class="address">
					1401 Ocean Ave
				</p>
				<p class="address">
					Asbury Park, NJ 07712
				</p>
				<p class="phone">
					<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/phone.png">
					<a href="tel:1-732-776-6700">732-776-6700</a>
				</p>
				<p class="website">
					<a href="https://www.berkeleyhotelnj.com/" title="The Berkeley Oceanfront Hotel - Asbury Park, NJ">www.berkeleyhotelnj.com</a>
				</p>
				<p class="details">
					For guests wishing to stay in Asbury Park, we have reserved a block of rooms at The Berkeley Hotel. Please mention the Mersereau/Taylor wedding when calling to make your reservation.
				</p>
			</div>
			<div class="map-wrapper">
				<div id="map"></div>
			</div>
		</div>
		<div class="hotel-wrapper">
			<div class="text-wrapper" id="theasburyhotel">
				<h3>The Asbury Hotel</h3>
				<p class="address">
					210 5th Avenue
				</p>
				<p class="address">
					Asbury Park, NJ 07712
				</p>
				<p class="phone">
					<img src="https://s3.amazonaws.com/kellyandbrianwedding.com/icons/phone.png">
					<a href="tel:1-732-774-7100">
						732-774-7100
					</a>
				</p>
				<p class="website">
					<a href="https://www.theasburyhotel.com/" title="The Asbury Hotel - Asbury Park, NJ">www.theasburyhotel.com</a>
				</p>
				<p class="details">
					Guests can also book rooms at The Asbury Hotel. It is a short walk down the street from The Berkeley Hotel.
				</p>
			</div>
			
			<div class="text-wrapper" id="airbnb">
				<h3>Airbnb</h3>
				<p class="website">
					<a href="https://www.airbnb.com/s/Asbury-Park--NJ--United-States/homes?refinement_paths%5B%5D=%2Fhomes&checkin=2019-10-11&checkout=2019-10-12&adults=1&children=0&infants=0&guests=1&query=Asbury%20Park%2C%20NJ%2C%20United%20States&place_id=ChIJkcxLDJ8uwokR8HKvyNgi7ZQ&allow_override%5B%5D=&s_tag=beSLins8" title="Asbury Park, NJ Airbnb">www.airbnb.com</a>
				</p>
				<p class="details">
					Additionally, guests can look into Airbnb options in Asbury Park for the weekend. There are multiple, reasonably priced accommodations available within walking distance of The Berkeley Hotel.
				</p>
			</div>
		</div>
	</div>
	


@endsection

@section('extra-js')
	<script async src="https://maps.googleapis.com/maps/api/js?key={{ env("GOOGLE_MAPS_API") }}"></script>
@endsection