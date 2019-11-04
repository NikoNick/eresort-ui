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

		button {
			background: #0fffbe;
		}

		.flex-grow-1 {
			flex-grow: 1;
		}

		.background {
			background: url('../img/thumbnail-5.jpg');
			width: 100%;
			height: 100vh;
			background-size: 100%;
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

		.navbar .logo, .navbar .special {
			width: 10%;
		}

		.navbar .logo h1 {
			color: #fff;
			font-size: 1.5em;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 4px;
			margin: 0;
		}

		.navbar .nav {
			flex-grow: 1;
			text-align: center;
		}

		.navbar .nav>li {
		    display: inline-block;
		    margin: 0px 30px;
		    font-size: 1em;
		    font-weight: 500;
		    color: #fff;
		    letter-spacing: 2px;
		    position: relative;
		}

		.navbar .nav>li>span {
		    position: relative;
		}

		.navbar .nav>li.active {
			font-weight: 700;
		}

		.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: 10px;
		    left: -8px;
		    width: 100%;
		    height: 10px;
		    background: #0fffbe;
		    opacity: 0.6;
		}

		.navbar .special {
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
		    letter-spacing: 2px;
		    cursor: pointer;
		}
		.nav.inline>li>a {
			display: inline-block;
		}
		.nav.inline>li>a:hover {
			background: transparent;
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
			border-top: 1px solid #ffffffbd;
			height: 2px;
		}

		.search-nav .nav>li.active:after {
			content: '';
			position: absolute;
			top: -1px;
			width: 100vw;
			right: -100vw;
			border-top: 1px solid #ffffffbd;
			height: 2px;
		}

		.search-nav .nav>li.active {
			border: 1px solid #ffffff70;
			border-top-color: transparent;
		}

		.content {
			position: relative;
		}

		.content .tab {
			display: none;
		}

		.content .tab:target {
			display: block;
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
		    font-weight: 800;
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
				<li class="active"><span>PENCARIAN</span></li>
				<li><span>KONTAK</span></li>
				<li><a href="{{ route('booking.detail') }}"><span>PESANAN ANDA</span></a></li>
			</ul>
			<div class="special">
				<button class="btn"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
			</div>
		</div>
		<div class="search-nav">
			<ul class="nav inline">
				<li class="active"><a href="#tab-1">RESORT</a></li><li><a href="#tab-2">CAMPING</a></li><li><a href="#tab-3">OUTBOND</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="tab-1" class="tab">
				<h1>Pastikan Liburanmu Nyaman dengan Palawi</h1>
				<form method="GET" action="/hasil">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="field-row">
						<div class="input-wrapper">
							<b>LOKASI</b>
							<select name="location" class="fillable">
								<option value="0" selected>Semua Lokasi</option>
								@foreach($result as $lokasi)
									<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
								@endforeach
							</select>
						</div>
						
						<button class="btn btn-search">BOOKING</button>
					</div>
					<div class="field-row">
						<div class="input-wrapper">
							<b>CHECK IN</b>
							<input type="text" class="date fillable" name="start_date" placeholder="Check In">
						</div>
						<div class="input-wrapper">
							<b>CHECK OUT</b>
							<input type="text" class="date fillable" name="end_date" placeholder="Check Out">
						</div>
						<div class="input-wrapper margin-0">
							<input type="number" name="person" class="form-control fillable" min="1" value="1">
							<b>ORANG</b>
						</div>
						
					</div>
				</form>
			</div>
			<div id="tab-2" class="tab">
				<h1>Ayo Camping Bersama Kami!</h1>
				<form method="GET" action="/hasil-camping">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="field-row">
						<div class="input-wrapper">
							<b>LOKASI</b>
							<select name="location" class="fillable">
								<option value="0" selected>Semua Lokasi</option>
								@foreach($result as $lokasi)
									<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="input-wrapper">
							<b class="flex-grow-1">KAPASITAS</b>
							<input type="number" name="person" class="form-control fillable" min="1" value="1">
							<b>ORANG</b>
						</div>
						<button class="btn btn-search">BOOKING</button>
					</div>
					<div class="field-row">
						<div class="input-wrapper">
							<b>CHECK IN</b>
							<input type="text" class="date fillable" name="start_date" placeholder="Check In">
						</div>
						<div class="input-wrapper margin-0">
							<b>CHECK OUT</b>
							<input type="text" class="date fillable" name="end_date" placeholder="Check Out">
						</div>
					</div>
				</form>
			</div>
			<div id="tab-3" class="tab">
				<h1>Outbond jadi seru!</h1>
				<form method="POST" action="/hasil-camping">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="field-row">
						<div class="input-wrapper">
							<b>PESERTA</b>
							<input type="number" name="person" class="form-control fillable" min="1" value="1">
							<b>ORANG</b>
						</div>
						<button id="btn-search" class="btn">BOOKING</button>
					</div>
					<div class="field-row">
						<div class="input-wrapper">
							<b>TANGGAL</b>
							<input type="text" class="date fillable" name="start_date" placeholder="Check In">
						</div>
						<div class="input-wrapper">
							<b>JAM</b>
							<input type="text" class="fillable" name="start_date" placeholder="">
						</div>
					</div>
				</form>
			</div>
			
		</div>
		<div class="footer">
			<p><italic>COPYRIGHT</italic> PT. PALAWI RESORT BATURRADEN</p>
		</div>
	</div>
</body>
<script type="text/javascript">
	var today = new Date();
    	today = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
	var tomorrow = new Date();
		tomorrow.setDate(tomorrow.getDate()+1)
    	tomorrow = tomorrow.getFullYear() + '-' + ('0' + (tomorrow.getMonth() + 1)).slice(-2) + '-' + ('0' + tomorrow.getDate()).slice(-2);

	$('input.date').datepicker({ 
		dateFormat: 'yy-mm-dd',
		minDate: 0
	});

	$('input[name="start_date"]').val(today);
	$('input[name="end_date"]').val(tomorrow);

	$('.btn-search').on('click', function(e) {
		e.preventDefault();
		var array_field = $('form').find('.fillable');
		var count_filled = 0;

		$.each(array_field, function(index, item) {
			var value = $(item).val();
			
			if (value != '') count_filled = count_filled + 1;
		})

		if (count_filled == array_field.length) {
			$(this).unbind().click();
		} else {
			alert('Form Belum Lengkap');
		}
	})

	$('.input-wrapper').on('click', function() {
		$(this).find('input').focus();
		// $(this).find('select').focus();
	})

	$('.nav.inline li').on('click', function() {
		$('.nav.inline li.active').removeClass('active');
		$(this).addClass('active');
	})

</script>
</html>