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

		.navbar {
			padding: 2% 12%;
		}

		.background {
			padding: 5% 12% 3%;
		}

		.wrapper {
			align-items: baseline;
		}

		.font-number {
			font-family: Calibri Light !important;
			font-size: 1.1em;
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

		.title {
			z-index: 5;
			/*padding: 00px 100px;*/
			margin-top: 50px;
			position: relative;
		}

		.title .headline {
			/*display: inline;*/
			position: relative;
			width: 718px;
			height: 403px;
			border-radius: 15px;
			overflow: hidden;
		}

		.title .headline .slides {
			position: relative;
			white-space: nowrap;
		}

		.title .headline .slide {
			display: inline-block;
			position: relative;
		}

		.title .headline img {
			width: 718px;
			height: 403px;
		}

		.title .headline h1 {
			position: absolute;
			right: 0px;
			bottom: 0px;
		    padding: 20px 40px;
		    background: #0000004a;
		    color: #fff;
		    z-index: 2;
		    margin-bottom: 0px;
		    border-bottom-right-radius: 15px;
		    border-top-left-radius: 15px;
		}

		/*.title:after {
		    content: '';
		    position: absolute;
		    width: 100%;
		    height: 2px;
		    left: 0;
		    border-top: 1px solid #dcdcdc;
		}*/

		.title h1 {
		    font-family: Raleway;
		    color: #000;
		    letter-spacing: 3px;
		    font-size: 4em;
		    font-weight: 700;
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

		.title p {
			margin-bottom: 30px;
			text-transform: uppercase;
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

        .flex.baseline {
        	align-items: baseline;
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
        	font-weight: 600;
        	letter-spacing: 1px;
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
    	    position: relative;
    	    margin-left: 8%;
    	    min-width: 22%;
        }

        .icon {
    	    padding: 0px 6px;
		    border: 1px solid #0000004a;
		    border-radius: 50%;
		    color: #b5b5b5;
		    margin-right: 5px;
        }

        .general-info>label {
        	margin-bottom: 30px;
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

        .general-info .info-card {
		    text-align: center;
		    padding: 15px 20px;
		    border: 1px solid #2da9ff;
		    border-radius: 15px;
		    /* width: 50%; */
		    position: relative;
		    margin-bottom: 20px;
		}

		.general-info .info-card.phone img {
			width: 20%;
		}

		.general-info .info-card.phone p {
			font-size: 0.9em;
		}

        .general-info .info-card img {
        	width: 15%;
        }

        .general-info .info-card label {
		    position: absolute;
		    right: 20px;
		    font-size: 0.65em;
		    color: #2da9ff;
		    font-weight: 600;
		    letter-spacing: 1px;
		}

		.general-info .info-card p {
		    margin-top: 20px;
		    margin-bottom: 5px;
		    font-size: 0.8em;
		    letter-spacing: 1px;
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
	        background: linear-gradient(90deg, #0f9cff 0%, #137ac2 100%);
			border-bottom: 3px solid #07609e;
        }

        .general-info button:active {
        	background: linear-gradient(90deg, #137ac2 0%, #0f9cff 100%);
        	border-bottom: 0px;
        	outline: none;
        	highlight: none;
        }

        .data-info {
    	    margin-top: 50px;
		    padding-left: 20px;
		    /*padding-right: 25%;*/
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

        .main-info {
        	margin-top: 50px;
        	position: relative;
        	font-size: 0.8em;
        }

        .main-info .main-price img {
    	    margin-top: -5px;
    		width: 8%;
    		margin-right: 5%;
        }

        .main-info .main-price label {
        	margin: 0;
        }

        .main-info .main-price p {
        	font-size: 2em;
        	letter-spacing: 2px;
		    font-family: Calibri Light;
		    margin: 0;
        }

        .main-info button {
    	    display: block;
		    width: 60%;
		    border-radius: 5px;
		    font-size: 1em;
		    letter-spacing: 2px;
		    font-weight: 700;
		    /* margin-top: 40px; */
		    padding: 2%;
		    background: linear-gradient(90deg, #0f9cff 0%, #137ac2 100%);
		    border-bottom: 3px solid #07609e;
        }

        .main-info button:active {
        	background: linear-gradient(90deg, #137ac2 0%, #0f9cff 100%);
        	border-bottom: 0px;
        	outline: none;
        	highlight: none;
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
        		padding: 5% 10%;
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
				display: none;
			}

			.title .headline {
			    width: calc(100% + 20%);
			    left: -10%;
			    height: auto; 
			    border-radius: 0px;
			}

			.title .headline h1 {
				width: 100%;
				font-size: 2.5em;
				border-radius: 0px;
			}

			.title .headline img {
				height: auto;
				width: 100%;
			}

			.main-info {
				display: block;
			}

			.main-info button {
				display: block;
				width: 100%;
				margin-top: 30px;
				padding: 5%;
			}
        }
	</style>
@endsection
@section('body')
	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>		
		</ol>

		
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			</div>
			<div class="item">
			</div>
			<div class="item">
			</div>				
		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fas fa-angle-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fas fa-angle-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->
	
	<div class="background">
		<div class="bg animation"></div>
		@component('components/navbar')
		@endcomponent
		<div class="flex baseline">
			<div class="left">
				<div class="title">
					<p><b>SEARCH</b> / <i class="business-name">{{ $business_name }}</i> / <i class="location-name"></i></p>
					<div class="headline">
						<h1 class="val-nama">Merkusii Villa</h1>
						<div class="slides">
							<div id="satu" class="slide active">
								<img src="{{ asset('img/index3.jpg') }}">	
							</div>
							<div id="dua" class="slide">
								<img src="{{ asset('img/index3.jpg') }}">	
							</div>
							<div id="tiga" class="slide">
								<img src="{{ asset('img/index3.jpg') }}">	
							</div>
						</div>
						
					</div>
				</div>
				<div class="flex main-info">
					<div class="flex main-price">
						<img src="{{ asset('img/icon-price.png') }}">
						<div>
							<label>Book Satu Villa</label>
							<p><b class="val-price">Rp 1.500.000</b> / malam</p>
						</div>
					</div>
					<button class="btn btn-black btn-reservasi">BOOKING</button>	
				</div>
				<!-- <b class="basic-info"><span id="address"></span> | <span id="phone"></span></b> -->
				<!-- <div class="mobile-button flex">
					<button class="btn flex-grow-1 btn-reservasi">BOOKING</button>
					<button class="btn btn-icon"><i class="fas fa-camera-retro"></i></button>
				</div> -->
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
			</div>
			<div class="general-info">
				<label><span class="icon">!</span> Informasi Umum</label>
				<!-- <div class="box-wrapper">
					<div>
						<label>TELEPON</label>
						<p id="phone">085701609034</p>
					</div>
					<div>
						<label>ALAMAT</label>
						<p id="address">Jl. Overste Isdiman Gg.II/5A Purwokerto</p>
					</div>
				</div> -->

				<div class="info-card phone">
					<label>PHONE</label>
					<img src="{{ asset('img/icon-phone.png') }}">
					<p id="phone" class="font-number">(0341) 502514</p>
				</div>
				<div class="info-card">
					<label>ADDRESS</label>
					<img src="{{ asset('img/icon-location.png') }}">
					<p id="address"></p>
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
	var business_id = {!! json_encode($business_id) !!};
	var business_name = {!! json_encode($business_name) !!};
	var id_resort = resort.id;
	var nama_resort = resort.name;
	var location_name = resort.location.name;
	var description = (resort.description != null) ? `<p>${resort.description}</p>` : `<span>Tidak ada deskripsi</span>`;
	var media = resort.media;
	var tipe_kamar = resort.availability;
	var harga_sewa = resort.price.service_price;
		harga_sewa = accounting.formatMoney(
					harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

	$('.slides').empty();

	$.each(media, function(index, image) {
		const image_path = image.path;

		var $img_slide = 
			'<div class="slide">' +
				'<img src="' + image_path + '">' +
			'</div>';

		$('.slides').append($img_slide);
	})
	

	$('.location-name').text(location_name);

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

	if (business_id == '1') {
		var nama_layanan = 'Book Satu Resort';
	} else if (business_id == '2') {
		var nama_layanan = 'Book Satu Camping Area';
	} else if (business_id == '3') {
		var nama_layanan = 'Satu Paket Outbound';
	}

	var $kamar = 
		'<div class="card animation active">' +
			'<div>' +
				'<b>' + nama_layanan + '</b>' +
				'<span class="font-currency">' + harga_sewa + ' / malam</span>' +
				'<h1>AVAILABLE</h1>' +
			'</div>' +
		'</div>';

	$('.card-container').append($kamar);

	console.log(tipe_kamar);

	$.each(tipe_kamar, function(index, kamar) {
		var id_kamar = kamar.id;
		var nama_kamar = kamar.name;
		var sisa_kamar = kamar.count_availability;
		var description = kamar.description;
		var max_out = kamar.max_out;
		var wide = kamar.wide;
		var media = kamar.media;
		var harga = kamar.price.service_price;
			harga = accounting.formatMoney(
					harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		$.each(media, function(index, image) {
			const image_path = image.path;

			var $img_slide = 
				'<div class="slide">' +
					'<img src="' + image_path + '">' +
				'</div>';

			$('.slides').append($img_slide);
		})	

		if (business_id == '1' || business_id == '3') {
			(description != null) ? description = '<p class="sub-desc">' + description + '</p>' : description = '';
			var info_kamar = '<p>SISA<br>KAMAR</p>' +
							'<b>' + sisa_kamar + '</b>';
		}
		if (business_id == '2') {
			description = '<p class="sub-desc">' + 'Luas Wilayah : ' + wide + 'm<sup>2</sup>' + '</p>';
			var info_kamar = '<p class="font-number">MAX ' + max_out + ' ORG</p>';
		}

		var $kamar = 
				'<div class="card">' +
					'<div>' +
						'<b>' + nama_kamar + '</b>' +
						'<span class="font-currency">' + harga + ' / malam</span>' +
						description + 
						'<div class="info-kamar">' +
							info_kamar +
						'</div>' +
					'</div>' +
				'</div>';

		$('.card-container').append($kamar);

	})

	var $_backgrounds = $('.slides .slide');
	
	if ($_backgrounds.length > 1) {
		var $_first_background = $_backgrounds.first();
		var $_last_background = $_backgrounds.last();
		var $_first_background_clone = $_first_background.clone().removeClass('active');
		var el_length = $_backgrounds.length;

		$_first_background.addClass('active');
		$_last_background.after($_first_background_clone);

		setInterval(slideNext, 5000);	
	}
	

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

	function slideNext() {
		var $_active_background = $('.slide.active');
    	var index = $_active_background.index('.slide');
    	var $_target_background = $_active_background.next();

    	console.log($_target_background.attr('id'));

    	var offset = '-' + $_target_background.position().left + 'px';

    	$('.slides').animate({left: offset});

    	$_active_background.removeClass('active');
    	$_target_background.addClass('active');

    	if (index == (el_length-1)) {
    		// alert('oke');
    		setTimeout(function() {
    			$('.slides').css('left', '0px');
				$_target_background.removeClass('active');
				$('.slide').first().addClass('active');
    		}, 500);
    	}
	}
</script>
@endsection