<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('linear icon/style.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
			overflow: hidden;
		}

		.font-number {
			font-family: Calibri Light !important;
			font-size: 1.2em;
		}

		.font-currency {
			font-family: Consolas;
			font-size: 1.2em;
		}

		.bg {
			width: 100%;
			height: 100vh;
			position: fixed;
			background: #fff;
			top: 0;
		}

		.background {
			/*background: url('../img/thumbnail-2.jpg');*/
			width: 100%;
			height: 100vh;
			position: absolute;
			top: 0;
			/*background-size: 130%;*/
			overflow: hidden;
			display: flex;
			flex-direction: column;
			/*animation: idle infinite 15s;*/
		}

		.background.free-roam .title {
			margin-top: 450px;
		}

		.background.free-roam .bg {
			margin-top: 100%;
		}

		.background.free-roam #tentang, .background.free-roam .navbar .logo button {
			opacity: 0;
		}

		.background.free-roam .btn-slider {
			display: block;
		}

		.background.free-roam .title h1, .background.free-roam b {
			color: #fff;
			text-shadow: 0px 0px 10px #000;
		}

		.background.free-roam .right {
			margin-top: 50px;
			opacity: 0;
			transition-delay: 0s;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 50px 100px;
			align-items: center;
			flex-shrink: 0;
			flex-grow: 0;
			position: relative;
		}

		.navbar .logo {
			flex-grow: 1;
		}

		.navbar .logo button {
			border: 1px solid #b5b5b5;
		    background: transparent;
		    color: #000;
		    font-weight: 700;
		    letter-spacing: 2px;
		    font-size: 1.2em;
		    padding: 12px 20px;
		}

		.navbar .special {
			display: flex;
			align-items: center;
		}

		.navbar .special a {
			letter-spacing: 2px;
			margin-right: 30px;
		}

		.btn-black {
			background: #000;
			color: #fff;
		}

		.navbar .special button {
			padding: 8px 20px;
			font-weight: 500;
			letter-spacing: 2px;
			border-radius: 0px;
		}

		.left {
			padding: 0px 100px;
		}

		.title {
			z-index: 5;
			/*padding: 00px 100px;*/
			margin-top: 50px;
			position: relative;
		}

		.title .rating i {
			font-size: 2.3em;
		    margin-right: 10px;
		    color: #ff9b00;
		    text-shadow: none;
		}

		.title h1 {
		    font-family: Raleway;
		    color: #000;
		    letter-spacing: 5px;
		    font-size: 4em;
		    font-weight: 700;
		    margin-bottom: 20px;
		    text-shadow: none;
		}

		.title b.basic-info {
			font-weight: 600;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		    font-family: Raleway;
		}

		.title b.basic-info span {
			margin-right: 20px;
		}

		#tentang {
			margin-right: 100px;
		}

		#tentang p {
			font-size: 1.1em;
			font-weight: 400;
		    margin-top: 40px;
		    text-align: justify;
		    line-height: 50px;
		    letter-spacing: 2px;
		    position: relative;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }

        #fasilitas {
    	    display: flex;
		    margin-top: 150px;
		    position: relative;
        }

        #fasilitas h1 {
    	    position: absolute;
		    top: 0;
		    margin: 0;
		    font-weight: 900;
		    letter-spacing: 5px;
		    font-size: 2.5em;
		    top: -25px;
		    color: #f5f5f5;
        }

        #fasilitas h1:after {
    	    content: '';
			width: 100%;
			height: 100%;
			background: #fff;
			background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 150%);
			position: absolute;
			left: 0;
        }

        #fasilitas b {
    	    position: relative;
    		padding: 0px 20px;
        }

        #fasilitas b:after {
    	    content: '';
		    width: 80%;
		    border-top: 1px solid #989898;
		    height: 2px;
		    position: absolute;
		    bottom: -20px;
		    left: 0;
        }

        #fasilitas b span {
	        margin: 0px 20px;
	        font-size: 1.1em;
    		letter-spacing: 2px;
		    font-weight: 500;
        }

        #myCarousel {
        	position: relative;
        	z-index: 0;
        }

        #myCarousel .carousel-inner {
        	position: fixed;
        	top: 0;
        }

        #myCarousel .carousel-inner .item {
        	width: 100%;
        	height: 100vh;
        	background-size: cover;
        }

        #myCarousel .carousel-inner .item:first-child {
        	background-image: url('../img/thumbnail-2.jpg');
        }

        #myCarousel .carousel-inner .item:nth-child(2) {
        	background-image: url('../img/thumbnail-1.jpeg');
        }
        #myCarousel .carousel-inner .item:nth-child(3) {
        	background-image: url('../img/thumbnail-5.jpg');
        }

        .btn-slider {
        	display: none;
        }

        .btn-slider button {
        	position: fixed;
        	top: 0;
        	width: 250px;
        	height: 100%;
        	background: transparent;
        	border: 0;
        	color: #fff;
        	opacity: 0;
		    font-size: 4em;
    		padding: 10px 50px;
    		highlight: none;
    		outline: none;
        }

        .btn-slider button:hover {
        	opacity: 1;
        	color: #fff;
        }

        .btn-slider button.slide-left {
        	left: 0px;
        	background-image: linear-gradient(to right,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);
    		background-repeat: repeat-x;
    		text-align: left;
        }

        .btn-slider button.slide-right {
        	right: 0px;
        	background-image: linear-gradient(to left,rgba(0,0,0,0.5) 0,rgba(0,0,0,0.0001) 100%);
    		background-repeat: repeat-x;
    		text-align: right;
        }

        .carousel-control {
        	opacity: 0;
        }

        .flex {
        	display: flex;
        }

        .flex-grow-1 {
        	flex-grow: 1;
        }

        .right {
        	margin: 0px 100px;
        	position: relative;
        	display: flex;
        	margin-top: 40px;
        	/*transition-delay: 0.5s;*/
        }

        .card-bg {
    	    width: 100%;
		    height: 100%;
		    position: absolute;
		    writing-mode: vertical-lr;
		    font-weight: 400;
		    font-size: 1em;
		    word-spacing: 5px;
		    letter-spacing: 10px;
		    cursor: pointer;
        }

        .card-bg>div {
        	position: absolute;
        	right: 0px;
        	/*margin-top: -50px;*/
        	align-items: center;
        	margin-left: 25px;
        }

        .card-bg b {
        	font-weight: 800;
        }

        .card-bg .line {
        	width: 1px;
        	height: 8%;
        	margin-bottom: 30px;
        	background: #000;
        }

        .card-bg i {
        	font-size: 2em;
        }

        .card-container {
    	    position: relative; 
    		/*overflow: hidden;*/
    		/*transform: translateX(-60px);*/
        }

        .card-container:after {
        	content: '';
		    width: 100%;
		    height: 300px;
		    background: #000;
		    background: linear-gradient(180deg, rgba(0,148,233,0) 50%, rgb(255, 255, 255) 100%);
		    position: fixed;
		    /* top: 0; */
		    bottom: 0px;
        }

        .card {
    	    /*background: url(../img/thumbnail-5.jpg);*/
    	    background: #fff;
    	    border: 1px solid #989898;
		    background-size: 100%;
		    /*background-position-y: -100px;*/
		    padding: 18px 25px;
		    width: 400px;
		    margin-bottom: 30px;
		    color: #000;
        }

        /*.card:nth-child(2) {
        	background-image: url('../img/thumbnail-4.jpg');
        }

        .card:first-child:before {
        	background: linear-gradient(180deg, rgba(110,96,210,1) 0%, rgba(47,125,223,1) 100%);
        }

        .card:nth-child(2):before {
        	background: linear-gradient(180deg, rgba(0,148,233,1) 0%, rgba(46,76,96,1) 100%);
        }

        .card:nth-child(3):before {
        	background: linear-gradient(180deg, rgba(47,73,92,1) 0%, rgba(0,0,0,1) 100%);
        }

        .card:before {
    	    content: '';
		    width: 100%;
		    height: 100%;
		    background: #6e60d2;
		    opacity: 0.64;
		    position: absolute;
		    top: 0;
		    left: 0;
        }*/

        .card>div {
        	position: relative;
        	display: flex;
        	flex-direction: column;
        }

        .card .img {
        	position: relative;
        	width: 330px !important;
        	height: 130px;
        	margin-right: 50px;
        	/*border-radius: 10px;*/
        	background-image: url('../img/thumbnail-3.jpg');
        	background-size: cover;
        	box-shadow: 0px 0px 0px 3px #fff, 0px 0px 0px 18px #0000000f, 0px 0px 0px 10px #0041ff17;
        }

        .card .img .sisa {
        	position: absolute;
		    margin: 0;
		    bottom: -35px;
		    right: -20px;
        	display: flex;
        	/*align-items: flex-end;*/
        	color: #fff;
        	font-size: 1em;
        }

        .card .img .sisa b {
        	letter-spacing: 2px;
        }

        .card .img .sisa h1 {
        	margin: 0;
    	    font-weight: 900;
		    font-size: 6em;
		    color: #fff;
		    /*text-shadow: -5px -8px 10px #0000002e;*/
        }


        .card-index {
        	margin-top: 18px;
        	margin-right: 25px;
        	position: relative;
        }

        .card-index:before {
    	    content: '';
		    width: 30px;
		    height: 2px;
		    border-top: 1px solid #000;
		    position: absolute;
		    top: 11px;
		    left: 20px;
        }

        .card>div>label:before {
    	    content: '';
		    width: 30px;
		    border-top: 1px solid;
		    height: 2px;
		    position: absolute;
		    top: 11px;
		    left: 18px;
        }

        .card .etc {
    	    background: #0fffbe;
		    font-size: 0.9em;
		    font-weight: 500;
		    padding: 0px 5px;
		    letter-spacing: 1px;
		    border: 1px solid #b5b5b5;
        }

        .card b {
    		font-weight: 700;
		    font-size: 1em;
		    flex-grow: 1;
    		letter-spacing: 2px;
    		margin-bottom: 5px;
        }

        .card>div>span {
    	    letter-spacing: 2px;
		    font-size: 1em;
		    font-weight: 400;
        }

        .card>div>h1 {
        	text-align: right;
		    margin-right: -35px;
		    font-weight: 800;
		    font-family: Raleway;
		    letter-spacing: 5px;
		    margin-bottom: 0;
		    font-size: 3.5em;
		    margin-bottom: -15px;
		    text-shadow: -5px -3px 0px #ffffff5e;
		    margin-top: 30px;
        }

        .card .sub-desc {
    	    letter-spacing: 2px;
		    margin-top: 15px;
		    margin-bottom: 0;
		    font-weight: 400;
		    font-size: 0.9em;
        }

        .card .info-kamar {
        	display: flex;
        	align-items: center;
        	margin-right: -40px;
		    margin-bottom: -35px;
		    text-shadow: -5px 0px 0px #ffffff40;
        }

        .card .info-kamar b {
    	    font-family: Arial;
		    font-size: 7.5em;
		    margin: 0;
        }

        .card .info-kamar p {
    	    letter-spacing: 3px;
		    font-weight: 800;
		    font-size: 2.3em;
		    margin: 0;
		    text-align: right;
		    margin-top: 28px;
		    flex-grow: 1;
		    margin-right: 10px;
		    line-height: 35px;
        }
	</style>
