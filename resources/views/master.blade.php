<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="icon" type="file/png" href="image/logo.png">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/login.css">
</head>
<body>
	<!-- HEADER -->
	<div class="container">
		@include('include.header')
	</div>
	<!-- CONTENT -->
	<div class="container">
		@yield('content')
	</div>
	<div class="container">
		@include('include.footer')
	</div>
</body>
</html>