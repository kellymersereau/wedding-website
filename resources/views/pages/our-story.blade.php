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
		<div class="copy-wrapper">
			<p>
				We first met in 2009 at a typical Thursday night, beginning of the school year, Phi Kap party. Brian pretended to be a cat and I immediately fell in love.  We were young and weird and spent the next year and a half being friends.  In the spring of 2011, during my senior year, we decided we should probably start dating and the rest is history.
			</p>
			<p>
				Over the next 8 years we did a lot of super fun stuff and kept falling madly in love with one another as each year passed.  We went to dozens of concerts, discovered love for new bands together, and became Frank Turner super fans.  We frolicked around Jersey City, NYC and Belmar with friends.  We traveled to Puerto Rico, Key West, Orlando, San Diego and Las Vegas.  We discovered our love for weird, nerdy and magical things when we went to Comic Con in San Diego.  We expanded on my love for all things horror and Brian's obsession with halloween by getting the shit scared out of us at Halloween Horror Nights at Universal Orlando.
			</p>
			<p>
				After about 5 years of dating, Brian bought his parents house in Jamesburg and I moved in with my 2 cats Charlie and Mike.  After a couple of months of living together we realized the only thing missing was a puppy, so we adopted Sadie and our little family was finally complete.
			</p>
			<p>
				Last June, we were down in Asbury Park for a date night and Brian finally popped the question!  We went to Taka for dinner and then walked down to The Wonder Bar to sit outside, listen to some tunes and admire all of the adorable puppies there.  After a while, the cover band started playing a Bruce Springsteen song (Born to Run obviously) and Brian surprised me by pulling out a ring and asking if I would marry him. I obviously started crying and said yes.  It was a perfect night, in a perfect location, with perfect music and it was a perfect start to the rest of our lives together.
			</p>
		</div>

		<div class="img-flex-container">
			<div class="row">
                <div class="column">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/baywatch-baby-brian.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/baby-kelly.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/first-picture-together.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/first-mytie.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/police-academy-graduation.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/sworn-in.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/unity-tour.JPG">

                </div>
                <div class="column">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/djais-2.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/first-formal.jpeg">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/brian-sadie.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/belmar-fun.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/snowboarding.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/us-with-frank.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/washington-dc.JPG">

                </div>
                <div class="column">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/wild-at-weddings.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/brian-mike.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/cats.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/kelly-puppy.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/pets.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/wrestlers-at-djais.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/comic-con.JPG">
                </div>
                <div class="column">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/engaged.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/disney-castle.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/wrestlers.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/kangaroo-sombrero-halloween.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/v-for-vendetta.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/zombies-2011-1.JPG">
                    <img src="https://s3.amazonaws.com/kellyandbrianwedding.com/images/zombies-2013-2.JPG">
                </div>

            </div>

		</div>
	</div>
@endsection

@section('extra-js')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
@endsection
