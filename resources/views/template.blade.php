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
	<meta name="og:image" content="{{asset('./img/photos/love-2014.png')}}"/>
	
	<link rel="shortcut icon" href="{{asset('/favicon.ico')}}">
	<!-- Styles -->
	<link rel="stylesheet" href="/css/app.min.css" type="text/css" media="all">
</head>
<body class="@if(! empty($pageClass)) {{ $pageClass }} @endif">

	@include('partials.navigation')
	
	<div class="content-wrapper">
		@yield('content')
	</div>


<!-- footer -->
@include('partials.footer')

{{-- THIS IS NOT ACTUALLY BOOTSTRAP, THIS IS JUST THE VENDOR IMPORTS NEEDS TO BE LOADED FIRST CANNOT ASYNC LOAD THIS OTHERWISE REGULAR JS DOESN"T WORK AND THROWS ERRRORS --}}
<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.min.js" async></script>

</body>
</html>
