@extends('layouts/app')

@section('additional-class', 'text-white transparent')

@section('css-bottom')
	<style type="text/css">
		.background {
			padding: 3% 7%;
			padding-top: 8%;
			padding-bottom: 5%;
		}

		.background .bg-image:before {
			opacity: 0;
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
			font-size: 0.85em;
			font-weight: 300;
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

		.content .coba {
			padding-left: 50%;
			text-align: right;
		}

		.content .coba h1, .content .coba p {
			text-align: right;
		}

		.content .coba h1 {
		    margin-top: 210px;
		    margin-bottom: 50px;
		    font-size: 3.2em;
		}

		.content .coba h1 i {
		    font-weight: 200;
		}

		.content .coba p {
			font-size: 1.1em;
		    letter-spacing: 2px;
    		line-height: 45px;
			color: #fff;
		}

		.content .coba button, .form button {
		    background: transparent;
		    color: #fff;
		    border: 2px solid #fff;
		    border-radius: 50px;
		    letter-spacing: 2px;
		    font-size: 0.85em;
		    font-style: italic;
		    padding: 10px 20px;
		    font-weight: 600;
		    margin-top: 50px;
		}

		.form button {
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
			padding: 80px;
		}

		.md-form {
			position: relative;
			margin-top: 5.5rem;
		}

		.md-form label {
			position: absolute;
			top: 0;
			color: #b5b5b5;
			font-size: 1.2em;
			font-weight: 600;
			letter-spacing: 2px;
			transition: all 0.2s;
			transform-origin: 0% 100%;
		}

		.md-form label.active {
		    transform: translateY(-1.8rem) scale(0.8);
    		font-size: 1em;
		}

		.md-form input, .md-form select {
			border: none;
			box-shadow: none;
			font-size: 1.2em;
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
		}
		.form h1 i {
			font-weight: 200;
		}

		.head {
			margin-bottom: 80px;
		}

		.line {
		    flex-grow: 1;
		    height: 2px;
		    margin-right: 15px;
		    margin-left: 50px;
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
			margin-top: 100px;
		}

		.md-form .md-input-wrapper {
			display: flex;
			align-items: center;
			border-bottom: 1px solid #dcdcdc;
			transition: all 0.2s;
			transform-origin: 0% 100%;
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
			font-size: 1.2em;
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
			font-size: 1em;
		}

		.md-form .md-input-wrapper span {
			font-style: italic;
			letter-spacing: 1px;
			font-weight: 300;
			font-size: 1.2em;
			color: #000;
		}

	</style>
@endsection

@section('body')
	@component('components/navbar')
		@slot('special')
			<button class="btn"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
		@endslot
	@endcomponent
	<div class="background">
		
		<div class="bg-image">
			<img src="{{ asset('../img/index3.jpg') }}">
		</div>
		<!-- <div class="search-nav">
			<ul class="nav inline">
				<li class="active"><a href="#tab-1">RESORT</a></li><li><a href="#tab-2">CAMPING</a></li><li><a href="#tab-3">OUTBOND</a></li>
			</ul>
		</div> -->
		<div class="content">
			<!-- <div id="tab-1" class="tab">
				<h1>Liburan Nyaman dengan Palawi</h1>
				<form method="GET" action="/hasil">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="field-row">
						<div class="input-wrapper">
							<b>LOKASI</b>
							<select name="location" class="fillable">
								<option value="0" selected>Semua Lokasi</option>
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
				<form method="GET" action="/hasil-outbound">
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
							<input type="text" class="fillable" name="waktu" placeholder="">
						</div>
					</div>
				</form>
			</div> -->
			<div id="camping" class="coba">
				<h1><b>Palawi</b> <i>Camping</i></h1>
				
				<p class="animation anim-blink">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor aliquam felis, sit amet tempus nibh ullamcorper nec. Maecenas suscipit dolor at blandit congue. Sed adipiscing, odio feugiat pellentesque tincidunt</p>	
				<!-- <div>
					<div class="md-form">
						<input type="text" id="form1" class="form-control" spellcheck="false">
						<label for="form1">PILIH LOKASI</label>
					</div>
					<div class="md-form">
						<input type="text" id="form1" class="form-control" spellcheck="false">
						<label for="form1">TANGGAL</label>
					</div>
					<div class="md-form">
						<input type="text" id="form1" class="form-control" spellcheck="false">
						<label for="form1">KAPASITAS</label>
					</div>
				</div> -->
				<button for="form-camping" class="btn btn-form">SEE MORE</button>
			</div>

		</div>
		<form method="GET" action="/hasil" class="form animation">
			<div class="head animation anim-blink disappear gone">
				<h1><b>Palawi</b> <i>Resort</i></h1>
				<div class="flex">
					<span class="flex-grow-1 line"></span>
					<p class="sub-text">CARI PENGINAPAN</p>
				</div>	
			</div>
			<div class="animation anim-blink disappear gone">
				<div class="md-form">
					<select name="location" class="fillable form-control">
						<option value="0" selected>Semua Lokasi</option>
						@foreach($result as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<div class="date-wrapper">
							<span class="date-string">10 Desember 2019</span>
							<input type="text" id="form1" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
						</div>
						<span class="separator">sampai</span>		
						<div class="date-wrapper">
							<span class="date-string">11 Desember 2019</span>
							<input type="text" id="form2" class="form-control date" name="end_date" spellcheck="false" value="11 Desember 2019" placeholder="Check-Out">
						</div>
						
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
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
		<form method="GET" action="/hasil-camping" class="form animation">
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
						@foreach($result as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<div class="date-wrapper">
							<span class="date-string">10 Desember 2019</span>
							<input type="text" id="form1" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
						</div>
						<span class="separator">sampai</span>		
						<div class="date-wrapper">
							<span class="date-string">11 Desember 2019</span>
							<input type="text" id="form2" class="form-control date" name="end_date" spellcheck="false" value="11 Desember 2019" placeholder="Check-Out">
						</div>
						
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
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
		<form method="GET" action="/hasil-outbound" class="form animation">
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
						@foreach($result as $lokasi)
							<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
						@endforeach
					</select>
					<label for="form1" class="active">PILIH LOKASI</label>
				</div>
				<div class="md-form">
					<div class="md-input-wrapper">
						<div class="date-wrapper">
							<span class="date-string">10 Desember 2019</span>
							<input type="text" id="form1" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Tanggal">	
						</div>
						<span class="separator">Pukul.</span>		
						<div class="date-wrapper">
							<span class="date-string">09:00</span>
							<input type="text" id="form2" class="form-control date" name="end_date" spellcheck="false" value="09:00" placeholder="Waktu">
						</div>
						
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
				<button type="submit" class="btn">BOOKING</button>
			</div>
		</form>
		<!-- <div class="footer">
			<p><italic>COPYRIGHT</italic> PT. PALAWI RESORT BATURRADEN</p>
		</div> -->
	</div>
@endsection

@section('js-bottom')
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

		$('.date-string').on('click', function() {
			$(this).closest('input').click();
		})

		$('input.date').on('change', function() {
			const value = $(this).val();
			const value_string = dateToString(value, 'short');

			$(this).prev().text(value_string);
		})

		$('input[name="start_date"]').val(today).change();
		$('input[name="end_date"]').val(tomorrow).change();

		$('.md-form').on('click', function() {
			$(this).find('input:first-child').focus();
		})

		$('.btn-form').on('click', function(e) {
			$('.form').addClass('show');
			$('.form').find('.animation').removeClass('gone');

			setTimeout(function() {
				$('.form').find('.animation').removeClass('disappear');	
			}, 500);

			$('.nav').addClass('disappear');
			$('.coba>p').addClass('disappear');
		})

		$('input').on('change', function() {
			if($(this).val() != '') {
				$(this).next().addClass('active');
			} else {
				$(this).next().removeClass('active');
			}
		})

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
	</script>
@endsection