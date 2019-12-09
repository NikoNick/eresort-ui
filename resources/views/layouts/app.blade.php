<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('linear icon/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	@yield('css-bottom')
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<!-- <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script> -->
</head>
<body>
    @yield('body')
    @yield('js-bottom')
</body>
</html>