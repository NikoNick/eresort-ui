<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
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

		.navbar {
			padding: 0px 120px;
			/*display: flex;*/
			padding-bottom: 0;
		}

		.navbar h1 {
			flex-grow: 1;
		}

		.form-reservasi {
			padding: 0px 120px;
			padding-top: 20px;
			padding-bottom: 70px;
		}

		.background h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		}

		.background .form-reservasi span {
			font-size: 2.9em;
		    line-height: 80px;
		    font-weight: 300;
		    letter-spacing: 5px;
		    word-spacing: 20px;
		    /*padding-bottom: 50px;*/
		    /*border-bottom: 1px solid #dcdcdc;*/
		}

		.background .navbar p, .orders>p {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.flex {
			display: flex;
			align-items: center;
		}

		.orders {
			padding: 50px 120px;
		}

		.orders .order {
			align-items: center;
			margin-bottom: 25px;
		}

		.order .left div, .order .right div {
		    margin: 0px 50px;
		    font-size: 1.5em;
		    letter-spacing: 2px;
		    margin-right: 20px;
		}

		.order .left div p, .order .right div p {
		    margin: 0px;
		}

		.order .left {
		    border: 1px solid #b5b5b5;
		    border-radius: 5px;
		    padding: 20px;
		    margin-right: 30px;
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

		.without-border {
			border: none !important;
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
		    padding: 50px 120px;
		    margin-top: 50px;
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
	</style>
</head>
<body>
	<div class="background">
		<div class="bg"></div>
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
				<h1>Beritahu Kami Tentang Anda</h1>
			</div>
			<div class="form">
				<span>Nama saya </span>
				<div class="input-field tanggal">
					<span class="input-field-toggle">Niko Prianto</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Nama Lengkap</p>
							<input type="text" name="nama" placeholder="Nama Lengkap Anda">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span>silahkan hubungi saya di </span> <br>
				<div class="input-field tanggal">
					<span class="input-field-toggle">0867-0160-9034</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Telepon</p>
							<input type="text" name="nama" placeholder="xxxx-xxxx-xxxx">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span> atau lewat email </span>
				<div class="input-field tanggal">
					<span class="input-field-toggle">nikonick47@gmail.com</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Email Anda</p>
							<input type="text" name="nama" placeholder="john_doe@mail.com">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span> atau ke alamat </span>
				<div class="input-field">
					<span class="input-field-toggle allow-whitespace">Jl. Overste Isdiman Gg.II/5A Purwokerto</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Alamat Anda</p>
							<textarea placeholder="Jl. Overste Isdiman Gg.II/5A, Purwokerto"></textarea>
							<button>
								<i class="fas fa-check"></i>	
							</button>
						</div>
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
		<div class="nav-button">
			<span>Identitas saya sudah benar, <a>Lanjutkan</a></span>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('input[name="date"]').datepicker({ dateFormat: 'dd/mm/yy' });
		$('.input-field-toggle').on('click', function() {
			showInput($(this));
		});

		$('.text-field button').on('click', function() {
			$('.bg').hide();
			$('.text-field-wrapper.show').parent().find('.input-field-toggle').text($(this).prev().val());	
			$('.text-field-wrapper.show').removeClass('fade');
			setTimeout(function() {
				$('.text-field-wrapper.show').removeClass('show');
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
		trigger.parent().find('.text-field-wrapper').addClass('show');

		setTimeout(function() {
			trigger.parent().find('.text-field-wrapper').addClass('fade');	
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