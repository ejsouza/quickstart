<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="/css/app.css" rel="stylesheet">
	<title>To-do-list-app - Basic</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<!-- Navbar Contents -->
		</nav>
	</div>
	<!--  This is a special Blade directive that specifies where all child pages that extend the layout can inject their own content. -->
	@yield('content')

	
	<!-- <script  src="{{ asset('js/app.js') }}"></script> -->
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>