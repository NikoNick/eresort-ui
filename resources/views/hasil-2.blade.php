@extends('layouts/app')

@section('css-bottom')
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
			/*overflow: hidden;*/
		}

		.wrapper {
			align-items: baseline;
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
			left: 0;
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

		.btn-black {
			background: #000;
			color: #fff;
		}

		.left {
			padding: 0px 100px;
		}

		.title {
			z-index: 5;
			/*padding: 00px 100px;*/
			margin-top: 50px;
			/*position: relative;*/
		}

		.title:after {
		    content: '';
		    position: absolute;
		    width: 100%;
		    height: 2px;
		    left: 0;
		    border-top: 1px solid #dcdcdc;
		}

		.title h1 {
		    font-family: Raleway;
		    color: #000;
		    letter-spacing: 3px;
		    font-size: 4em;
		    font-weight: 800;
		    margin-bottom: 30px;
		    text-shadow: none;
		}

		.title h1 sup {
			font-style: italic;
			font-weight: 200;
			font-size: 50%;
			top: -1em;
		}

		.title {
			font-size: 1rem;
			letter-spacing: 1px;
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

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }

        .mobile-button {
        	display: none !important;
        }

        .mobile-label {
        	display: none;
        }

        #facility {
    	    /*display: flex;*/
		    /*margin-top: 50px;*/
		    position: relative;
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
        	/*transition-delay: 0.5s;*/
        }

        .card-bg {
    	    width: calc(100% + 50px);
		    height: 100%;
		    position: absolute;
		    left: -100px;
		    top: 80px;
		    background: #f5f5f5;
	        writing-mode: vertical-lr;
		    text-orientation: upright;
	        font-weight: 800;
		    font-size: 1.2em;
		    letter-spacing: 15px;
		    cursor: pointer;
		    border-radius: 45px;
        }

        .card-bg:active {
        	background: #f0f0f0;
        }

        .card-bg>div {
        	margin-top: -50px;
        	align-items: center;
        	margin-left: 30px;
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
    		overflow: hidden;
    		display: flex;
    		flex-wrap: wrap;
        }

        

        .card {
	        background: url(../img/thumbnail-5.jpg);
		    position: relative;
		    background-size: 100%;
		    /* background-position-y: -100px; */
		    padding: 10px 15px;
		    width: calc(33.3% - 30px);
		    margin-top: 30px;
		    margin-right: 30px;
		    font-size: 0.8em;
		    color: #fff;
		    border-radius: 5px; 
		    font-size: 0.8em;
		    display: inline-block;
        }

        .card:nth-child(2) {
        	background-image: url('../img/thumbnail-4.jpg');
        }

        .card:nth-child(2):before {
        	background: linear-gradient(180deg, rgba(110,96,210,1) 0%, rgba(47,125,223,1) 100%);
        }

        .card:nth-child(3):before {
        	background: linear-gradient(180deg, rgba(0,148,233,1) 0%, rgba(46,76,96,1) 100%);
        }

        .card:nth-child(4):before {
        	background: linear-gradient(180deg, rgba(47,73,92,1) 0%, rgba(0,0,0,1) 100%);
        }

        .card:before {
    	    content: '';
		    width: 100%;
		    height: 100%;
		    background: #6e60d2;
		    opacity: 0.84;
		    position: absolute;
		    top: 0;
		    left: 0;
		    border-radius: 5px;
        }

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


        .card b {
    		font-weight: 800;
		    /*font-size: 1.2em;*/
    		letter-spacing: 1px;
    		margin-bottom: 5px;
        }

        .card span {
        	letter-spacing: 1px;
    		font-size: 1em;
        }

        .card>div>h1 {
        	text-align: right;
		    margin-right: -22px;
		    font-weight: 800;
		    font-family: Raleway;
		    letter-spacing: 5px;
		    margin-bottom: 0;
		    font-size: 2.5em;
		    margin-bottom: -15px;
		    margin-top: 60px;
        }

        .card .sub-desc {
    	    letter-spacing: 2px;
		    margin-top: 10px;
		    margin-bottom: 0;
		    font-weight: 300;
        }

        .card .info-kamar {
        	display: flex;
        	align-items: center;
        	margin-right: -20px;
        	margin-top: 20px;
		    margin-bottom: -15px;
		    /*text-shadow: -5px 0px 0px #ffffff40;*/
        }

        .card .info-kamar b {
    	    font-family: Arial;
		    font-size: 5em;
		    margin: 0;
        }

        .card .info-kamar p {
    	    letter-spacing: 3px;
		    font-weight: 800;
		    font-size: 1.8em;
		    margin: 0;
		    text-align: right;
		    margin-top: 5px;
		    flex-grow: 1;
		    margin-right: 10px;
		    line-height: 22px;
        }

        .content-label {
        	position: relative;
        	font-size: 0.9em;
        }

        .content-label:before {
        	border: 2px solid #000;
        	content: '';
        	height: 8px;
        	position: absolute;
        	left: -20px;
        	top: 5px;
        	width: 8px;
        }

        .general-info {
    	    position: fixed;
		    right: 10%;
		    width: 18%;
		    top: 25%;
		    z-index: 5;
        }

        .icon {
    	    padding: 0px 6px;
		    border: 1px solid #0000004a;
		    border-radius: 50%;
		    color: #b5b5b5;
		    margin-right: 5px;
        }

        .general-info .box-wrapper {
        	width: 100%;
		    padding: 20px;
		    border: 1px solid #d6d6d6;
		    border-radius: 10px;
		    font-size: 1.1rem;
		    letter-spacing: 1px;
		    margin-top: 20px;
		    background: #fff;
        }

        .general-info .box-wrapper label {
        	font-size: 0.8rem;
        }
        .general-info .box-wrapper p {
        	margin: 0;
        }
        .general-info .box-wrapper>div {
        	margin-bottom: 20px;
        }
        .general-info .box-wrapper>div:last-child {
        	margin-bottom: 0px;
        }

        .general-info button {
    	    display: block;
		    width: 100%;
		    border-radius: 5px;
		    font-size: 0.8em;
		    letter-spacing: 1px;
		    font-weight: 800;
		    margin-top: 40px;
		    padding: 5%;
        }

        .data-info {
    	    margin-top: 50px;
		    padding-left: 20px;
		    padding-right: 25%;
        }

        .data-info .data {
        	margin-top: 30px;
        }
        .data-info .data:first-child {
        	margin-top: 0px;
        }

        .data-info .data>p, .data-info .data>span {
			font-size: 0.9em;
			font-weight: 400;
			margin: 0;
		    margin-top: 10px;
		    text-align: justify;
		    /*line-height: 50px;*/
		    letter-spacing: 1px;
		    position: relative;
		}

		.data-info .data>span {
        	margin-left: 20px;
        }

        @media screen and (max-width: 600px) {
        	.navbar .special {
        		display: none;
        	}

        	.wrapper {
        		display: block;
        	}

        	body {
        		overflow-y: auto;
        	}
        	.background {
        		overflow-y: auto;
        		padding-top: 25%;
        	}

        	.wrapper .left, .wrapper .right {
        		padding: 0px 10%;
        		font-size: 0.8em;
        		margin: 0;
        	}

        	.wrapper .left .title h1 {
        		font-size: 3.2em;
        		margin-bottom: 10px;
        	}

        	.title b.basic-info {
        		display: none;
        	}

			.title b.basic-info, #tentang p {
				font-size: 1em;
				letter-spacing: 1px;
			}

			.mobile-button {
				position: relative;
				margin-top: 20px;
				align-items: stretch;
				display: flex !important;
			}

			.mobile-label {
				display: inline-block;
			}

			.mobile-button button {
				background: pink;
				font-size: 1em;
				font-weight: 700;
				letter-spacing: 2px;
				padding: 12px;
			}

			.mobile-button .btn-icon {
				font-size: 1.5em;
				padding: 6px 12px;
				margin-left: 10px;
			}

			#tentang {
				margin: 0;
				margin-top: 50px;
				position: relative;
			}

			#tentang p {
				line-height: 25px;
				margin-top: 0px;
			}

			#fasilitas {
				/*margin-top: 50px;*/
				display: block;
			}

			#fasilitas h1 {
				display: none;
			}

			#fasilitas b {
				display: block;
				padding: 0px;
				line-height: 20px;
			}

			#fasilitas b span {
				font-size: 1em;
				letter-spacing: 1px;
				margin: 0;
			}
			#fasilitas b span:after {
				content: '-';
				margin-left: 5px;
				margin-right: 5px;
			}
			#fasilitas b span:last-child:after {
				content: none;
			}
			#fasilitas b:after {
				content: none;
			}

			.title {
				margin-top: 0px;
			}

			.card-bg {
				display: none;
			}

			.card-container {
				display: block;
				/*flex-wrap: wrap;*/
				/*margin-top: 50px;*/
			}

			.card-container .card {
				width: 100%;
				border-radius: 10px;
				font-size: 0.85em;
			}
			.card-container .card:first-of-type {
				margin-top: 10px;
			}
			.card-container .card:before {
				border-radius: 10px;
			}

			.data-info {
				padding-right: 0;
			}

			.data-info .data>span {
				display: block;
				margin-left: 0px;
			}

			.general-info {
				width: 100%;
				position: relative;
				right: 0;
				margin-top: 30px;
			}
        }
	</style>
