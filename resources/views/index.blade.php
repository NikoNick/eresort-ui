@extends('layouts/app')

@section('additional-class', 'text-white transparent')

@section('css-bottom')
	<style type="text/css">
		body {
			height: 100vh;
			overflow: hidden;
		}

		.background {
			padding: 3% 7%;
			padding-top: 8%;
			padding-bottom: 10%;
			background-size: 100% 100%;
		}

		.slides {
			position: relative;
		}

		.navbar {
			box-shadow: none;
			padding: 3% 7%;
		}

		.navbar .logo h1 {
			font-size: 1.2em;
		}

		.navbar .special {
			display: none;
		}

		.navbar .nav {
			text-align: right;
		}

		.navbar .nav>li {
			font-size: 0.8em;
			font-weight: 500;
			letter-spacing: 4px;
		}

		.navbar .nav>li:last-child {
			margin-right: 0px;
		}

		.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: -5px;
		    left: -15px;
		    width: 90%;
		    border-radius: 50px;
		    height: calc(100% + 10px);
		    background: #fff;
		    opacity: 0.4;
		}

		.nav>li:last-child>a {
			padding-right: 0px;
		}

		.content {
			display: flex;
			flex-direction: column;
		}

		.content .coba {
			padding-left: 50%;
			text-align: right;
			display: flex;
			flex-grow: 1;
			flex-direction: column;
		}

		.content .coba h1, .content .coba p {
			text-align: right;
		}

		.content .coba h1 {
		    margin-top: 30%;
		    margin-bottom: 5%;
		    font-size: 2.5em;
		}

		.content .coba h1 i {
		    font-weight: 200;
		}

		.content .coba p {
			font-size: 0.75em;
		    letter-spacing: 2px;
    		line-height: 300%;
			color: #fff;
			flex-grow: 1;
		}

		.content .coba .v-line {
			display: none;
			flex-grow: 1;
		    margin: 25px 0px;
		    width: 0px;
		    background-image: linear-gradient(white 33%, rgba(255,255,255,0) 0%);
		    background-position: right;
		    background-size: 1px 25px;
		}

		.content .coba button, .form button {
		    background: transparent;
		    color: #fff;
		    border: 2px solid #fff;
		    border-radius: 50px;
		    letter-spacing: 2px;
		    font-size: 0.65em;
		    font-style: italic;
		    padding: 8px 15px;
		    font-weight: 600;
		    /*margin-top: 50px;*/
		}

		.form button:not([type="submit"]) {
		    color: #000;
		    font-style: normal;
		    /*display: none;*/
		}

		.form button[type="submit"] {
		    background: #ff4086;
    		font-weight: 800;
			/*box-shadow: 0px 3px 0px 0px #de3271;*/
			color: #fff;
			border: none;
		}

		.form {
			position: absolute;
			top: 0;
			width: 0%;
			height: 100vh;
			right: 0;
			background: #fff;
			padding: 0px;
			box-sizing: border-box;
		}

		.form.show {
			width: 32%;
			padding: 60px;
			padding-top: 50px;
		}

		.md-form {
			position: relative;
			margin-top: 5rem;
		}

		.md-form label {
			position: absolute;
			top: 0;
			color: #b5b5b5;
			font-size: 1em;
			font-weight: 600;
			letter-spacing: 2px;
			transition: all 0.2s;
			transform-origin: 0% 100%;
		}

		.md-form label.active {
		    transform: translateY(-1.8rem) scale(0.8);
    		font-size: 0.8em;
		}

		.md-form input, .md-form select {
			border: none;
			box-shadow: none;
			font-size: 0.9em;
			color: #000;
			font-style: italic;
			letter-spacing: 2px;
			height: auto;
			padding: 1.2rem 0 !important;
			border-radius: 0;
			border-bottom: 1px solid #dcdcdc;
			transition: all 0.2s;
			transform-origin: 0% 100%;
		}

		.md-form>input:focus, .md-form>select:focus {
			outline: none;
			box-shadow: none;
		    border-bottom: 1px solid #4285f4;
		    -webkit-box-shadow: 0 1px 0 0 #4285f4;
		    box-shadow: 0 1px 0 0 #4285f4;
		}

		.md-form>input:focus+label, .md-form>select:focus+label {
			transform: translateY(-1.8rem) scale(0.8);
			color: #4285f4;
		}

		.form h1 {
			font-family: Raleway;
			letter-spacing: 0.15em;
			font-size: 2.5em;
		}
		.form h1 i {
			font-weight: 200;
		}

		.head {
			font-size: 0.7em;
			margin-bottom: 80px;
		}

		.line {
		    flex-grow: 1;
		    height: 2px;
		    margin-right: 15px;
		    margin-left: 20px;
		    border-top: 1px solid #00000052;
		}

		.sub-text {
		    margin-bottom: 0px;
		    letter-spacing: 2px;
		    font-style: italic;
		}

		.btn-wrapper {
			text-align: right;
		}

		.btn-wrapper button {
			margin-top: 50px;
		}

		.md-form .md-input-wrapper {
			display: flex;
			align-items: center;
			border-bottom: 1px solid #dcdcdc;
			transition: all 0.2s;
			transform-origin: 0% 100%;
			position: relative;
		}

		.md-input-wrapper.alert {
			border-bottom-color: red;
			border-radius: 0px;
		}

		.md-input-wrapper.alert .text-alert {
			display: block !important;
		}

		.md-form .md-input-wrapper input, .md-form .md-input-wrapper .date-wrapper {
			flex-grow: 1;
			border: 0;
			background: transparent;
		}

		.md-form .md-input-wrapper input[type="number"] {
			flex-grow: 0;
			width: 10%;
			background: transparent;
		}

		.md-form .md-input-wrapper .date-wrapper {
			flex-grow: 1;
			position: relative;
		}

		.md-form .md-input-wrapper .date-wrapper .date-string {
			font-size: 0.9em;
			font-weight: 400;
			color: #000;
			font-style: italic;
			letter-spacing: 2px;
			padding: 1.2rem 0 !important;
			position: absolute;
		}

		.md-form .md-input-wrapper .date-wrapper input {
			opacity: 0;
		}

		.md-form .md-input-wrapper:focus-within {
			border-bottom: 1px solid #4285f4;
		    -webkit-box-shadow: 0 1px 0 0 #4285f4;
		    box-shadow: 0 1px 0 0 #4285f4;
		}

		.md-form .md-input-wrapper:focus-within input {
			outline: none;
			box-shadow: none;
		}

		.md-form .md-input-wrapper:focus-within+label {
			transform: translateY(-1.8rem) scale(0.8);
			color: #4285f4;
		}

		.md-form .md-input-wrapper .separator {
			margin: 0 20px;
			font-style: italic;
			letter-spacing: 1px;
			font-weight: 600;
			color: #b5b5b5;
			font-size: 0.8em;
		}

		.md-form .md-input-wrapper span {
			font-style: italic;
			letter-spacing: 1px;
			font-weight: 300;
			font-size: 0.9em;
			color: #000;
		}

		.bullet-point {
			width: 8px;
			height: 8px;
			background: #fff;
			border-radius: 50%;
			margin: 10px 0px;
			cursor: pointer;
		}

		.navigator {
			display: flex;
		    align-items: center;
		    flex-direction: column;
		    font-size: 0.7em;
		    position: fixed;
		    z-index: 2;
		    left: 7%;
		    bottom: 15%;
		    color: #fff;
		    cursor: pointer;
		}

		.navigator label {
		    writing-mode: vertical-lr;
		    transform: rotate(180deg);
		    color: #fff;
		    letter-spacing: 3px;
		    font-style: italic;
		    font-size: 1.2em;
		    font-weight: 600;
		    margin: 20px 0px;
		    /*margin-bottom: 15px;*/
		}

		.navigator i {
			font-size: 2em;
		}

		.mobile-navigator {
			display: none;
			position: absolute;
		    z-index: 5;
		    top: 85%;
    		font-size: 1.5em;
    		width: 100%;
    		color: #fff;
		}
		.mobile-navigator #prev {
			padding-left: 20px;
			position: absolute;
			top: 0px;
			left: 0px;
		}
		.mobile-navigator #next {
			position: absolute;
			right: 0px;
			top: 0px;
			padding-right: 20px;
		}

		@media screen and (max-width: 600px) {
			.background {
				background-size: cover;
				background-position-x: 35%;
			}

			.content {
				display: flex;
				padding-bottom: 10%;
			}
			.content .coba {
				width: 100%;
				padding: 0px 12%;
				text-align: center;
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			.content .coba h1 {
    		    font-size: 1.6em;
			    text-align: center;
			    margin-top: 80%;
			    margin-bottom: 10%;
			    letter-spacing: 4px;
			    word-spacing: 0px;
			}
			.content .coba p {
		        font-weight: 300;
			    font-size: 0.7em;
			    letter-spacing: 1px;
			    flex-grow: 0;
			    /*line-height: 28px;*/
			    text-align: justify;
			    text-align: center;
			}
			.content .coba p span {
			    display: none;
			}
			.content .coba .v-line {
				display: block;
			}
			.content .coba button {
				padding: 12px;
				margin-top: 20px;
			}
			.content .coba button i {
				font-size: 1.5em;
			}
			.content .coba button span {
				display: none;
			}

			.form {
				font-size: 0.9em;
			}
			.form.show {
				padding: 50px 50px 80px;
				width: 100%;
			}
			.form button:not([type="submit"]) {
				display: inline-block;
			}
			.form h1 {
				font-size: 2.2em;
			}
			.form .sub-text {
				font-size: 0.8em;
			}

			.form .head, .form label, .form button {
				font-size: 1em !important;
			}

			.form input, .form select, .form span {
				font-size: 1.2em !important;
			}

			.navigator {
				display: none;
			}

			.mobile-navigator {
				display: block;
			}

			.background {
				display: flex;
				opacity: 0;
			}

			.background.active {
				opacity: 1;
			}

			#ui-datepicker-div {
				top: 25% !important;
    			left: 0px !important;
    			width: 100% !important;
			}

			.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
				width: auto;
			}
		}

		.ui-datepicker table {
			font-size: .7em;
			border-spacing: 5px;
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			width: 40px;
		}

		.text-alert {
			color: red;
			font-style: italic;
			font-size: 0.8em;
			letter-spacing: 0.5px;
			position: absolute;
			bottom: -30px;
			right: 0px;
			display: none;
		}
	</style>
