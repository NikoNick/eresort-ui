<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}
		
		body {
			font-family: Raleway !important;
		}

		.background {
			background: url('../img/splash-1.jpeg');
			width: 100%;
			height: 100vh;
			background-size: 130%;
			overflow: hidden;
		}

		.background:before {
			position: absolute;
			width: 100%;
			height: 100%;
			background: #000;
			opacity: 0.53;
			content: '';
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 70px 100px;
			align-items: center;
		}

		.navbar .logo {
			flex-grow: 1;
		}

		.navbar .logo h1 {
			color: #fff;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 5px;
			margin: 0;
		}

		.navbar .nav>li {
			display: inline-block;
			margin-left: 30px;
			font-size: 1.2em;
			font-weight: 700;
			color: #fff;
			letter-spacing: 2px;
		}

		.navbar .nav>li.active {
			margin-right: 20px;
		}

		.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: 6px;
		    left: -20px;
		    width: 8px;
		    height: 8px;
		    background: #fff;
		    border-radius: 50px;
		}

		.navbar .nav>li.active:after {
		    content: '';
		    position: absolute;
		    top: 6px;
		    right: -20px;
		    width: 8px;
		    height: 8px;
		    background: #fff;
		    border-radius: 50px;
		}

		.navbar .special {
			flex-grow: 1;
			text-align: right;
		}

		.navbar .special button {
			padding: 12px 25px;
			font-weight: 600;
			letter-spacing: 2px;
		}

		.nav.inline>li {
		    display: inline;
		    font-size: 0.9em;
		    font-family: Raleway;
		    font-weight: 400;
		    padding: 15px 20px;
		    color: #fff;
		    letter-spacing: 4px;
		    cursor: pointer;
		}

		.nav.inline>li:hover {
			background: #ffffff70;
		}

		.search-nav .nav {
			text-align: center;
		}

		.search-nav .nav>li.active:before {
			content: '';
			position: absolute;
			top: -1px;
			width: 100vw;
			left: -100vw;
			height: 1px;
			background: #ffffff70;
		}

		.search-nav .nav>li.active:after {
			content: '';
			position: absolute;
			top: -1px;
			width: 100vw;
			right: -100vw;
			height: 1px;
			background: #ffffff70;
		}

		.search-nav .nav>li.active {
			border: 1px solid #ffffff70;
			border-top-color: transparent;
		}

		.content {
			position: relative;
		}

		.content h1 {
		    font-family: Raleway;
		    text-align: center;
		    color: #fff;
	        margin-top: 120px;
    		margin-bottom: 50px;
		    font-weight: 400;
		    letter-spacing: 5px;
		    word-spacing: 10px;
		}

		.content .field-row {
			display: flex;
		    padding: 15px 500px;
		    align-items: stretch;
		}

		.content .field-row input {
			flex-grow: 1;
		    margin-right: 30px;
		    padding: 20px 30px;
		    font-size: 1.1em;
    		letter-spacing: 3px;
		    font-weight: 500;
		    font-family: Raleway;
		    border-radius: 8px;
		    height: auto;
		}

		.content .field-row button {
			padding: 20px 55px;
			font-size: 1.2em;
		    font-weight: 600;
		    letter-spacing: 2px;
		    border-radius: 8px;
		}

		.margin-0 {
			margin: 0 !important;
		}

		.footer {
			position: relative;
			text-align: center;
			color: #fff;
			letter-spacing: 2px;
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<div class="background">
		<div class="navbar">
			<div class="logo">
				<h1>PALAWI</h1>
			</div>
			<ul class="nav">
				<li class="active">SEARCH</li>
				<li>CONTACT</li>
				<li>GALLERY</li>
				<li>INFO WISATA</li>
			</ul>
			<div class="special">
				<button class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
			</div>
		</div>
		<div class="search-nav">
			<ul class="nav inline">
				<li>RESORT</li>
				<li class="active">CAMPING</li>
				<li>OUTBOND</li>
			</ul>
		</div>
		<div class="content">
			<h1>Pastikan Liburanmu Nyaman dengan Palawi</h1>
			<form method="POST" action="/hasil">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="field-row">
					<input type="text" name="location" class="form-control" placeholder="Destinasi Tujuan">
					<button type="submit" class="btn btn-warning">BOOKING</button>
				</div>
				<div class="field-row">
					<input type="text" name="start_date" class="form-control" placeholder="Check In">
					<input type="text" name="end_date" class="form-control" placeholder="Check Out">
					<input type="text" name="class" class="form-control margin-0" placeholder="0">
				</div>
			</form>
		</div>
		<div class="footer">
			<p><italic>COPYRIGHT</italic> PT. PALAWI RESORT BATURRADEN</p>
		</div>
	</div>
</body>
</html>