@endsection
@section('body')
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
		@component('components/navbar')
		@endcomponent
		<div class="title animation">
			<p><b>SEARCH</b> / <i class="business-name">{{ $business_name }}</i></p>
			<h1 class="val-nama">Merkusii Villa</h1>
			<!-- <b class="basic-info"><span id="address"></span> | <span id="phone"></span></b> -->
			<!-- <div class="mobile-button flex">
				<button class="btn flex-grow-1 btn-reservasi">BOOKING</button>
				<button class="btn btn-icon"><i class="fas fa-camera-retro"></i></button>
			</div> -->
		</div>
		<div class="general-info">
			<label><span class="icon">!</span> Informasi Umum</label>
			<div class="box-wrapper">
				<div>
					<label>TOTAL KAMAR</label>
					<p>2 Kamar</p>
				</div>
				<div>
					<label>TELEPON</label>
					<p id="phone">085701609034</p>
				</div>
				<div>
					<label>ALAMAT</label>
					<p id="address">Jl. Overste Isdiman Gg.II/5A Purwokerto</p>
				</div>
			</div>
			<button class="btn btn-black btn-reservasi">BOOKING</button>
		</div>
		<div class="data-info">
			<div id="description" class="data animation">
				<label class="content-label">Deskripsi</label>
			</div>
			<div id="facility" class="data">
				<label class="content-label">Fasilitas Umum</label>
			</div>
			<div id="services" class="data">
				<label class="content-label">Services & Price</label>
				<div class="card-container">
					
				</div>
			</div>
			
		</div>
		
		<!-- <div class="right animation">
			<div class="card-bg">
				<div class="flex">
					<p><b>SERVICES & PRICE</b></p>
				</div>
			</div>
			<div class="card-container">
				<label class="content-label">Services & Price</label>
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
		</div> -->
		
		<div class="btn-slider">
			<button class="btn btn-icon slide-left animation"><i class="fas fa-angle-left"></i></button>
			<button class="btn btn-icon slide-right animation"><i class="fas fa-angle-right"></i></button>
		</div>
	</div>

	<form id="form-target" method="POST" action="/reservasi">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="start_date" value="{{ $start_date }}">
		<input type="text" name="end_date" value="{{ $end_date }}">
		<input type="text" name="person" value="{{ $person }}">
		<input type="text" name="waktu" value="{{ $waktu }}">
		<input type="text" name="business_id" value="{{ $business_id }}">
		<input type="text" name="item_id">

		<button type="submit">OK</button>
	</form>