@endsection

@section('body')
	@component('components/navbar')
		@slot('special')
			<button class="btn"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
		@endslot
	@endcomponent
	<div class="loading-screen animation anim-blink disappear gone">
		<div class="loading-wrapper">
			<div class="loader"></div>
			<p class="loading-text">Loading</p>
		</div>
	</div>
	<div class="mobile-navigator">
		<div id="prev" class="mobile-navigation"><i class="lnr lnr-chevron-left"></i></div>
		<div id="next" class="mobile-navigation"><i class="lnr lnr-chevron-right"></i></div>
	</div>
	<div class="navigator">
		<!-- <i id="btn-prev" class="lnr lnr-chevron-up"></i> -->
		<label>Resort</label>
		<i id="btn-next" class="lnr lnr-chevron-down"></i>
		<!-- <div id="point-0" for="0" class="bullet-point"></div>
		<div id="point-1" for="1" class="bullet-point"></div>
		<div id="point-2" for="2" class="bullet-point"></div> -->
	</div>
	<div class="slides">
	<div id="content-0" prev="2" next="1" class="background active animation" style="background-image: url('../img/index3.jpg');">
		<!-- <div class="bg-image">
			<img src="{{ asset('../img/index3.jpg') }}">
		</div> -->
		<div class="content">
			<div id="camping" class="coba">
				<h1><b>Palawi</b> <i>Resort</i></h1>
				<p class="animation anim-blink">Sebuah resort yang berada di kawasan pegunungan. Udara yang sejuk dan kadar oksigen yang sangat baik. Cocok untuk acara meeting dan istirhat bersama keluarga atau kolega Anda.</p>
				<div class="v-line"></div>
				<div>
					<button for="form-resort" class="btn btn-form"><i class="lnr lnr-magnifier"></i> <span>BOOKING</span></button>	
				</div>
			</div>
		</div>
		<form id="form-resort" method="GET" action="/hasil" class="form animation">
			<div class="head animation anim-blink disappear gone">
				<h1><b>Palawi</b> <i>Resort</i></h1>
				<div class="flex">
					<span class="flex-grow-1 line"></span>
					<p class="sub-text">BOOKING HOTEL, RESORT & VILLA</p>
				</div>	
			</div>
			<div class="animation anim-blink disappear gone">
				<div class="md-form">
					<select name="location" class="fillable form-control">
						<option value="0" selected>Semua Lokasi</option>
						@foreach($location as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<div class="date-wrapper">
							<span id="start-resort" class="date-string">10 Desember 2019</span>
							<input type="text" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
						</div>
						<span class="separator">sampai</span>		
						<div class="date-wrapper">
							<span id="end-resort" class="date-string">11 Desember 2019</span>
							<input type="text" class="form-control date" name="end_date" spellcheck="false" value="11 Desember 2019" placeholder="Check-Out">
						</div>
						<p class="text-alert">* Tanggal akhir booking harus lebih besar</p>
					</div>
					<label for="form1" class="active">TANGGAL</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<input type="number" class="form-control" name="person" spellcheck="false" value="1" min="1">
						<span>Orang</span>
					</div>
					
					<label for="form1" class="active">KAPASITAS</label>
				</div>	
			</div>
			<div class="btn-wrapper animation anim-blink disappear gone">
				<button type="button" class="btn btn-cancel">BATAL</button>
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
	</div>
	<div id="content-1" prev="0" next="2" class="background animation" style="background-image: url('../img/index4.jpg');">
		<div class="content">
			<div id="camping" class="coba">
				<h1><b>Palawi</b> <i>Camping</i></h1>
				<p class="animation anim-blink">Sebuah lokasi yang berada di kawasan pegunungan. Udara yang sejuk dan kadar oksigen yang sangat baik. Sangat pas untuk kegiatan camping keluarga atau pelajar.</p>
				<div class="v-line"></div>
				<div>
					<button for="form-camping" class="btn btn-form"><i class="lnr lnr-magnifier"></i> <span>BOOKING</span></button>	
				</div>
			</div>
		</div>
		<form id="form-camping" method="GET" action="/hasil-camping" class="form animation">
			<div class="head animation anim-blink disappear gone">
				<h1><b>Palawi</b> <i>Camping</i></h1>
				<div class="flex">
					<span class="flex-grow-1 line"></span>
					<p class="sub-text">CARI CAMPING AREA</p>
				</div>	
			</div>
			<div class="animation anim-blink disappear gone">
				<div class="md-form">
					<select name="location" class="fillable form-control">
						<option value="0" selected>Semua Lokasi</option>
						@foreach($location as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper alert">
						<div class="date-wrapper">
							<span id="start-camping" class="date-string">10 Desember 2019</span>
							<input type="text" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
						</div>
						<span class="separator">sampai</span>		
						<div class="date-wrapper">
							<span id="end-camping" class="date-string">11 Desember 2019</span>
							<input type="text" class="form-control date" name="end_date" spellcheck="false" value="11 Desember 2019" placeholder="Check-Out">
						</div>
						<p class="text-alert">* Tanggal akhir booking harus lebih besar</p>
					</div>
					<label for="form1" class="active">TANGGAL</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<input type="number" id="form1" class="form-control" name="person" spellcheck="false" value="1" min="1">
						<span>Orang</span>
					</div>
					
					<label for="form1" class="active">KAPASITAS</label>
				</div>	
			</div>
			<div class="btn-wrapper animation anim-blink disappear gone">
				<button type="button" class="btn btn-cancel">BATAL</button>
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
	</div>
	<div id="content-2" prev="1" next="0" class="background animation" style="background-image: url('../img/index5.jpg');">
		<div class="content">
			<div id="camping" class="coba">
				<h1><b>Palawi</b> <i>Outbound</i></h1>
				<p class="animation anim-blink">Sebuah lokasi yang berada di kawasan pegunungan. Udara yang sejuk dan kadar oksigen yang sangat baik. Kegiatan outbound menjadi lebih menyenangkan</p>
				<div class="v-line"></div>
				<div>
					<button for="form-outbound" class="btn btn-form"><i class="lnr lnr-magnifier"></i> <span>BOOKING</span></button>	
				</div>
			</div>
		</div>
		<form id="form-outbound" method="GET" action="/hasil-outbound" class="form animation">
			<div class="head animation anim-blink disappear gone">
				<h1><b>Palawi</b> <i>Outbound</i></h1>
				<div class="flex">
					<span class="flex-grow-1 line"></span>
					<p class="sub-text">PAKET OUTBOUND SERU</p>
				</div>	
			</div>
			<div class="animation anim-blink disappear gone">
				<div class="md-form">
					<select name="location" class="fillable form-control">
						<option value="0" selected>Semua Lokasi</option>
						@foreach($location as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<div class="date-wrapper">
							<span id="start-outbound" class="date-string">10 Desember 2019</span>
							<input type="text" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Tanggal">	
						</div>
						<span class="separator">Pukul.</span>		
						<input type="text" class="form-control" name="waktu" spellcheck="false" value="09:00" placeholder="Waktu">
						
					</div>
					<label for="form1" class="active">TANGGAL & WAKTU</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<input type="number" id="form1" class="form-control" name="person" spellcheck="false" value="1" min="1">
						<span>Orang</span>
					</div>
					
					<label for="form1" class="active">KAPASITAS</label>
				</div>	
			</div>
			<div class="btn-wrapper animation anim-blink disappear gone">
				<button type="button" class="btn btn-cancel">BATAL</button>
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
	</div>
	</div>
@endsection

@section('js-bottom')
	<script type="text/javascript">
		showLoader('');

		$(window).load(function() {
			hideLoader();
		})

		var $_backgrounds = $('.background');
    	var $_first_background = $_backgrounds.first();
    	var $_last_background = $_backgrounds.last();
    	var $_first_background_clone = $_first_background.clone().removeClass('active');
    	var el_length = $_backgrounds.length;

    	$_last_background.after($_first_background_clone);

    	$('.navigator').on('click', slideOn);
		// slideOn();

		var today = new Date();
			today = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
		var tomorrow = new Date();
			tomorrow.setDate(tomorrow.getDate()+1)
			tomorrow = tomorrow.getFullYear() + '-' + ('0' + (tomorrow.getMonth() + 1)).slice(-2) + '-' + ('0' + tomorrow.getDate()).slice(-2);

		var business = {!! $business !!};
		console.log(business);

		$.each(business, function(index, availability) {
			var id = availability.id - 1;
			var is_selling = availability.is_public_selling;

			if (is_selling != '1') {
				$('.bullet-point#point-' + id).hide();
				$('.background#content-' + id).addClass('disabled');
			}
		})

		$('input.date').datepicker({ 
			dateFormat: 'yy-mm-dd',
			minDate: 0
		});

		$('input[name="start_date"]').on('change', function() {
			var start_date = $(this).val();
			var end_date = $(this).closest('.md-input-wrapper').find('input[name="end_date"]').val();

			var day_diff = dateDiffInDays(start_date, end_date);

			if (day_diff <= 0) {
				$(this).closest('.form').find('button[type="submit"]').attr('disabled', true);
				$(this).closest('.md-input-wrapper').addClass('alert');
			} else {
				$(this).closest('.form').find('button[type="submit"]').attr('disabled', false);
				$(this).closest('.md-input-wrapper').removeClass('alert');
			}
		})

		$('input[name="end_date"]').on('change', function() {
			var start_date = $(this).closest('.md-input-wrapper').find('input[name="start_date"]').val();
			var end_date = $(this).val();

			var day_diff = dateDiffInDays(start_date, end_date);

			if (day_diff <= 0) {
				$(this).closest('.form').find('button[type="submit"]').attr('disabled', true);
				$(this).closest('.md-input-wrapper').addClass('alert');
			} else {
				$(this).closest('.form').find('button[type="submit"]').attr('disabled', false);
				$(this).closest('.md-input-wrapper').removeClass('alert');
			}
		})

		$('.bullet-point').on('click', function() {
			var index = $(this).attr('for');
			var margin = parseInt(index) * 100;
			var $_active = $('.background.active');
			var interval = 0;

			$('.background').removeClass('gone');

			if ($_active.find('.form').hasClass('show')) {
				interval = 800;
			}

			setTimeout(function() {
				$_active.removeClass('active');
				$('.background#content-' + index).addClass('active');
				$('.background').first().css('margin-top', '-' + margin + 'vh');	
			}, interval);

			setTimeout(function() {
				$('.background:not(.active)').addClass('gone');
			}, 1400);
			
		})

		$('.mobile-navigation').on('click', function() {
			var trigger = $(this).attr('id');

			var $_active = $('.background.active');
			var index_target = $_active.attr(trigger);

			// alert(index_target);

			var $_backgrounds = $('.background:not(.disabled)');

			switch(trigger) {
				case 'next' :
					var $_target = $_active.next(':not(.disabled)');

					if ($_target.length === 0) {
						$_target = $('.background:not(.disabled)').first();
					}

					console.log($_target);
					break;
				case 'prev' :
					var $_target = $_active.prev(':not(.disabled)');

					if ($_target.length === 0) {
						$_target = $('.background:not(.disabled)').last();
					}

					console.log($_target);
					break;
				default :
					break;
			}

			// console.log($_backgrounds);

			$_active.removeClass('active');
			setTimeout(function() {
				$_active.addClass('gone');
				$_target.removeClass('gone');
			}, 100);
			
			setTimeout(function() {
				$_target.addClass('active');	
			}, 200);
		})

		$('.date-string').on('click', function() {
			$(this).closest('input').click();
		})

		$('input.date').on('change', function() {
			const value = $(this).val();
			const value_string = dateToString(value, 'short');

			console.log($(this).prev().attr('id'));

			$(this).prev().text(value_string);
		})

		$('input[name="start_date"]').val(today).change();
		$('input[name="end_date"]').val(tomorrow).change();

		$('.md-form').on('click', function() {
			$(this).find('input:first-child').focus();
		})

		$('.btn-form').on('click', function(e) {
			var $_form = $(this).closest('.background').find('form');
				$_form.addClass('show');
				$_form.find('.animation').removeClass('gone');

			setTimeout(function() {
				$_form.find('.animation').removeClass('disappear');	
			}, 500);

			$('.nav').addClass('disappear');
			$(this).closest('.background').find('.coba>p').addClass('disappear');
		})

		$('input').on('change', function() {
			if($(this).val() != '') {
				$(this).next().addClass('active');
			} else {
				$(this).next().removeClass('active');
			}
		})

		$('.btn-cancel').on('click', closeForm);

		// $(document).click(function(e) {
		//     const $_form = $('.form.show');
		//     const $_trigger = $('.btn-form');

		//     // if the target of the click isn't the container nor a descendant of the container
		//     if (!$_trigger.is(e.target) && $_trigger.has(e.target).length === 0 && !$_form.is(e.target) && $_form.has(e.target).length === 0) 
		//     {
		//     	closeForm();
		//     }
		// });

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

	    function dateToString(date, mode) {
	        var day = date.split('-')[2];
	        var month = date.split('-')[1];
	        var year = date.split('-')[0];
	        var newDate = day + ' ' + ((mode == 'long') ? monthString(month) : monthString(month).slice(0,3)) + ' ' + year;

	        return newDate;
	    }

	    function closeForm() {
	    	const $_form = $('.form.show');

	    	$_form.find('.animation').addClass('disappear');

	        setTimeout(function() {
				$_form.find('.animation').addClass('gone');		        	
				$_form.closest('.background').find('.coba>p').removeClass('disappear');
	        	$('.nav').removeClass('disappear');
				$_form.removeClass('show');
	        }, 400);
	    }

	    function slideOn() {
	    	var $_active_background = $('.background.active');
	    	var index = $_active_background.index('.background');
	    	var $_target_background = $_active_background.next();

	    	var offset = '-' + $_target_background.position().top + 'px';

	    	$('.slides').animate({top: offset});

	    	$_active_background.removeClass('active');
	    	$_target_background.addClass('active');

	    	if (index == (el_length-1)) {
	    		// alert('oke');
	    		setTimeout(function() {
	    			$('.slides').css('top', '0px');
					$_target_background.removeClass('active');
					$('.background').first().addClass('active');
	    		}, 500);
	    	}
	    }

	    function showLoader(message) {
	    	$('.loading-text').text(message);
	    	$('.loading-screen').removeClass('gone');
	    	setTimeout(function() {
	    		$('.loading-screen').removeClass('disappear');	
	    	}, 200);
	    }

	    function hideLoader() {
	    	$('.loading-screen').addClass('disappear');	
	    	setTimeout(function() {
	    		$('.loading-screen').addClass('gone');	
	    	}, 500);	
	    }

	    function dateDiffInDays(start, end) {
	    	var new_start = new Date(start);
	    	var new_end = new Date(end);

	    	var diff = new Date(new_end - new_start);
	    	var day_diff = diff/1000/60/60/24;

	    	return Math.round(day_diff);
	    }
	</script>
@endsection