<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles -->
	<link rel="icon" type="image/png" href="images/purplebug.png"/>
	@yield('styles')	
	

</head>
<body>
	
	@yield('content')
		
	<!-- Scripts -->
	@yield('scripts')
	

</body>
</html>