</head>
<body>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>		
		</ol>

		<!-- deklarasi carousel -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<!-- <img src="{{ asset('img/thumbnail-1.jpeg') }}" alt="www.malasngoding.com"> -->
			</div>
			<div class="item">
				<!-- <img src="{{ asset('img/thumbnail-2.jpg') }}" alt="www.malasngoding.com"> -->
			</div>
			<div class="item">
				<!-- <img src="{{ asset('img/thumbnail-3.jpg') }}" alt="www.malasngoding.com"> -->
			</div>				
		</div>

		<!-- membuat panah next dan previous -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fas fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fas fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<div class="background">
		<div class="bg animation"></div>	
		<div class="navbar">
			<div class="logo">
				<button id="btn-back" class="btn animation">< Kembali</button>
			</div>
			<div class="special flex">
				<a id="btn-free">LIHAT GALERI</a>
				<button id="btn-reservasi" class="btn btn-black">Booking</button>
			</div>
		</div>
		<div class="flex flex-grow-1">
			<div class="left">
				<div class="title animation">
					<div class="rating">
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
					</div>
					<h1 class="val-nama">Merkusii Villa</h1>
					<b class="basic-info"><span>Jl. Overste Isdiman Gg.II / 5A, Purwokerto</span> <span>|</span> 0857-0160-9034</b>
				</div>
				<div id="tentang" class="flex-grow-1 animation">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor aliquam felis, sit amet tempus nibh ullamcorper nec. Maecenas suscipit dolor at blandit congue. Sed adipiscing, odio feugiat pellentesque tincidunt, est leo vestibulum erat, ac pharetra massa justo ac lorem.</p>
				</div>
				<div id="fasilitas" class="inner-content">
					<h1>FASILITAS VILLA</h1>
					<b>
						<span>Ruang Makan</span>
						<span>Ruang Tamu</span>
						<span>Pantry</span>
						<span>LED TV</span>
						<span>Breakfast</span>
						<span>Room Service</span>
					</b>
				</div>
			</div>
			<div class="right animation">
				<!-- <div class="card-bg">
					<div class="flex">
						<p>Pilihan Layanan & Harga</p>
						<div class="line"></div>
					</div>
				</div> -->
				<div class="card-container">
					<div class="card">
						<div>
							<b>Book Satu Villa</b>
							<span class="font-currency">Rp 855.000 / malam</span>
							<h1>AVAILABLE</h1>
						</div>
					</div>
					<div class="card">
						<div>
							<b>Merkusii Villa Executive</b>
							<span class="font-currency">Rp 300.000 / malam</span>
							<p class="sub-desc">The view from our balcony in room # 409, was terrific. It was centrally located to everything</p>
							<div class="info-kamar">
								<p>SISA<br>KAMAR</p>
								<b>2</b>
							</div>
						</div>
					</div>
					<div class="card">
						<div>
							<b>Merkusii Villa Deluxe</b>
							<span class="font-currency">Rp 400.000 / malam</span>
							<p class="sub-desc">The view from our balcony in room # 409, was terrific. It was centrally located to everything</p>
							<div class="info-kamar">
								<p>SISA<br>KAMAR</p>
								<b>1</b>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="btn-slider">
			<button class="btn btn-icon slide-left animation"><i class="fas fa-angle-left"></i></button>
			<button class="btn btn-icon slide-right animation"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>

	<form id="form-target" method="POST" action="/reservasi">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="start_date" value="{{ $start_date }}">
		<input type="text" name="end_date" value="{{ $end_date }}">
		<input type="text" name="business_id" value="{{ $business_id }}">
		<input type="text" name="waktu" value="{{ $waktu }}">
		<input type="text" name="item_id">

		<button type="submit">OK</button>
	</form>
