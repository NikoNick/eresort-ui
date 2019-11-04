<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	@yield('css-bottom')
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
</head>
<body>
    @yield('body')
    @yield('js-bottom')
</body>
</html>