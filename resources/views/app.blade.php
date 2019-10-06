<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
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

		.input-wrapper {
			display: flex;
			background: #fff;
			border-radius: 8px;
			align-items: center;
			padding: 0px 25px;
		}

		.input-wrapper b {
			white-space: nowrap;
			letter-spacing: 1px;
			font-weight: 800;
			/*padding: 0px 25px;*/
		}

		.input-wrapper i {
			margin: 0 25px;
			font-size: 1.2em;
		}

		.content .field-row {
			display: flex;
		    padding: 15px 420px;
		    align-items: stretch;
		}

		.content .field-row .input-wrapper {
			margin-right: 30px;
			flex-grow: 1;
		}

		.content .field-row input, .content .field-row select {
		    padding: 20px 25px;
		    font-size: 1.1em;
    		letter-spacing: 3px;
		    font-weight: 500;
		    font-family: Raleway;
		    border: 0;
		    border-radius: 8px;
		    height: auto;
		    outline: none !important;
		    box-shadow: none;
		    width: 100%;
		}

		.content .field-row input[type="number"] {
		    padding: 20px 0px;
		    width: 50px;
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

		.ui-widget-content {
			background: #fff;
			color: #000;
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			color: #000;
			border: 1px solid #00000057;
		}

		.ui-widget-header {
			color: #000;
		}

		.ui-datepicker .ui-datepicker-header {
			border-bottom: 1px solid #00000057;
		}

		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
		    background: #ffa22a;
		    color: #fff;
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
		    background: #ff7979;
		    font-weight: normal;
		    color: #fff;
		}

		.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
		    background: #00daff;
		    font-weight: normal;
		    color: #fff;
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
					<div class="input-wrapper">
						<b>LOKASI</b>
						<select name="location">
							@foreach($result as $lokasi)
								<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
							@endforeach
						</select>
					</div>
					
					<button type="submit" class="btn btn-warning">BOOKING</button>
				</div>
				<div class="field-row">
					<div class="input-wrapper">
						<b>CHECK IN</b>
						<input type="text" class="date" name="start_date" class="form-control" placeholder="Check In">
					</div>
					<div class="input-wrapper">
						<b>CHECK OUT</b>
						<input type="text" class="date" name="end_date" class="form-control" placeholder="Check Out">
					</div>
					<div class="input-wrapper margin-0">
						<input type="number" name="class" class="form-control" placeholder="0">
						<b>ORANG</b>
					</div>
					
				</div>
			</form>
		</div>
		<div class="footer">
			<p><italic>COPYRIGHT</italic> PT. PALAWI RESORT BATURRADEN</p>
		</div>
	</div>
</body>
<script type="text/javascript">
	$('input.date').datepicker({ 
		dateFormat: 'yy-mm-dd',
		minDate: 0
	});


</script>
</html>