<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	@yield('extracss')
</head>
<body>
	@include('layout.partials.header')
	<content>
		@yield('content')
	</content>
	@include('layout.partials.footer')
	

	<script src="js/app.js"></script>
</body>
</html>