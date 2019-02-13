<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>
		@if( ! empty($title))
			{{ $title }}
		@else
			@yield('title')
		@endif
	</title>
	<meta name="description" content="@if(! empty($description)) {{ $description }} @endif">
	<meta name="keywords" content="@if(! empty($keywords)) {{ $keywords }} @endif">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="og:title" content="@if( ! empty($title)) {{ $title }} @else @yield('title') @endif"/>
	<meta name="og:image" content="{{asset('https://s3.amazonaws.com/kellyandbrianwedding.com/images/love-2014.png')}}"/>
	
	<link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87671899-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-87671899-2');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	                                                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5G3G2NN');</script>
	<!-- End Google Tag Manager -->

	
@yield('extra-css')
	<!-- Styles -->
	<link rel="stylesheet" href="/css/app.min.css" type="text/css" media="all">
</head>
<body class="@if(! empty($pageClass)) {{ $pageClass }} @endif">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G3G2NN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	@include('partials.navigation')
	
	<div class="content-wrapper">
		@yield('content')
	</div>


<!-- footer -->
@include('partials.footer')

{{-- THIS IS NOT ACTUALLY BOOTSTRAP, THIS IS JUST THE VENDOR IMPORTS NEEDS TO BE LOADED FIRST CANNOT ASYNC LOAD THIS OTHERWISE REGULAR JS DOESN"T WORK AND THROWS ERRRORS --}}

<script src="/js/bootstrap.min.js"></script>
@yield('extra-js')
<script src="/js/app.min.js" async></script>

</body>
</html>
