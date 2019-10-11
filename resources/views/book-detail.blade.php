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

		p {
			margin: 0;
		}
		
		body {
			font-family: Raleway !important;
			background: url('../img/thumbnail-5.jpg');
			background-size: 150%;
			overflow: hidden;
		}

		#form-invoice {
			padding: 100px 250px;
		}

		#form-invoice h1 {
			margin-bottom: 80px;
			font-family: Raleway;
			letter-spacing: 4px;
		}

		#form-invoice p {
		    width: 300px;
		    line-height: 30px;
		    letter-spacing: 2px;
		    margin-right: 60px;
		    border-top: 1px solid;
		    padding-top: 15px;
		    font-weight: 500;
		}

		.flex {
			display: flex;
			align-items: center;
		}

		.flex.stretch {
			align-items: stretch !important;
		}

		.flex-grow-1 {
			flex-grow: 1;
		}

		.font-number {
			font-family: Calibri Light !important;
			font-size: 1.2em;
		}

		.font-currency {
			font-family: Consolas;
			font-size: 1.2em;
		}

		.text-center {
			text-align: center;
		}

		.text-right {
			text-align: right;
		}

		.header {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.header.font-number {
			letter-spacing: 6px;
		}

		.gone {
			display: none !important;
		}

		.invisible {
			opacity: 0;
		}

		.marleft-15 {
			margin-left: 15px;
		}

		.marbot-10 {
			margin-bottom: 10px;
		}
		.marbot-15 {
			margin-bottom: 15px;
		}
		.marbot-20 {
			margin-bottom: 20px;
		}
		.marbot-30 {
			margin-bottom: 30px;
		}
		.marbot-50 {
			margin-bottom: 50px;
		}

		.martop-12 {
			margin-top: 12px;
		}
		.martop-30 {
			margin-top: 30px;
		}
		.martop-50 {
			margin-top: 50px;
		}

		.bg {
		    width: 80vw;
		    height: 80vh;
		    position: absolute;
		    top: 10vh;
		    box-shadow: 0px 0px 50px 1px #b9b9b9;
		    border-radius: 50px;
		    overflow: hidden;
		    left: 10vw;
		    background: #000000d6;
		    z-index: 2;
		    padding: 0px 0px;
		    color: #fff;
		}

		.bg>div {
			height: 100%;
		}

		.bg .upload {
			padding: 100px 150px;
			height: 100%;
			background: #fff;
			color: #000;
		}

		.bg .upload .photo-container {
		    width: 250px;
			height: 250px;
			padding: 8px;
			box-shadow: 50px 20px 0px 0px #b5b5b52b, -50px 50px 0px 0px #b5b5b52b;
			border: 1px solid #b5b5b5;
			border-radius: 25px;
		}

		.bg .upload .photo-container .photo {
			width: 100%;
			height: 100%;
			border-radius: 20px;

			/*background: url('../img/thumbnail-5.jpg');
			background-size: cover;*/
		}

		.bg .upload .photo-detail {
		    margin-top: 100px;
    		text-align: center;
		}

		.bg .upload .photo-detail h3 {
			font-family: Raleway;
    		letter-spacing: 2px;
		}

		.bg .upload .photo-detail button {
			margin-top: 50px;
		    width: 100%;
		    letter-spacing: 3px;
		    border-radius: 0px;
		    padding: 10px;
		    box-shadow: 0px 4px 0px 0px #cac
		}

		.bg .desc {
			padding: 80px 100px;
		}

		.bg .desc>.flex {
			margin-top: 20px;
			margin-bottom: 80px;
		}

		.bg .desc>.flex p {
		    font-weight: 200;
    		font-size: 3em;
    		margin: 0;
		}

		.bg .desc h1 {
		    margin: 0;
		    font-family: Raleway;
		    letter-spacing: 2px;
		    font-weight: 600;
		}

		.bg .desc p {
		    line-height: 40px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		}

		.bg .desc .new-line {
			position: relative;
			margin-bottom: 30px;
		}

		.bg .desc .new-line .line {
			position: absolute;
			width: 50px;
			border-top: 1px solid;
			display: block;
			top: 0;
			left: -50px;
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
			/*filter: blur(1px);*/
		}

		.background.show-invoice .navbar .special {
			display: block;
		}

		.background.show-invoice .navbar {
			padding: 30px 120px;
			padding-top: 50px;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 30px 250px;
			padding-top: 100px;
			align-items: center;
			position: relative;
			margin: 0;
		}

		.navbar .logo {
			/*flex-grow: 1;*/
			margin-right: 60px;
		}

		.navbar .logo h1 {
			color: #000;
			font-size: 1.5em;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 4px;
			margin: 0;
		}

		.navbar .nav>li {
			display: inline-block;
			margin-left: 30px;
			font-size: 0.9em;
			/*font-weight: 700;*/
			color: #000;
			padding: 5px 10px;
			letter-spacing: 2px;
		}

		.navbar .nav>li.active {
			/*margin-right: 20px;*/
			position: relative;
			font-weight: 600;
			box-shadow: -10px 10px 0px 0px #fff, 
						10px -10px 0px 0px #fff, 
						1px 1px 0px 0px #000, 
						-1px -1px 0px 0px #000;
		}

		/*.navbar .nav>li.active:before {
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
		}*/

		.navbar .special {
			flex-grow: 1;
			text-align: right;
			letter-spacing: 2px;
			display: none;
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

        .invoice {
        	padding: 30px 120px;
        }

        .invoice .left {
        	width: 63%;
        	
        }

        .invoice .right {
        	width: 37%;
        	padding-left: 100px;
        }

        .order-info .content p {
        	border: 1px solid #a5a5a5;
        	border-left: 0;
		    font-weight: 500;
		    padding: 13px 20px;
		    letter-spacing: 3px;
        }

        .order-info .content>div>p:first-child {
        	border-left: 1px solid #a5a5a5;
        }

        .table {
        	border: 1px solid #dcdcdc;
        }

        .table>tbody>tr>td {
        	border: 0;
        	letter-spacing: 2px;
        	vertical-align: middle;
        	padding-bottom: 10px;
        }

        .table>tfoot>tr>td {
        	letter-spacing: 2px;
        	padding: 15px 30px;
        }

        .table>tbody>tr:last-child>td {
        	padding-bottom: 30px;
        }

        .table>tbody>tr>td:last-child, 
        .table>thead>tr>th:last-child,
        .table>tfoot>tr>td:last-child {
    	    border-left: 1px solid #dcdcdc;
		    padding-right: 30px;
		    text-align: right;
        }

        .table>thead>tr>th {
        	border: 0;
    	    padding: 25px 8px;
    		font-size: 0.9em;
    		letter-spacing: 1px;
        }

        .table .font-number {
        	font-size: 1.3em !important;
        }

        .payment {
        	letter-spacing: 1px;
        }

        .payment .card {
        	width: 100%;
        	/*height: 280px;*/
        	background: url('../img/thumbnail-5.jpg');
    	    background-size: 130%;
    		background-position-x: 500px;
        	position: relative;
        	border-radius: 10px;
        	padding: 25px 35px;
        	color: #fff;
        }

        .payment .card>div {
        	position: relative;
        	display: none;
        }

        .payment .card>div.active {
        	display: block;
        }

        .payment .card:before {
    	    border: 1px solid #000;
		    content: '';
		    width: 100%;
		    height: 100%;
		    background: linear-gradient(0deg, #006cff, #67a7ff);
		    position: absolute;
		    opacity: 0.9;
		    border-radius: 10px;
		    top: 0;
		    left: 0;
        }

        .payment .payment-address b {
        	font-size: 1.5em;
		    letter-spacing: 5px;
		    font-weight: 900;
        }

        .payment .payment-address .line {
    	    width: 100%;
		    height: 1px;
		    background: #fff;
		    margin: 0px 20px;
		    opacity: 0.7;
        }

        .payment .payment-address p {
    	    font-size: 1.7em;
		    letter-spacing: 3px;
        }

        .payment .nominal b {
        	letter-spacing: 2px;
        }

        .payment .nominal h1 {
    	    border: 1px solid #ffffff87;
		    margin-top: 10px;
		    padding: 15px;
		    letter-spacing: 2px;
		    font-size: 2.5em;
		    border-radius: 5px;
        }

        .payment .nominal h3 {
		    letter-spacing: 2px;
		    margin: 0;
		    font-size: 1.3em;
        }

        .payment .footer h3 {
    	    font-size: 1.5em;
		    font-family: Consolas;
		    text-align: center;
		    letter-spacing: 2px;
        }

        .payment .info b {
        	letter-spacing: 1px;
        }

        .payment .info>div:first-child {
        	border-bottom: 1px solid #dcdcdc;
        }

        .payment .info>div {
        	padding: 10px 0px;
        }

        .payment .info #grand-total {
        	font-size: 1.8em;
        	font-weight: 700;
        }

        .field-row {
			display: flex;
		    /*margin-bottom: 30px;*/
		    align-items: stretch;
		}

		.input-wrapper {
			display: flex;
			background: #fff;
			/*border-radius: 8px;*/
			align-items: center;
			padding: 0px 25px;
			border: 1px solid #b5b5b5;
		}

		.input-wrapper b {
			white-space: nowrap;
			letter-spacing: 1px;
			font-weight: 800;
			/*padding: 0px 25px;*/
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
			padding: 20px 35px;
			font-size: 1.2em;
		    font-weight: 600;
		    letter-spacing: 2px;
		    margin-left: 30px;
		    /*border-radius: 8px;*/
		}
	</style>
</head>
<body>
	<div class="background">
		<div class="navbar animation anim-blink">
			<div class="logo">
				<h1>PALAWI</h1>
			</div>
			<ul class="nav">
				<li class="active">SEARCH</li>
				<li>CONTACT</li>
				<li>PESANAN ANDA</li>
				<li>INFO WISATA</li>
			</ul>
			<div class="special">
				<span><b>SUDAH BAYAR ?</b> Upload Bukti Transfer</span>
				<a id="btn-upload-form" class="marleft-15"><b>UPLOAD</b></a>
				<!-- <button class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> LOGIN</button> -->
			</div>
		</div>
		<div id="form-invoice" class="animation anim-blink">
			<h1>Cek Pesanan Anda.</h1>
			<div class="flex stretch">
				<p>Silahkan cek e-mail yang anda gunakan saat pemesanan untuk mendapatkan nomor invoice pesanan anda</p>
				<div class="flex-grow-1">
					<div class="field-row marbot-30">
						<div class="input-wrapper flex-grow-1">
							<b>NO. INVOICE</b>
							<input type="text" name="invoice" placeholder="Masukkan nomor invoice" class="font-number" spellcheck="false">	
						</div>
					</div>	
					<div class="field-row">
						<div class="input-wrapper flex-grow-1">
							<b>E-MAIL</b>
							<input type="text" name="email" placeholder="Masukkan e-mail anda" spellcheck="false">
						</div>
						<button id="btn-invoice" class="btn btn-warning">Cek Invoice</button>
					</div>	
				</div>
				
			</div>
		</div>
		<div class="invoice flex stretch animation anim-blink disappear gone">
			<div class="left">
				<div class="order-info">
					<div class="flex header marbot-30">
						<b class="flex-grow-1">BOOKING INVOICE</b>
						<p id="nomor-invoice" class="font-number"># INV/20191008/BAT/001</p>
					</div>
					<div class="content">
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Pesan <span id="val-nama-resort" class="marleft-15">RASAMALA VILLA</span></p>
							<p id="val-total-kamar" class="flex-grow-1 text-center">2 Kamar</p>
							<p id="val-lama-inap" class="flex-grow-1 text-center">1 Malam</p>
						</div>
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Untuk <span class="val-nama-pemesan marleft-15">Niko Prianto</span></p>
							<p class="flex-grow-1 text-center">C.P <span class="val-telepon marleft-15 font-number">0857-0160-9034</span></p>
							<p class="val-email flex-grow-1 text-center">nikonick47@gmail.com</p>
						</div>
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Check-In <span class="val-check-in marleft-15 font-number">05 September 2019</span></p>
							<p class="flex-grow-1">Check-Out <span class="val-check-out marleft-15 font-number">06 September 2019</span></p>
						</div>	
					</div>
				</div>
				<div class="order-detail martop-50">
					<div class="header marbot-15">
						<p>Rincian Pesanan Anda</p>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th class="text-center"><b>NO</b></th>
								<th><b>PESANAN</b></th>
								<th><b>HARGA PER UNIT</b></th>
								<th><b>UNIT</b></th>
								<th><b>BIAYA</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="font-number text-center">1</td>
								<td><b>DELUXE ROOM</b></td>
								<td class="font-number">Rp 350.000 <small>/malam</small></td>
								<td class="font-number">x 2</td>
								<td class="font-number">Rp 700.000</td>
							</tr>
							<tr>
								<td class="font-number text-center">2</td>
								<td><b>EXECUTIVE ROOM</b></td>
								<td class="font-number">Rp 250.000 <small>/malam</small></td>
								<td class="font-number">x 2</td>
								<td class="font-number">Rp 500.000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td class="text-right" colspan="4"><b>biaya per malam</b></td>
								<td class="font-number val-total-per-malam">Rp 1.200.000</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="right">
				<div class="payment">
					<div class="card marbot-50">
						<div id="not-paid">
							<div class="flex payment-address">
								<b><i>BCA</i></b>
								<div class="line"></div>
								<p class="font-currency">0123456789</p>
							</div>
							<div class="nominal martop-30">
								<b>Jumlah yang harus dibayarkan</b>
								<h1 class="font-currency text-center val-grand-total">Rp 1.200.000</h1>
							</div>
							<div class="footer martop-30">
								<h3>a.n Palawi Resort Baturraden</h3>
							</div>
						</div>
						<div id="half-paid">
							<div class="flex payment-address">
								<b><i>BCA</i></b>
								<div class="line"></div>
								<p class="font-currency">0123456789</p>
							</div>
							<div class="flex nominal martop-30 marbot-10">
								<b class="flex-grow-1">Sisa tagihan</b>
								<h3 class="font-currency"><b class="val-sisa-bayar">Rp 1.200.000</b></h3>
							</div>
							<p>Anda telah membayar DP sebesar <span class="font-currency val-sudah-bayar">Rp 480.000</span>, sisa tagihan dapat dibayarkan lewat transfer kembali atau dilengkapi saat check-in</p>
							<div class="footer martop-30">
								<h3>a.n Palawi Resort Baturraden</h3>
							</div>
						</div>
						<div id="paid">
							<div class="flex payment-address">
								<b><i>BCA</i></b>
								<div class="line"></div>
								<p class="font-currency">0123456789</p>
							</div>
							<div class="flex nominal martop-30">
								<b class="flex-grow-1">Sisa yang harus dibayarkan</b>
								<h4 class="font-currency val-sisa-bayar">Rp 1.200.000</h1>
							</div>
							<div class="footer martop-30">
								<h3>a.n Palawi Resort Baturraden</h3>
							</div>
						</div>
					</div>
					<div class="info">
						<div class="flex">
							<b class="flex-grow-1">GRAND TOTAL</b>
							<span class="font-currency"><span class="val-lama-inap">1 malam</span> x <span class="val-total-per-malam">Rp 1.200.000</span></span>
						</div>
						<div class="flex">
							<h4 id="grand-total" class="flex-grow-1 font-currency text-right val-grand-total">Rp 1.200.000</h4>
						</div>
						<div class="flex">
							<b class="flex-grow-1">YANG TELAH DIBAYAR</b>
							<span class="font-currency val-sudah-bayar">Rp 0</span>
						</div>
						<div class="flex">
							<b class="flex-grow-1">SISA YANG HARUS DIBAYAR</b>
							<span class="font-currency val-sisa-bayar">Rp 1.200.000</span>
						</div>
						<div class="flex">
							<b class="flex-grow-1">STATUS PEMBAYARAN</b>
							<span class="font-currency val-status-bayar">MENUNGGU PEMBAYARAN</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="bg animation anim-scale disappear gone">
		<div class="flex stretch">
			<div class="upload">
				<div class="photo-container">
					<img src="{{ asset('img/thumbnail-5.jpg') }}" class="photo">
				</div>
				<div class="photo-detail">
					<p class="font-currency val-file-size">120.3 KB</p>
					<h3 class="val-file-name">thumbnail-5.jpg</h3>
					<button id="btn-upload" class="btn">Upload</button>
				</div>
				<input type="file" name="bukti_transfer" class="invisible">
			</div>
			<div class="desc">
				<div class="flex">
					<h1 class="flex-grow-1">Upload foto bukti transfer.</h1>	
					<p id="btn-close-form">x</p>
				</div>
				<div class="new-line">
					<div class="line"><p>01</p></div>
					<p>Terimakasih</p>	
					<p>telah melakukan pembayaran untuk pesanan anda.</p>
				</div>
				<div class="new-line">
					<div class="line"><p>02</p></div>
					<p>Silahkan upload foto bukti transfer</p>
					<p>agar pesanan anda dapat segera kami proses.</p>
				</div>
				<div class="new-line">
					<div class="line"><p>03</p></div>
					<p>Bukti transfer yang anda kirimkan akan di-verifikasi terlebih dahulu dalam waktu maksimal 1x24 jam</p>
				</div>
				
				
				

			</div>
			
		</div>		
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
			var total_paid = data.total_paid;
			var is_paid = data.is_paid;
			var uang_muka = (30 * parseInt(total_bill))/100;
				

			var nama_pemesan = data.guest.name;
			var email = data.guest.email;
			var telepon = data.guest.phone;
			var nama_resort = data.details[0].item_detail.item.name;

			console.log(data);

			$('.order-detail table tbody').empty();

			var check_in_time = '';
			var check_out_time = '';
			var total_per_malam = 0;

			$.each(booking_details, function(index, detail) {
				var check_in = detail.start_time;
				var check_out = detail.end_time;
				var nama_kamar = detail.item_detail.item.name;
				var unit = 1;
				var harga = detail.price.service_price;
				var total = harga * unit;

					total_per_malam = total_per_malam + total;

					harga = accounting.formatMoney(
						harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
					total = accounting.formatMoney(
						total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });



				var $row = 
					'<tr>' +
						'<td class="font-number text-center">' + (index + 1) + '</td>' +
						'<td><b>' + nama_kamar + '</b></td>' +
						'<td class="font-number">' + harga + ' <small>/malam</small></td>' +
						'<td class="font-number">x 1</td>' +
						'<td class="font-number">' + total + '</td>' +
					'</tr>';

				$('.order-detail table tbody').append($row);

				check_in_time = check_in;
				check_out_time = check_out;
			})

			var lama_inap = dateDiffInDays(check_in_time.split('T')[0], check_out_time.split('T')[0]);
			var grand_total = total_per_malam * lama_inap;
			var total_sisa = grand_total - total_paid;
				lama_inap = lama_inap + ' malam';

			if (is_paid) {
				$('.card>div.active').removeClass('active');
				$('.card>div#paid').addClass('active');
			} else {
				$('.card>div.active').removeClass('active');

				if (total_paid != 0) {
					alert('half paid');
					$('.card>div#half-paid').addClass('active');
				} else {
					$('.card>div#not-paid').addClass('active');
				}
			}

				total_per_malam = accounting.formatMoney(
						total_per_malam, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				grand_total = accounting.formatMoney(
						grand_total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				uang_muka = accounting.formatMoney(
						uang_muka, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				total_paid = accounting.formatMoney(
						total_paid, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				total_sisa = accounting.formatMoney(
						total_sisa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			check_in_time = dateToString(check_in_time.split('T')[0]) + ' Jam 13:00';
			check_out_time = dateToString(check_out_time.split('T')[0]) + ' Jam 11:00';

			$('input[name="booking_id"]').val(booking_id);
			$('.val-nama-resort').text(nama_resort);
			$('.val-grand-total').text(grand_total);
			$('.val-sudah-bayar').text(total_paid);
			$('.val-sisa-bayar').text(total_sisa);
			$('.val-check-in').text(check_in_time);
			$('.val-check-out').text(check_out_time);
			$('.val-nama-pemesan').text(nama_pemesan);
			$('.val-total-per-malam').text(total_per_malam);
			$('.val-email').text(email);
			$('.val-telepon').text(telepon);
			$('.val-lama-inap').text(lama_inap);
			$('#nomor-invoice').text('# ' + invoice);

			transition();
		}).fail(error => {
			console.log(error)
			console.log(error.response)
		})
	})

	$('.photo-container').on('click', function() {
		$('input[type="file"]').click();
	})

	$('input[type="file"]').on('change', function() {
		var path = $(this).val();
		var file_name = path.split('\\')[2];
		var file = $(this)[0].files[0];
		var file_size = Math.floor(file.size / 1024) + ' KB';

		$('.val-file-name').text(file_name);
		$('.val-file-size').text(file_size);

		readURL(file);
	})

	$('#btn-upload-form').on('click', function() {
		$('.bg').removeClass('gone');

		setTimeout(function() {
			$('.bg').removeClass('disappear');
		}, 200);
	})

	$('#btn-close-form').on('click', function() {
		$('.bg').addClass('disappear');

		setTimeout(function() {
			$('.bg').addClass('gone');
		}, 500);
	})

	$('#btn-upload').on('click', function() {
		var booking_id = $('input[name="booking_id"]').val();

		var file = $('input[type=file]')[0].files[0];
		var form = new FormData();
		form.append("payment_method_id", "1");
		form.append("booking_id", booking_id);
		form.append("file", file);

		$.ajax({
            url: 'http://api.resort.shafarizkyf.com/api/transaction',  
            type: 'POST',
            data: form,
            cache: false,
            contentType: false,
            processData: false
		}).done(function (response) {
		  	alert('Bukti Pembayaran Berhasil Di-Upload');
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
		// $('.form').find('.animation').addClass('disappear');
		// setTimeout(function() {
		// 	$('.form').addClass('gone');
			
		// 	$('.content').removeClass('gone');
		// }, 800);

		// setTimeout(function() {
		// 	$('.content').find('.animation').removeClass('disappear');
		// }, 1000);

		$('.background').find('.navbar').addClass('disappear');
		$('.background').find('#form-invoice').addClass('disappear');

		setTimeout(function() {
			$('.background').addClass('show-invoice');	
			$('#form-invoice').addClass('gone');
			$('.invoice').removeClass('gone');
		}, 200);
		
		setTimeout(function() {
			$('.background').find('.navbar').removeClass('disappear');
			$('.invoice').removeClass('disappear');
		}, 500);
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

    function dateDiffInDays(start, end) {
    	var new_start = new Date(start);
    	var new_end = new Date(end);

    	var diff = new Date(new_end - new_start);
    	var day_diff = diff/1000/60/60/24;

    	return day_diff;
    }

    function readURL(file) {
	    var reader = new FileReader();
	    
	    reader.onload = function(e) {
	      	$('.photo-container .photo').attr('src', e.target.result);
	    }
	    
	    reader.readAsDataURL(file);
	}
</script>
</html>