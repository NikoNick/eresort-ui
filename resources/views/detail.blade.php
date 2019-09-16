<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
		}

		.background {
			/*background: url('../img/thumbnail-2.jpg');*/
			width: 100%;
			height: 100vh;
			/*background-size: 130%;*/
			overflow: hidden;
			display: flex;
			flex-direction: column;
			/*animation: idle infinite 15s;*/
		}

		@keyframes idle {
			0% {
				background-position-x: -50px;
				background-position-y: -50px;
			}
			33% {
				background-position-x: 0px;
				background-position-y: 0px;
			}
			66% {
				background-position-x: -50px;
				background-position-y: 0px;	
			}
			100% {
				background-position-x: -50px;
				background-position-y: -50px;
			}
		}

		.background.free-roam .title {
			margin-top: 450px;
		}

		.background.free-roam .content, .background.free-roam .navbar .logo button {
			opacity: 0;
		}

		.background.free-roam .btn-slider {
			display: block;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 70px 100px;
			align-items: center;
			flex-shrink: 0;
			flex-grow: 0;
			position: relative;
		}

		.navbar .logo {
			flex-grow: 1;
		}

		.navbar .logo button {
			border: 1px solid #fff;
		    background: #00000047;
		    color: #fff;
		    font-weight: 700;
		    letter-spacing: 2px;
		    font-size: 1.2em;
		    padding: 12px 20px;
		}

		.navbar .special {
			flex-grow: 1;
			text-align: right;
		}

		.navbar .special button {
			padding: 12px 25px;
			font-weight: 600;
			letter-spacing: 2px;
			border-radius: 10px;
		}

		.navbar .special .btn-warning i {
			margin-right: 10px;
		}

		.navbar .special .btn-icon {
			background: #fff;
		    padding: 12px 15px;
		    margin-left: 15px;
		}

		.title {
			z-index: 5;
			flex-grow: 1;
			padding: 00px 100px;
			margin-top: 250px;
			position: relative;
		}

		.title .rating i {
			font-size: 2.3em;
		    margin-right: 10px;
		    color: #ff9b00;
		    text-shadow: 2px 2px 10px #000;
		}

		.title h1 {
		    font-family: Raleway;
		    color: #fff;
		    letter-spacing: 5px;
		    font-size: 4em;
		    font-weight: 700;
		    text-shadow: 2px 2px 10px #000;
		}

		.content {
			flex-grow: 0;
			transition-delay: 1000ms;
			position: relative;
			z-index: 5;
		}

		.content .nav {
			text-align: right;
		}

		.nav.inline>li {
	        display: inline-block;
		    font-size: 1.1em;
		    font-family: Raleway;
		    font-weight: 700;
		    padding: 15px 20px;
		    color: #fff;
		    letter-spacing: 4px;
		    cursor: pointer;
		}

		.nav.inline>li.active {
			background: #000000bd;
		}

		.content .desc {
			background: #000000bd;	
		    padding: 50px 100px;
		    color: #fff;
		    font-size: 1.3em;
		    height: 250px;
		    display: flex;
		    align-items: row;
		    align-items: center;
		}

		.content .desc .inner-content {
			display: none;
			letter-spacing: 1px;
			opacity: 0;
			transition: all 0.6s;
			transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
		}

		.content .desc .inner-content.active {
			opacity: 1;
		}

		.content .desc .inner-content.flex {
			display: flex;
		}

		#tentang b.basic-info {
			font-weight: 500;
			letter-spacing: 3px;
		}

		#tentang b.basic-info span {
			margin-right: 20px;
		}

		#tentang p {
			font-weight: 300;
		    margin-top: 20px;
		    text-align: justify;
		    line-height: 30px;
		}

		#tentang .harga {
			text-align: right;
			padding: 0px 0px 0px 200px;
		}

		#tentang .harga h1 {
			white-space: nowrap;
		    margin-top: 0px;
		    font-size: 3em;
		    color: #ff9b00;
		    letter-spacing: 5px;
		    font-weight: 300;
		    font-family: Raleway;
		}

		#tentang .harga span {
			margin-left: 10px;
		}

		#tentang .harga .flex {
			display: flex;
			align-items: center;
		}

		#tentang .harga .flex b {
			flex-grow: 1;
			height: 1px;
			background: #ff9b00;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }

        .facility {
        	text-align: center;
        	padding: 0px 20px;
        	border: 1px solid #fff;
        	border-radius: 10px;
        	height: 110px;
        	min-width: 110px;
        	margin-right: 15px;
        }

        .komentar {
        	margin-right: 30px;
        	overflow: hidden;
        	padding: 20px 25px;
        	border: 1px solid #fff;
        	text-align: justify;
        	border-radius: 10px;
        	max-width: 700px;
        	display: flex;
        }

        .komentar .profil {
        	margin-right: 20px;
        }

        .komentar .comment p {
        	margin-top: 10px;
        	font-size: 0.9em;
        	font-style: italic;
        	position: relative;
        }

        .komentar .comment p i {
    	    font-size: 10em;
		    position: absolute;
		    bottom: -70px;
		    right: -30px;
		    color: #ffffff36;
        }

        .komentar img {
        	width: 50px;
        	height: 50px;
        	border-radius: 10px;
        }

        .komentar h1 {
        	font-family: Raleway;
		    font-weight: 100;
		    position: relative;
		    text-align: center;
		    font-size: 1.em;
		    margin-bottom: 0px;
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
		
		<div class="navbar">
			<div class="logo">
				<button class="btn animation"><a href="/hasil">< Kembali</a></button>
			</div>
			<div class="special">
				<button class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> BOOKING</button>
				<button id="btn-free" class="btn btn-icon"><i class="fas fa-check"></i></button>
			</div>
		</div>
		<div class="title animation">
			<div class="rating">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
			</div>
			<h1>Mabely Grand Hotel</h1>
		</div>
		<div class="content animation">
			<ul class="nav inline">
				<li for="tentang" class="active">TENTANG</li>
				<li for="fasilitas">FASILITAS</li>
				<li for="review">REVIEW</li>
			</ul>
			<div class="desc">
				<div id="tentang" class="inner-content active flex">
					<div>
						<b class="basic-info"><span><i class="fas fa-map-marker"></i> Jl. Overste Isdiman Gg.II / 5A, Purwokerto</span> <span>|</span> <i class="fas fa-phone"></i> 0857-0160-9034</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor aliquam felis, sit amet tempus nibh ullamcorper nec. Maecenas suscipit dolor at blandit congue. Sed adipiscing, odio feugiat pellentesque tincidunt, est leo vestibulum erat, ac pharetra massa justo ac lorem.</p>
					</div>
					<div class="harga">
						<h1>Rp 355.000</h1>
						<div class="flex">
							<b></b>
							<span>malam</span>	
						</div>
						
					</div>
				</div>
				<div id="fasilitas" class="inner-content">
					<div class="facility">
						<h1><i class="fas fa-check"></i></h1>
						<p>Wi-Fi</p>
					</div>
					<div class="facility">
						<h1><i class="fas fa-trash"></i></h1>
						<p>TV</p>
					</div>
					<div class="facility">
						<h1><i class="fas fa-times"></i></h1>
						<p>Kolam Renang</p>
					</div>
					<div class="facility">
						<h1><i class="fas fa-home"></i></h1>
						<p>Gazebo</p>
					</div>
					<div class="facility">
						<h1><i class="fas fa-mars"></i></h1>
						<p>AC</p>
					</div>
					<ul>
						<li>Halaman Luas</li>
						<li>Pemandangan Hutan Pinus yang Segar dan Asri</li>
						<li>Udara Sejuk</li>
					</ul>
				</div>
				<div id="review" class="inner-content">
					<div class="komentar">
						<div class="profil">
							<img src="{{ asset('img/jones.jpg') }}">
							<h1>4.5</h1>
						</div>
						<div class="comment">
							<b>Niko Prianto</b>
							<p>The view from our balcony in room # 409, was terrific. It was centrally located to everything on and around the port area. Wonderful service and everything. <i class="fab fa-angrycreative"></i></p>	
						</div>
						
					</div>
					<div class="komentar">
						<div class="profil">
							<img src="{{ asset('img/jones.jpg') }}">
							<h1>5.0</h1>
						</div>
						<div class="comment">
							<b>Shafa Rizky F</b>
							<p>The view from our balcony in room # 409, was terrific. It was centrally located to everything on and around the port area <i class="fab fa-angrycreative"></i></p>	
						</div>
						
					</div>
					<div class="komentar">
						<div class="profil">
							<img src="{{ asset('img/jones.jpg') }}">
							<h1>4.0</h1>
						</div>
						<div class="comment">
							<b>Mega Nurul Hidayah</b>
							<p>The view from our balcony in room # 409, was terrific. It was centrally located to everything <i class="fab fa-angrycreative"></i></p>	
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
</body>
<script type="text/javascript">
	$('.nav.inline li').on('click', function() {
		var active_tab = $('.nav.inline li.active');
		var active_content = $('.content .desc .inner-content.active');
		var target_tab = $(this);
		var target_content = $('#' + target_tab.attr('for'));

		active_tab.removeClass('active');
		target_tab.addClass('active');
		active_content.removeClass('active');
		setTimeout(function() {
			active_content.removeClass('flex');
		}, 200);
		setTimeout(function() {
			target_content.addClass('flex');
		}, 400);
		setTimeout(function() {
			target_content.addClass('active');
		}, 600);
	})

	$('#btn-free').on('click', function() {
		var state = $('.background').hasClass('free-roam');

		if (state) {
			$('.background').removeClass('free-roam');
		} else {
			$('.background').addClass('free-roam');
		}
	})

	$('.slide-left').on('click', function() {
		$('.carousel-control.left').click();
	})
	$('.slide-right').on('click', function() {
		$('.carousel-control.right').click();
	})
</script>
</html>