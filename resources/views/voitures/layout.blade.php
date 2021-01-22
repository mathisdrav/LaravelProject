<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<title>Site de voitures</title>
	</head>
	<header>
		<div class="navbar navbar-dark bg-dark shadow-sm">
		    <div class="container">
		      	<a href="{{ url('index') }}" class="navbar-brand d-flex align-items-center">
		        	<strong>Site de voiture</strong>
		      	</a>
		    </div>
	  	</div>
	</header>
	<body>
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>