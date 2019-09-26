<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }

		.bg {
			width: 100%;
			height: 100vh;
			position: absolute;
		    background: #000000b3;
		    display: none;
    		z-index: 2;
		}

		.background {
			background: #fff;
			width: 100%;
			height: 100vh;
			/*background-size: 130%;*/
			overflow: hidden;
			display: flex;
			flex-direction: column;
		}

		.form-title {
			padding: 0px 120px;
			/*display: flex;*/
			padding-bottom: 0;
		}

		.form-title h1 {
			flex-grow: 1;
			margin-top: 0;
		}

		.form-title p {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.form-reservasi {
			padding: 0px 120px;
			padding-top: 20px;
			padding-bottom: 70px;
			display: flex;
		}

		.background h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		}

		.flex {
			display: flex;
			/*align-items: center;*/
		}

		.orders {
			flex-grow: 1;
		}

		.orders>p {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.orders .order {
			align-items: center;
		}

		.order .left div, .order .right div {
		    margin: 0px 50px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		    margin-right: 20px;
		}

		.order .left div p, .order .right div p {
		    margin: 0px;
		}

		.order .left {
		    /*border: 1px solid #b5b5b5;*/
		    border-radius: 5px;
		    padding: 15px 0px;
		    margin-right: 30px;
		    flex-grow: 1;
		}

		.order .left label {
			width: 25px;
			height: 25px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin: 0;
		}

		.order .left .nama {
			flex-grow: 1;
		}

		.order .qty p {
			padding: 10px 20px;
			border: 1px solid #0000005c;
			border-radius: 5px;
		}

		.order.total {
			padding: 30px 0px;
			border-top: 1px solid #dcdcdc;
			margin-top: 20px;
		}

		.without-border {
			border: none !important;
		}

		.input-field {
			display: inline-block;
			position: relative;
			margin-right: 30px;
		}

		.input-field span {
			cursor: pointer;
			background: #07b0ff;
    		color: #fff;
    		white-space: nowrap;
		}

		.input-field input[type="text"] {
			position: absolute;
			top: 0;
			opacity: 0;
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

		.order-steps {
			padding: 80px 120px 50px;
		}

		.order-steps .step {
			flex-grow: 1;
			margin-right: 4px;
		}

		.order-steps .step .bar {
			height: 3px;
			width: 100%;
			background: #dcdcdc;
		}

		.order-steps .step p {
			font-family: Calibri Light;
		    margin-top: 10px;
		    letter-spacing: 3px;
		    font-size: 1.2em;
		}

		.order-steps .step.finished .bar {
			background: #61cc82;
		}

		.order-steps .step.finished p {
			color: #09ad3c;
			font-weight: bold;
		}

		.nav-button {
		    text-align: right;
		    padding: 50px 0px;
		    /*margin-top: 100px;*/
		}

		.nav-button span {
		    font-size: 1.3em;
    		letter-spacing: 2px;
		}

		.nav-button span a {
		    font-weight: 800;
		    margin-left: 20px;
		    padding-bottom: 10px;
		    border-bottom: 2px solid;
		    letter-spacing: 3px;
		    cursor: pointer;
		}

		.reservation-desc {
			margin-right: 70px;
		}

		.reservation-desc .thumbnail {
			width: 400px;
			height: 300px;
			background-image: url('../img/thumbnail-5.jpg');
			background-size: cover;
		}

		.harga {
			min-width: 106px;
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="background">
		<div class="order-steps flex">
			<div class="step finished">
				<div class="bar"></div>
				<p>1. LIHAT JADWAL</p>
			</div>
			<div class="step finished">
				<div class="bar"></div>
				<p>2. RESERVASI</p>
			</div>
			<div class="step active">
				<div class="bar"></div>
				<p>3. EXTRA ORDER</p>
			</div>
			<div class="step active">
				<div class="bar"></div>
				<p>4. IDENTITAS DIRI</p>
			</div>
			<div class="step">
				<div class="bar"></div>
				<p>5. PEMBAYARAN</p>
			</div>
		</div>
		<div class="form-reservasi">
			<div class="form-title">
				<h1>Silahkan Lengkapi Pesanan Anda</h1>
				<p>Anda akan menginap selama 4 malam, silahkan pilih kamar yang tersedia</p>
			</div>
			<div class="flex">
				<div class="reservation-desc">
					<div class="thumbnail"></div>
					<h2>Rasamala Villa</h2>
					<p>22 Sep 2019 - 25 Sep 2019</p>
				</div>
				<div class="orders">
					<p>Pilihan Ruangan</p>
					<div class="order flex">
						<div class="left flex">
							<label></label>
							<div class="nama">
								<b>DELUXE ROOM</b>
							</div>
							<div><p>Sisa 2 kamar</p></div>
							<div><p>Rp 420.000 / malam</p></div>
						</div>
						<div class="right flex">
							<div class="qty"><p>x 2</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex">
						<div class="left flex">
							<label></label>
							<div class="nama">
								<b>EXECUTIVE ROOM</b>
							</div>
							<div><p>Sisa 2 kamar</p></div>
							<div><p>Rp 355.000 / malam</p></div>
						</div>
						<div class="right flex">
							<div class="qty"><p>x 2</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex">
						<div class="left flex">
							<label></label>
							<div class="nama">
								<b>MEETING ROOM</b>
							</div>
							<div><p>Sisa 2 kamar</p></div>
							<div><p>Rp 355.000 / malam</p></div>
						</div>
						<div class="right flex">
							<div class="qty"><p>x 2</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order total flex">
						<div class="left flex">
						</div>
						<div class="right flex">
							<div><label>TOTAL</label></div>
							<div class="harga"><p>Rp 0</p></div>
						</div>
					</div>
					<div class="nav-button">
						<span>Saya memesan 2 Deluxe Room & 1 Executive Room, <a>Lanjutkan</a></span>
					</div>
				</div>
			</div>
			
		</div>
		<!-- <div class="orders">
			<p>Untuk 4 hari, tersedia :</p>
			<div class="order flex">
				<div class="left flex col-md-8">
					<label></label>
					<div class="nama">
						<b>DELUXE ROOM</b>
					</div>
					<div><p>Rp 355.000 / malam</p></div>
					<div><p>Sisa 2 kamar</p></div>
				</div>
				<div class="right flex col-md-4">
					<div><p>x 2</p></div>
					<div><p>x 4 hari</p></div>
					<div><p>Rp 710.000</p></div>
				</div>
			</div>
			<div class="order flex">
				<div class="left flex col-md-8">
					<label></label>
					<div class="nama">
						<b>EXECUTIVE ROOM</b>
					</div>
					<div><p>Rp 355.000 / malam</p></div>
					<div><p>Sisa 2 kamar</p></div>
				</div>
				<div class="right flex col-md-4">
					<div><p>x 2</p></div>
					<div><p>x 4 hari</p></div>
					<div><p>Rp 710.000</p></div>
				</div>
			</div>
			<div class="order flex">
				<div class="left col-md-8 without-border"></div>
				<div class="right flex col-md-4">
					<div></div>
					<div><p>TOTAL</p></div>
					<div><p>Rp 1.420.000</p></div>
				</div>
			</div>
		</div> -->
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('input[name="date"]').datepicker({ dateFormat: 'dd/mm/yy' });
		$('.input-field-toggle').on('click', function() {
			showInput($(this));
		});

		$('.input-field ul li').on('click', function() {
			$('.bg').hide();
			$('.input-field ul.show').parent().find('.input-field-toggle').text($(this).text());	
			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		});

		$('.input-field.tanggal .input-field-toggle').on('click', function() {
			$(this).next().focus();
		});
		$('input[name="date"]').on('change', function() {
			var date = dateToString($(this).val());
			$('.bg').hide();
			$(this).parent().find('.input-field-toggle').text(date);
		})

		$('.bg').on('click', function() {
			$('.bg').hide();

			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		})

		// $(document).on('click', function(e) {
		// 	var $target = $('.bg');
  //           var $trigger = $('.input-field ul.show');

  //           if ($target.parent().hasClass('show')) {
  //               if (!$target.is(e.target) && $target.has(e.target).length === 0) {
  //                   if (!$trigger.is(e.target)) {
  //                       $('.overlay').removeClass('show');
  //                   }
  //               }   
  //           }
		// })
	})

	function showInput(trigger) {
		$('.bg').show();
		trigger.parent().find('ul').addClass('show');

		setTimeout(function() {
			trigger.parent().find('ul').addClass('fade');	
		}, 100);
		
	}

	function hideInput() {
		
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
        var day = date.split('/')[0];
        var month = date.split('/')[1];
        var year = date.split('/')[2];
        var newDate = day + ' ' + monthString(month) + ' ' + year;

        return newDate;
    }
	
</script>
</html>