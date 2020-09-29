<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Flavour Events</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/events.css">
		
	
	</head>

	<body>
        
        @yield('content')

        
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>