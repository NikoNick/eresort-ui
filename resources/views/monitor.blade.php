<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}
		
		body {
			font-family: Raleway !important;
		}

		.gone {
			display: none !important;
		}

		.bg {
			width: 200vw;
			height: 200vh;
			position: absolute;
			top: -500px;
			left: -200px;
		    background: #000000b3;
		    display: none;
    		z-index: 2;
		}

		.background {
			position: relative;
			background: #fff;
			width: 100%;
			height: 100vh;
			background-size: 130%;
			overflow: hidden;
			display: flex;
			flex-direction: column;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 40px 120px;
			align-items: center;
			position: relative;
			margin: 0;
		}

		.navbar .logo {
			flex-grow: 1;
		}

		.navbar .logo h1 {
			color: #000;
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
			color: #000;
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
		    background: #000;
		    border-radius: 50px;
		}

		.navbar .nav>li.active:after {
		    content: '';
		    position: absolute;
		    top: 6px;
		    right: -20px;
		    width: 8px;
		    height: 8px;
		    background: #000;
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

		.navbar .line {
        	width: 100%;
        	height: 2px;
        	background: #dcdcdc;
        	position: absolute;
        	bottom: 0px;
        	left: 0px;
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
			flex-grow: 1;
			display: flex;
		}

		.content .left {
		    font-size: 1.2em;
		    padding: 70px 120px;
		    position: relative;
		    overflow: hidden;
		    max-width: 700px;
		}

		.content .left:after {
			content: '';
			width: 1px;
			height: 100%;
			background: #dcdcdc;
			position: absolute;
			right: 0;
			top: -1px;
		}

		.content .right {
		    flex-grow: 1;
		    font-size: 1.2em;
		    padding: 70px 120px;
		}

		.input-wrapper {
			display: flex;
			background: #fff;
			border-radius: 8px;
			align-items: center;
			padding: 0px 25px;
		    border: 1px solid #a0a0a0;
		    border-radius: 0;
		    box-shadow: 5px 5px 0px 0px #dcdcdc;
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

		.field-row {
			display: flex;
		    padding: 15px 0px;
		    align-items: stretch;
		}

		.field-row .input-wrapper {
			margin-right: 30px;
			flex-grow: 1;
		}

		.field-row input, .field-row select {
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
		    background: transparent;
		}

		.field-row input[type="number"] {
		    padding: 20px 0px;
		    width: 50px;
		}

		.field-row button {
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

		.flex {
			display: flex;
			align-items: center;
		}

		.flex-grow-1 {
			flex-grow: 1;
		}

		.norek {
		    border: 1px solid #b5b5b5;
		    padding: 15px;
		    font-size: 1em;
		    letter-spacing: 5px;
		    color: #000;
		    margin-top: 20px;
        }

        .norek .nama-bank {
    	    font-weight: 900;
		    text-align: left;
		    font-style: italic;
        }

        .norek p {
        	font-family: Calibri Light;
        	margin: 0;
        }

        .payment {
    	    padding: 0px 100px;
		    font-size: 1.5em;
		    letter-spacing: 3px;
        }

        .payment h3 {
    	    font-size: 1.5em;
		    margin: 0;
		    font-family: Calibri Light;
		    font-weight: 900;
		    margin-left: 50px;
        }

        .payment b {
        	font-size: 0.9em;
        }

        .payment button {
    	    padding: 12px 25px;
		    font-weight: 600;
		    letter-spacing: 2px;
        }

        .page-guide {
        	font-size: 1.3em;
        	letter-spacing: 3px;
        	word-spacing: 5px;
        }

        .header {
        	position: relative;
        	padding-bottom: 15px;
        }

        .header:before {
        	width: 1px;
        	height: 100%;
        	background: #ffd16d;
        	content: '';
        	position: absolute;
        	left: 0;
        	top: 20px;
        }

        .header-1 {
    	    padding: 0px 6px;
    		position: relative;
        }

        .header-1 b {
    	    font-size: 1.3em;
		    letter-spacing: 3px;
		    position: relative;
		    z-index: 2;
        }

        .header-1:after {
    	    content: '';
		    width: 100%;
		    height: 10px;
		    background: #ffd16d;
		    position: absolute;
		    bottom: -2px;
		    left: 0;
		    z-index: 1;
        }

        .header-2 {
    	    position: relative;
		    margin-left: 20px;
		    margin-top: 5px;
		    display: inline-block;
        }

        .header-2 h2 {
    	    font-family: Raleway;
		    font-weight: 800;
		    font-size: 2.7em;
		    letter-spacing: 5px;
		    margin: 0;
		    color: #b5b5b5;
        }

        .header-2 h2.foreground {
		    color: #000;
		    position: absolute;
		    top: 0;
		    margin: 0;
		    clip-path: polygon(0% 0%, 68% 0%, 63% 100%, 0% 100%);
        }

        .header-2:after {
        	content: '';
        	position: absolute;
        	width: 1px;
        	height: 100%;
        	background: #000;
        	transform: skewX(-20deg);
        	top: 0;
        	left: 65%;
        }

        .price {
    	    letter-spacing: 2px;
		    /*margin-top: 15px;*/
		    align-items: baseline;
        }

        .price b {
        	font-weight: 800;
        }

        .price p {
    	    margin: 0;
		    margin-left: 60px;
		    font-family: Calibri Light;
		    font-weight: 900;
		    font-size: 1.2em;
        }

        .right .price p {
        	margin-left: 30px;
        }

        .desc p {
    	    font-size: 1.2em;
		    letter-spacing: 3px;
		    text-align: justify;
		    /*max-width: 400px;*/
		    line-height: 40px;
		    margin-top: 40px;
		    word-spacing: 0px;
        }

        .right table {
        	letter-spacing: 1px;
        	margin-top: 50px;
        }

        .right table label {
        	width: 15px;
        	height: 15px;
        	border: 3px solid #000;
        	border-radius: 50%;
        	margin: 0;
        }

        .right table th {
        	font-size: 0.9em;
        	border: none !important;
        	font-weight: 600;
        	padding: 8px 0px !important;
        }

        .right table td {
        	/*font-family: Calibri Light;*/
        	font-size: 1.2em;
        	border: none !important;
        	padding: 8px 0px !important;
        }

        .right table b {
        	font-family: Raleway;
        	font-size: 0.8em;
        	text-transform: uppercase;
        }

        .text-right {
        	text-align: right;
        }

        .sign h1 {
        	font-size: 10em;
        	font-weight: 900;
        	font-style: italic;
        	letter-spacing: 5px;
        	position: absolute;
        	bottom: -50px;
        	right: -20px;
        	opacity: 0.05;
        }

        .sign h2 {
        	font-size: 7em;
        	font-weight: 900;
        	font-style: italic;
        	letter-spacing: 5px;
        	position: absolute;
        	bottom: 40px;
        	right: -20px;
        	opacity: 0.05;
        }

        .grand-total {
        	border-top: 1px solid #dcdcdc;
        	margin-top: 30px;
        	padding: 20px 0px;
        	letter-spacing: 3px;
        }

        .grand-total span {
        	font-family: Calibri Light;
        	font-size: 1.8em;
        	font-weight: 900;
        	margin-left: 30px;
        }

        .form {
        	padding: 70px 120px;
        }

        .form h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		    margin-bottom: 70px;
		}

        .form-story span {
			font-size: 2.9em;
		    line-height: 80px;
		    font-weight: 300;
		    letter-spacing: 5px;
		    word-spacing: 20px;
        }

        .input-field {
			display: inline-block;
			position: relative;
			margin-right: 30px;
		}

		.input-field .input-field-toggle {
			cursor: pointer;
			background: #07b0ff;
    		color: #fff;
    		white-space: nowrap;
		}

		.input-field .input-field-toggle.allow-whitespace {
    		white-space: normal;
		}

		.input-field .date-field input[type="text"] {
			position: absolute;
			top: 0;
			opacity: 0;
		}

		.text-field-wrapper {
			display: none;
			transform: scale(0.8);
			opacity: 0;
			position: absolute;
			z-index: 2;
			top: 0;
			background: #169ad8;
		}

		.text-field-wrapper .text-field p {
		    margin: 0;
		    letter-spacing: 2px;
		    font-weight: 400;
		    /*padding: 10px 15px;*/
		    font-style: italic;
		    /*border-bottom: 1px dashed #169ad8;*/
		    position: absolute;
		    top: 15px;
		    left: 15px;
		}

		.input-field .text-field {
		    display: flex;
		    min-width: 500px;
		    position: relative;
		}

		.text-field-wrapper.show {
			display: flex;
		}

		.text-field-wrapper.fade {
			opacity: 1;
			transform: scale(1);
			/*transition-delay: 0.5s !important;*/
		}

		.input-field .text-field input[type="text"], .input-field .text-field textarea {
		    font-size: 1.8em;
		    letter-spacing: 2px;
		    padding: 15px;
		    padding-top: 35px;
		    background: #fff;
		    /*border: 1px solid #83d7ff;*/
		    border: none;
		    color: #000;
		    flex-grow: 1;
		}

		.input-field .text-field input[type="text"]::placeholder, .input-field .text-field textarea::placeholder {
		    color: #b5b5b5;
		}

		.input-field .text-field textarea {
			width: 700px;

		}

		.input-field .text-field button {
		    /*width: 64px;*/
		    font-size: 1.8em;
		    color: #fff;
		    padding: 0px 20px;
		    cursor: pointer;
		    background: transparent;
		    border: none;
		}

		.input-field .text-field button:hover {
		    background: #00000014;
		}

		.input-field ul {
			display: none;
			padding: 0;
			position: absolute;
			z-index: 2;
			background: #07b0ff;
			color: #fff;
			font-size: 2.8em;
			padding: 15px 0px;
			top: -50%;
			transform: scale(0.8);
			opacity: 0;
		}

		.input-field ul.show {
			display: block;
		}

		.input-field ul.fade {
			opacity: 1;
			transform: scale(1);
			/*transition-delay: 0.5s !important;*/
		}

		.input-field ul li {
			list-style: none;
			cursor: pointer;
			font-weight: 300;
			padding: 5px 20px;
			white-space: nowrap;
		}

		.input-field ul li:hover {
			background: #ffffff36;
		}

		.input-field ul .header {
		    font-size: 0.4em;
		    font-weight: 700;
		    letter-spacing: 2px;
		    margin-bottom: 20px;
		    padding: 0px 20px;
		}

		.nav-button {
		    text-align: right;
		    /*padding: 50px 120px;*/
		    margin-top: 170px;
		    font-size: 1.3em;
    		letter-spacing: 2px;
		}

		.nav-button a {
		    font-weight: 800;
		    margin-left: 20px;
		    padding-bottom: 10px;
		    border-bottom: 2px solid;
		    letter-spacing: 3px;
		    cursor: pointer;
		}

		.nav-button button {
			padding: 15px 20px;

		}

		.nav-button button a {
			border: 0;
			margin: 0;
			font-weight: 700;
		}

		.uang-muka {
			white-space: nowrap;
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
			<div class="line"></div>
		</div>
		<div class="form">
			<h1 class="animation anim-scale-black">Cek e-mail anda untuk mendapatkan nomor invoice pesanan anda</h1>
			<div class="form-story animation anim-scale-black">
				<div class="bg"></div>
				<span>Saya ingin cek pesanan saya. Nomor invoice-nya adalah </span>
				<div class="input-field">
					<span id="input-invoice" class="input-field-toggle" default="No.Invoice">INV/xxxxxxxx/AAA/xxx</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>No. Invoice</p>
							<input type="text" name="invoice" placeholder="Nomor Invoice Pesanan" class="input" value="">
							<button next="input-email">
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span> dan e-mail yang saya gunakan saat pemesanan adalah </span>
				<div class="input-field">
					<span id="input-email" class="input-field-toggle" default="john_doe@mail.com">john_doe@mail.com</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Email Pesanan Anda</p>
							<input type="text" name="email" placeholder="john_doe@mail.com" class="input" value="">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-button animation anim-slide-down-up">
				<span>Identitas saya sudah benar, <a id="btn-invoice">Lanjutkan</a></span>
			</div>	
		</div>
		
		<div class="content gone">
			<div class="left animation anim-slide-right-left disappear">
				<div class="header">
					<div>
						<span class="header-1">
							<b>STATUS</b>
						</span>	
					</div>
					<div class="header-2">
						<h2>PEMBAYARAN</h2>
						<h2 class="foreground">PEMBAYARAN</h2>
					</div>	
				</div>
				<div class=" price flex">
					<b>TOTAL PESANAN ANDA</b>
					<p class="val-total-bill">Rp 500.000</p>
				</div>
				<div class="paid" hidden>
					<div class="desc">
						<p>Terimakasih sdr.Niko, anda telah menyelesaikan administrasi dan melunasi tagihan pembayaran anda.  Mohon check-in sesuai dengan jadwal yang ditentukan. Semoga pengalaman anda menyenangkan bersama kami</p>
					</div>
					<div class="sign">
						<h1>LUNAS</h1>
						<h2>LUNAS</h2>
					</div>
				</div>
				<div class="not-paid" hidden>
					<div class="desc">
						<p>Mohon segera lakukan pembayaran lewat transfer ke nomor rekening berikut. Tagihan dapat dilunasi sepenuhnya atau <b>DP minimal 30% <span class="uang-muka">()</span></b> dari total belanja.</p>
					</div>
					<div class="norek">
						<table>
							<tbody>
								<tr>
									<td class="nama-bank"><b>BCA</b></td>
									<td><p>1092817347</p></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div>
						<input type="file" name="file">
						<button id="btn-upload" class="btn btn-warning">Bukti Pembayaran</button>
					</div>
				</div>
			</div>
			<div class="right animation anim-slide-left-right disappear">
				<div class="header">
					<div>
						<span class="header-1">
							<b>RINCIAN</b>
						</span>	
					</div>
					<div class="header-2">
						<h2>PESANANANDA</h2>
						<h2 class="foreground">PESANANANDA</h2>
					</div>
				</div>
				<div class=" price flex">
					<div class="flex flex-grow-1">
						<b>Check-In</b>
						<p class="val-check-in">05 September 2019 Jam 13:00</p>
					</div>
					<div class="flex">
						<b>Check-Out</b>
						<p class="val-check-out">06 September 2019 Jam 12:00</p>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th colspan="2">PESANAN</th>
							<th>HARGA SATUAN</th>
							<th>QTY</th>
							<th class="text-right">TOTAL HARGA</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label></label></td>
							<td><b>DELUXE ROOM</b></td>
							<td>Rp 350.000 /malam</td>
							<td>x 2</td>
							<td class="text-right">Rp 700.000</td>
						</tr>
						<tr>
							<td><label></label></td>
							<td><b>EXECUTIVE ROOM</b></td>
							<td>Rp 350.000 /malam</td>
							<td>x 2</td>
							<td class="text-right">Rp 700.000</td>
						</tr>
					</tbody>
				</table>
				<div class="grand-total text-right">
					<b>GRAND TOTAL <span class="val-total-bill">Rp 1.050.000</span></b>
				</div>
			</div>
		</div>
		<!-- <div class="flex payment">
			<div class="col-md-4 flex">
				<b>TOTAL BELANJA</b>
				<h3 class="val-total-bill">Rp 1.050.000</h3>
			</div>
			<div class="col-md-4 flex">
				<b>(DP 30%)</b>
				<h3>Rp 450.000</h3>
			</div>
			<div class="col-md-4">
				<input type="file" name="file">
				<button id="btn-upload" class="btn btn-warning">Bukti Pembayaran</button>
			</div>
		</div> -->
	</div>

	<input type="hidden" name="booking_id">
</body>
<script type="text/javascript">

	$('input.date').datepicker({ 
		dateFormat: 'yy-mm-dd',
		minDate: 0
	});

	$('.input-field-toggle').on('click', function() {
		showInput($(this));
	});

	$('.text-field button').on('click', function() {
		var value = $(this).prev().val();
		var next_form = $(this).attr('next');
		var default_value = $(this).parent().parent().parent().find('.input-field-toggle').attr('default');
		$('.bg').hide();

		if (value == '') value = default_value;
		
		$('.text-field-wrapper.show').parent().find('.input-field-toggle').text(value);	
		$('.text-field-wrapper.show').removeClass('fade');
		setTimeout(function() {
			$('.text-field-wrapper.show').removeClass('show');
		}, 500);

		if (next_form != '') {
			setTimeout(function() {
				$('#' + next_form).click();
			}, 600);
		}
	});

	$('.text-field .input').on('keypress', function(e) {
		if (e.which == 13) {
			$(this).next().click();
		}

	})

	$('#btn-invoice').on('click', function() {
		var invoice = $('input[name="invoice"]').val();
		var email = $('input[name="email"]').val();

		alert('hay');

		$.ajax({
			url: 'http://api.resort.shafarizkyf.com/api/booking/search?invoice=' + invoice + '&email=' + email,
			method: 'GET',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			}
		}).then(response => {
			var data = response;
			var booking_id = data.id;
			var booking_details = data.details;
			var status_pembayaran = data.is_paid;
			var total_bill = data.total_bill;
			var uang_muka = (30 * parseInt(total_bill))/100;
				total_bill = accounting.formatMoney(
						total_bill, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				uang_muka = accounting.formatMoney(
						uang_muka, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			var nama_pemesan = data.guest.name;
			var email = data.guest.email;
			var telepon = data.guest.phone;

			$('.right table tbody').empty();

			var check_in_time = '';
			var check_out_time = '';

			$.each(booking_details, function(index, detail) {
				var check_in = detail.start_time;
				var check_out = detail.end_time;
				var nama_kamar = detail.item_detail.item.name;
				var harga = detail.price.service_price;
					harga = accounting.formatMoney(
						harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

				var $row = 
					'<tr>' +
						'<td><label></label></td>' +
						'<td><b>' + nama_kamar + '</b></td>' +
						'<td>' + harga + ' /malam</td>' +
						'<td>x 1</td>' +
						'<td class="text-right">' + harga + '</td>' +
					'</tr>';

				$('.right table tbody').append($row);

				check_in_time = check_in;
				check_out_time = check_out;
			})

			check_in_time = dateToString(check_in_time.split('T')[0]) + ' Jam 13:00';
			check_out_time = dateToString(check_out_time.split('T')[0]) + ' Jam 11:00';

			$('input[name="booking_id"]').val(booking_id);
			$('.val-total-bill').text(total_bill);
			$('.val-check-in').text(check_in_time);
			$('.val-check-out').text(check_out_time);

			if (status_pembayaran) {
				$('.paid').show();
			} else {
				$('.not-paid .uang-muka').text('(' + uang_muka + ')');
				$('.not-paid').show();
			}

			transition();
		}).fail(error => {
			console.log(error)
			console.log(error.response)
		})
	})

	$('#btn-upload').on('click', function() {
		var booking_id = $('input[name="booking_id"]').val();

		var file = $('input[type=file]')[0].files[0];
		var form = new FormData();
		form.append("payment_method_id", "1");
		form.append("booking_id", booking_id);
		form.append("file", file);

		// var settings = {
		//   "url": "http://api.resort.shafarizkyf.com/api/transaction",
		//   "method": "POST",
		//   "headers": {
		//     "Accept": "application/json",
		//     "Content-Type": "application/json"
		//   },
		//   "enctype": 'multipart/form-data',
		//   "processData": false,
		//   "contentType": false,
		//   "cache": false,
		//   "data": form
		// };

		$.ajax({
            url: 'http://api.resort.shafarizkyf.com/api/transaction',  
            type: 'POST',
            data: form,
            cache: false,
            contentType: false,
            processData: false
		}).done(function (response) {
		  console.log(response);
		}).fail(function (error) {
			console.log(error);
			console.log(error);
		});
	})

	function showInput(trigger) {
		$('.bg').show();
		trigger.parent().find('ul').addClass('show');
		trigger.parent().find('.text-field-wrapper').addClass('show');
		trigger.parent().find('.text-field-wrapper').find('.input').focus();

		setTimeout(function() {
			trigger.parent().find('ul').addClass('fade');	
			trigger.parent().find('.text-field-wrapper').addClass('fade');	
		}, 100);
	}

	function transition() {
		$('.form').find('.animation').addClass('disappear');
		setTimeout(function() {
			$('.form').addClass('gone');
			
			$('.content').removeClass('gone');
		}, 800);

		setTimeout(function() {
			$('.content').find('.animation').removeClass('disappear');
		}, 1000);
	}

	function monthString(month) {
        if (month == '01' || month == '1' ) return 'Januari';
        if (month == '02' || month == '2' ) return 'Februari';
        if (month == '03' || month == '3' ) return 'Maret';
        if (month == '04' || month == '4' ) return 'April';
        if (month == '05' || month == '5' ) return 'Mei';
        if (month == '06' || month == '6' ) return 'Juni';
        if (month == '07' || month == '7' ) return 'Juli';
        if (month == '08' || month == '8' ) return 'Agustus';
        if (month == '09' || month == '9' ) return 'September';
        if (month == '10' ) return 'Oktober';
        if (month == '11' ) return 'November';
        if (month == '12' ) return 'Desember';
    }

    function dateToString(date) {
        var day = date.split('-')[2];
        var month = date.split('-')[1];
        var year = date.split('-')[0];
        var newDate = day + ' ' + monthString(month) + ' ' + year;

        return newDate;
    }
</script>
</html>