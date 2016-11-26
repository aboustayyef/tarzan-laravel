<!DOCTYPE html>
<html>
<head>
	<title>Hello!</title>
	<link rel="stylesheet" href="css/flickity.css">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	@include('layout.partials.header')
	<content>
		@include('layout.partials.slideshow')
		@include('layout.partials.services_and_news')
	</content>
	@include('layout.partials.footer')
	

	<script src="js/app.js"></script>
</body>
</html>