</body>
<script type="text/javascript">
	var resort = {!! json_encode($result) !!};
	var business_id = {!! $business_id !!};
	var id_resort = resort.id;
	var nama_resort = resort.name;
	var tipe_kamar = resort.availability;
	var harga_sewa = resort.price.service_price;
		harga_sewa = accounting.formatMoney(
					harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

	if (business_id == 3) {
		var id_resort = resort.details[0].id;
	}

	$('input[name="item_id"]').val(id_resort);
	$('.card-container').empty();
	

	var $kamar =
		'<div class="flex">' +
			'<label class="card-index font-currency">1</label>' +
			'<div class="card animation active">' +
				'<div>' +
					'<div class="flex">' +
						'<b>Book Satu Villa</b>' +
						'<label class="etc">AVAILABLE</span>' +	
					'</div>' +
					'<span>' + harga_sewa + ' / malam</span>' +
				'</div>' +
			'</div>' +
		'</div>';

	$('.card-container').append($kamar);

	$.each(tipe_kamar, function(index, kamar) {
		var id_kamar = kamar.id;
		var nama_kamar = kamar.name;
		var sisa_kamar = kamar.count_availability;
		var harga = kamar.price.service_price;
			harga = accounting.formatMoney(
					harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		var $kamar = 
				'<div class="flex">' +
					'<label class="card-index font-currency">' + (index + 2) + '</label>' +
					'<div class="card">' +
						'<div>' +
							'<div class="flex">' +
								'<b>' + nama_kamar + '</b>' +
								'<label class="etc">SISA <span class="font-currency">' + sisa_kamar + '</span> KAMAR</span>' +
							'</div>' +
							'<span>' + harga + ' / malam</span>' +
							'<p class="sub-desc">The view from our balcony in room # 409, was terrific. It was centrally located to everything</p>' +
						'</div>' +
					'</div>' +
				'</div>';

		$('.card-container').append($kamar);

	})

	$('.val-nama').text(nama_resort);

	$('#btn-back').on('click', function() {
		window.history.back();
	})

	$('#btn-free').on('click', function() {
		var state = $('.background').hasClass('free-roam');

		if (state) {
			$('.background').removeClass('free-roam');
		} else {
			$('.background').addClass('free-roam');
		}
	})

	$('.card-bg').on('click', function() {
		var index_offset = $('.card').length;
		var active_index = $('.card').index($('.card.active'));
		var target_index = active_index + 1;

		var margin_top = 0;

		$('.card').each(function(index) {
			var ver_position = $(this).outerHeight() + 30;
			// alert(ver_position);

			if (index < target_index) {
				margin_top = margin_top + ver_position;
			}
		})

		margin_top = '-' + margin_top + 'px';

		$('.card.active').removeClass('active');

		if (target_index == index_offset) {
			$('.card:first-child').css('margin-top', '0px');
			$('.card:first-child').addClass('active');	
		} else {
			$('.card:first-child').css('margin-top', margin_top);
			$('.card').eq(active_index + 1).addClass('active');	
		}
		
	})

	$('#btn-reservasi').on('click', function() {
		$('#form-target').find('button').click();
	})

	$('.slide-left').on('click', function() {
		$('.carousel-control.left').click();
	})
	$('.slide-right').on('click', function() {
		$('.carousel-control.right').click();
	})
</script>
</html>