@endsection
@section('js-bottom')
<script type="text/javascript">
	var resort = {!! json_encode($result) !!};
	var business_name = {!! json_encode($business_name) !!};
	console.log(resort);
	var id_resort = resort.id;
	var nama_resort = resort.name;
	var description = (resort.description != null) ? `<p>${resort.description}</p>` : `<span>Tidak ada deskripsi</span>`;
	var tipe_kamar = resort.availability;
	var harga_sewa = resort.price.service_price;
		harga_sewa = accounting.formatMoney(
					harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

	$('input[name="item_id"]').val(id_resort);
	$('.card-container').empty();

	$('#address').text(resort.location.address);
	$('#phone').text(resort.location.phone);

	if (resort.villa_facilities.length){
		var facilities = resort.villa_facilities.map(facility => `<span>${facility.name}</span>`);
		facilities = `<p>${facilities.join(' - ')}</p>`;
		
	} else {
		var facilities = '<span>Tidak ada fasilitas terdaftar</span>';
	}

	$('#facility').append(facilities);

	var $kamar = 
		'<div class="card animation active">' +
			'<div>' +
				'<b>Book Satu Villa</b>' +
				'<span class="font-currency">' + harga_sewa + ' / malam</span>' +
				'<h1>AVAILABLE</h1>' +
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
				'<div class="card">' +
					'<div>' +
						'<b>' + nama_kamar + '</b>' +
						'<span class="font-currency">' + harga + ' / malam</span>' +
						'<div class="info-kamar">' +
							'<p>SISA<br>KAMAR</p>' +
							'<b>' + sisa_kamar + '</b>' +
						'</div>' +
					'</div>' +
				'</div>';

		$('.card-container').append($kamar);

	})

	$('.val-nama').html(nama_resort + ' <sup>' + business_name + '</sup>');
	$('#description').append(description);

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

	$('.btn-reservasi').on('click', function() {
		$('#form-target').find('button').click();
	})

	$('.slide-left').on('click', function() {
		$('.carousel-control.left').click();
	})
	$('.slide-right').on('click', function() {
		$('.carousel-control.right').click();
	})
</script>
@endsection