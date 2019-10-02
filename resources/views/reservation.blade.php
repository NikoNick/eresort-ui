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
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
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
			display: none;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
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
			background: #fff;
			width: 100%;
			height: 100vh;
			/*background-size: 130%;*/
			overflow: hidden;
			display: flex;
			flex-direction: column;
		}

		.form-title {
			padding: 50px 0px;
			/*padding-bottom: 0;*/
		}

		.form-title h1 {
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
		}

		.background h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		}

		.background .form-reservasi .form span {
			font-size: 2.9em;
		    line-height: 80px;
		    font-weight: 300;
		    letter-spacing: 5px;
		    word-spacing: 20px;
		    /*padding-bottom: 50px;*/
		    /*border-bottom: 1px solid #dcdcdc;*/
		}

		.flex {
			display: flex;
			/*align-items: center;*/
		}

		.flex.center {
			align-items: center;
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

		#step-2 .orders .order .nama {
			color: #b5b5b5;
		}

		#step-2 .orders .order.selected .nama {
			color: #000;
		}

		#step-2 .orders .order.selected .nama {
			color: #000;
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

		/*.order .left label {
			width: 25px;
			height: 25px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin: 0;
		}*/

		.order .left .nama {
			flex-grow: 1;
		}

		.order .qty p {
			padding-right: 10px;
		}

		.order .qty input {
			width: 50px;
			border: none;
			outline: none;
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

		.input-field .date-field input[type="text"] {
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

		.input-field ul li:hover, .input-field ul li.active {
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
			cursor: pointer;
		}

		.order-steps .step .bar {
			height: 3px;
			width: 100%;
			background: #dcdcdc;
			transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
            position: relative;
		}

		.order-steps .step .bar:before {
			content: '';
			position: absolute;
			width: 0%;
			height: 3px;
			background: #61cc82;
			transition: all 1s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
            transition-delay: 0.6s;
		}

		.order-steps .step.active .bar {
			background: #868686;
		}
		.order-steps .step.active p {
			color: #000;
			font-weight: bold;
		}

		.order-steps .step p {
			font-family: Calibri Light;
		    margin-top: 10px;
		    letter-spacing: 3px;
		    font-size: 1.2em;
		    color: #b5b5b5;
		}

		.order-steps .step.finished .bar:before {
			width: 100%;
		}

		.order-steps .step.finished p {
			color: #09ad3c;
			/*font-weight: bold;*/
		}

		.reservation-desc {
			margin-right: 70px;
		}

		.reservation-desc .thumbnail {
			width: 400px;
			height: 300px;
			margin-bottom: 20px;
			background-image: url('../img/thumbnail-5.jpg');
			background-size: cover;
		}

		.reservation-desc .resort-title {
		    font-family: Raleway;
		    letter-spacing: 3px;
		    border-bottom: 1px solid #dcdcdc;
		    padding: 20px 0px;
		}

		.reservation-desc .resort-desc {
		    font-size: 1.4em;
		    letter-spacing: 5px;
		    word-spacing: 2px;
		    font-family: Calibri Light;
		}

		.harga {
			min-width: 106px;
			text-align: right;
		}

		.nav-button {
		    text-align: right;
		    /*padding: 50px 120px;*/
		    margin-top: 100px;
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

		#step-2 .form-title, #step-3 .form-title {
			padding-top: 0;
		}

		#step-3 .nav-button {
			margin-top: 50px;
		}

		.form-reservasi .tambahans {
			display: flex;
			flex-flow: wrap;
			flex-direction: column;
			max-height: 400px;
		}

		.form-reservasi .tambahan {
			border: 1px solid #b5b5b5;
		    border-radius: 5px;
		    padding: 15px;
		    font-size: 1.1em;
		    letter-spacing: 2px;
		    display: flex;
		    /*margin-bottom: 20px;*/
		    margin: 10px;
		}

		.form-reservasi .tambahan label {
			width: 20px;
			height: 20px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin: 0;
		}

		.form-reservasi .tambahan>div {
			margin: 0px 20px;
		}

		.form-reservasi .tambahan>.nama {
			flex-grow: 1;
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

		#step-5 {
		    padding: 0px 200px;
		    padding-top: 30px;
		    padding-bottom: 70px;
		}

		#step-5 .reservation-desc {
			margin-right: 70px;
		    padding-right: 70px;
		    border-right: 1px solid #dcdcdc;
		    max-width: 500px;
		    /*display: flex;*/
		}

		#step-5 .reservation-desc .thumbnail {
			width: 90px;
			height: 90px;
			background-image: url('../img/thumbnail-5.jpg');
			background-size: cover;
			margin-right: 30px;
			margin-bottom: 0px !important;
		}

		#step-5 .reservation-desc h2 {
			margin-top: 0;
		    font-family: Raleway;
		    letter-spacing: 5px;
		}

		#step-5 .reservation-desc p {
		    font-size: 1.2em;
    		letter-spacing: 3px;
		}

		#step-5 .reservation-desc .rating i {
			font-size: 1.8em;
		    margin-right: 10px;
		    color: #ff9b00;
		    text-shadow: none;
		}

		#step-5 .reservation-desc .hotel-desc .desc {
			flex-grow: 1;
			padding: 20px 0px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		    border-bottom: 1px solid #a9a9a9;
		}

		#step-5 .reservation-desc .hotel-desc .desc label {
			margin-right: 5px;
		}

		#step-5 .reservation-desc .hotel-desc {
			padding: 30px 0px;
		}

		#step-5 .order .left div, #step-5 .order .right div {
		    margin: 0px;
		    font-size: 1em;
		    letter-spacing: 2px;
		    margin-right: 20px;
		}

		#step-5 .order .left div p, #step-5 .order .right div p {
		    margin: 0px;
		}

		#step-5 .order .left {
		    /*border: 1px solid #b5b5b5;*/
		    border-radius: 5px;
		    padding: 15px 0px;
		    margin-right: 30px;
		    flex-grow: 1;
		}

		#step-5 .order .left label {
			width: 25px;
			height: 25px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin: 0;
		}

		label.my-checkbox {
			width: 20px;
			height: 20px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin: 0;
		}

		#step-5 .order .left .nama {
			flex-grow: 1;
			margin-left: 30px;
		}

		/*.order .qty p {
			padding: 10px 20px;
			border: 1px solid #0000005c;
			border-radius: 5px;
		}*/

		#step-5 .order.total {
			padding: 30px 0px;
			border-top: 1px solid #dcdcdc;
			margin-top: 20px;
		}

		#step-5 .order.total .harga {
			font-size: 2em;
			font-family: Calibri Light;
			font-weight: bold;
		}

		.harga {
			min-width: 106px;
			text-align: right;
		}

		.facility {
			margin-top: 30px;
		}

		.facility span {
			padding: 5px 10px;
			border: 1px solid #a9a9a9;
			border-radius: 5px;
			letter-spacing: 1px;
			display: inline-block;
			margin-bottom: 5px;
		}

		.metode-pembayaran>b {
		    font-size: 1.2em;
    		letter-spacing: 2px;
		}

		.metode-pembayaran>.flex {
			margin-top: 20px;
		}

		.metode-pembayaran .border {
			padding: 10px 10px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			flex-grow: 1;
			margin-right: 15px;
		}

		.metode-pembayaran .border .my-checkbox {
			margin-right: 10px;
		}

		.metode-pembayaran .border b {
			letter-spacing: 2px;
		}

		.metode-pembayaran .desc {
		    font-family: Calibri Light;
		    text-align: justify;
		    margin-top: 20px;
		    line-height: 30px;
		}

		/*styling checkbox button */
            [type="checkbox"]:checked,
            [type="checkbox"]:not(:checked) {
                position: absolute;
                left: -9999px;
            }

            [type="checkbox"]:checked + label,
            [type="checkbox"]:not(:checked) + label
            {
                position: relative;
                cursor: pointer;
                display: inline-block;
                width: 20px;
                height: 20px;
                border: 1px solid #949494;
                border-radius: 5px;
            }

            [type="checkbox"]:checked + label:before,
            [type="checkbox"]:not(:checked) + label:before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                width: 20px;
                height: 20px;
            }

            [type="checkbox"]:checked + label:after,
            [type="checkbox"]:not(:checked) + label:after {
                content: '';
                width: 9px;
                height: 9px;
                background: #438fed;
                position: absolute;
                top: 4px;
                left: 5px;
                -webkit-transition: all 0.2s ease;
                transition: all 0.2s ease;
            }

            [type="checkbox"]:not(:checked) + label:after {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            [type="checkbox"]:checked + label:after {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
	</style>
</head>
<body>
	<div class="background">
		<div class="order-steps flex">
			<div for="step-1" class="step">
				<div class="bar"></div>
				<p>1. LIHAT JADWAL</p>
			</div>
			<div for="step-2" class="step">
				<div class="bar"></div>
				<p>2. RESERVASI</p>
			</div>
			<div for="step-3" class="step">
				<div class="bar"></div>
				<p>3. EXTRA ORDER</p>
			</div>
			<div for="step-4" class="step">
				<div class="bar"></div>
				<p>4. IDENTITAS DIRI</p>
			</div>
			<div for="step-5" class="step">
				<div class="bar"></div>
				<p>5. PEMBAYARAN</p>
			</div>
		</div>
		
		<div id="step-1" class="form-reservasi gone">
			<div class="form-title">
				<h1 class="anim-slide-left-right animation disappear">Apa Yang Anda Butuhkan ?</h1>
			</div>
			<div class="form anim-slide-right-left animation disappear">
				<div class="bg"></div>
				<span>Pesan kamar untuk tanggal </span>
				<div class="input-field tanggal">
					<span class="input-field-toggle">22 September 2019</span>
					<div class="date-field">
						<input type="text" class="date" name="start_date" value="{{ $start_date }}">
					</div>
				</div>
				<span> sampai</span> <br>
				<div class="input-field tanggal">
					<span class="input-field-toggle">25 September 2019</span>
					<div class="date-field">
						<input type="text" class="date" name="end_date" value="{{ $end_date }}">
					</div>
				</div>
				<span> di </span>
				<div class="input-field">
					<span class="input-field-toggle input-nama-resort">Mabely Grand Hotel</span>
					<ul class="list-resort animation">
						<p class="header">Pilih Tempat Penginapan</p>
						<li>Mabely Grand Hotel</li>
						<li class="active">Rosenberry Villa</li>
						<li>Verdenara Villa</li>
						<li>Ocika Villa</li>
					</ul>
				</div>
			</div>
			<div class="nav-button animation anim-slide-down-up disappear">
				<span>Saya ingin menghabiskan 3 malam di Rasamala Villa, <a class="form-next">Cek Jadwal !</a></span>
			</div>
		</div>

		<div id="step-2" class="form-reservasi gone">
			<div class="form-title animation anim-slide-down-up disappear">
				<h1>Silahkan Lengkapi Pesanan Anda</h1>
				<p>Anda akan menginap selama 4 malam, silahkan pilih kamar yang tersedia</p>
			</div>
			<div class="flex">
				<div class="reservation-desc">
					<div class="thumbnail animation anim-slide-down-up-scale disappear"></div>
					<h2 class="resort-title animation anim-slide-down-up disappear">Rasamala Villa</h2>
					<p class="resort-desc animation anim-slide-down-up disappear">22 Sep 2019 - 25 Sep 2019</p>
				</div>

				<div class="orders animation anim-slide-down-up disappear">
					<p>Pilihan Ruangan</p>
					<div id="list-kamar"></div>
					<div class="order total flex">
						<div class="left flex">
						</div>
						<div class="right flex">
							<div><label>TOTAL</label></div>
							<div class="harga"><p class="grand-total">Rp 0</p></div>
						</div>
					</div>
					<div class="nav-button animation anim-slide-down-up disappear">
						<span>Saya memesan 2 Deluxe Room & 1 Executive Room, <a>Lanjutkan</a></span>
					</div>
				</div>
			</div>
		</div>

		<div id="step-3" class="form-reservasi gone">
			<div class="form-title animation anim-slide-left-right disappear">
				<h1>Apakah Ada Tambahan ?</h1>
				<p>Kami menyediakan fasilitas tambahan untuk kenyamanan anda</p>
			</div>
			<div class="tambahans">
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>BANTAL</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>ROOM SERVICE</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>GULING</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>DINNER</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>GULING</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>DINNER</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>SINGLE BED</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
				<div class="tambahan animation anim-slide-down-up disappear">
					<label></label>
					<div class="nama">
						<b>GULING</b>
					</div>
					<div class="harga"> Rp 10.000/pcs</div>
				</div>
			</div>
			<div class="nav-button animation anim-slide-down-up disappear">
				<span>Tidak ada tambahan, <a>Lanjutkan</a></span>
			</div>
		</div>

		<div id="step-4" class="form-reservasi gone">
			<div class="form-title animation anim-scale-black disappear">
				<h1>Beritahu Kami Tentang Anda</h1>
			</div>
			<div class="form animation anim-scale-black disappear">
				<div class="bg"></div>
				<span>Nama saya </span>
				<div class="input-field tanggal">
					<span class="input-field-toggle" default="Nama Lengkap Anda">Nama Lengkap Anda</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Nama Lengkap</p>
							<input type="text" name="identitas_nama" placeholder="Nama Lengkap Anda">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span>silahkan hubungi saya di </span> <br>
				<div class="input-field tanggal">
					<span class="input-field-toggle" default="0000-0000-0000">0000-0000-0000</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Telepon</p>
							<input type="text" name="identitas_telepon" placeholder="xxxx-xxxx-xxxx">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span> atau lewat email </span>
				<div class="input-field tanggal">
					<span class="input-field-toggle" default="john_doe@mail.com">john_doe@mail.com</span>
					<div class="text-field-wrapper animation">
						<div class="text-field">
							<p>Email Anda</p>
							<input type="text" name="identitas_email" placeholder="john_doe@mail.com">
							<button>
								<i class="fas fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<span> atau ke alamat </span>
				<div class="input-field">
					<span class="input-field-toggle allow-whitespace" default="Alamat Anda">Jl. Overste Isdiman Gg.II/5A Purwokerto</span>
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
			<div class="nav-button animation anim-slide-down-up disappear">
				<span>Identitas saya sudah benar, <a>Lanjutkan</a></span>
			</div>
		</div>
		<div id="step-5" class="form-reservasi gone">
			<div class="animation anim-scale-black disappear flex">
				<div class="reservation-desc">
					<div class="animation anim-slide-right-left disappear delay-1">
						<div class="flex">
							<div class="thumbnail"></div>
							<div>
								<h2>Rasamala Villa</h2>
								<div class="rating">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
								</div>
							</div>
						</div>
						<div class="hotel-desc">
							<div class="flex">
								<div class="desc">
									<label>PESAN</label>
									<span>2 Kamar</span>
								</div>
								<div class="desc">
									<label>SELAMA</label>
									<span>3 malam</span>
								</div>
							</div>
							<div class="desc">
								<label>TANGGAL</label>
								<span>04 Sep 2019 - 05 Sep 2019</span>
							</div>
						</div>
						<div class="metode-pembayaran">
							<b>Pilih Metode Pembayaran</b>
							<div class="flex">
								<div class="flex border">
									<label class="my-checkbox"></label>
									<b>TRANSFER</b>
								</div>
								<div class="flex border">
									<label class="my-checkbox"></label>
									<b>CASH</b>
								</div>
							</div>
							<p class="desc">* Silahkan pilih metode pembayaran yang hendak dilakukan. Pembayaran dapat dilakukan maksimal 1 hari sebelum tanggal check-in</p>
						</div>
					</div>
				</div>
				<div class="orders animation anim-slide-left-right disappear delay-2">
					<p>Pesanan Anda</p>
					<div class="order flex center">
						<div class="left flex center">
							<label></label>
							<div class="nama">
								<b>DELUXE ROOM</b>
							</div>
							<div><p>Rp 420.000 / malam</p></div>
						</div>
						<div class="right flex center">
							<div class="qty"><p>x 2</p></div>
							<div><p>x4 malam</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex center">
						<div class="left flex center">
							<label></label>
							<div class="nama">
								<b>EXECUTIVE ROOM</b>
							</div>
							<div><p>Rp 355.000 / malam</p></div>
						</div>
						<div class="right flex center">
							<div class="qty"><p>x 2</p></div>
							<div><p>x4 malam</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex center">
						<div class="left flex center">
							<label></label>
							<div class="nama">
								<b>MEETING ROOM</b>
							</div>
							<div><p>Rp 355.000 / malam</p></div>
						</div>
						<div class="right flex center">
							<div class="qty"><p>x 2</p></div>
							<div><p>x4 malam</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex center">
						<div class="left flex center">
							<label></label>
							<div class="nama">
								<b>GULING</b>
							</div>
							<div><p>Rp 10.000 / pcs</p></div>
						</div>
						<div class="right flex center">
							<div class="qty"><p>x 2</p></div>
							<div><p>x4 malam</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order flex center">
						<div class="left flex center">
							<label></label>
							<div class="nama">
								<b>BANTAL</b>
							</div>
							<div><p>Rp 355.000 / pcs</p></div>
						</div>
						<div class="right flex center">
							<div class="qty"><p>x 2</p></div>
							<div><p>x4 malam</p></div>
							<div class="harga"><p>Rp 710.000</p></div>
						</div>
					</div>
					<div class="order total flex center">
						<div class="left flex center">
						</div>
						<div class="right flex center">
							<div><b>TOTAL</b></div>
							<div class="harga"><p>Rp 4.050.000</p></div>
						</div>
					</div>
					<div class="nav-button animation anim-slide-down-up disappear">
						<button id="btn-book" class="btn btn-warning"><a>PESAN & BAYAR</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var base_url = window.location.origin;

	$(document).ready(function() {


		var resorts = {!! $resorts !!}.data;
		var start_date = {!! json_encode($start_date) !!};
		var end_date = {!! json_encode($end_date) !!};
		var id_resort_terpilih = {!! json_encode($id_resort) !!};

		console.log(resorts);

		$('input.date').datepicker({ dateFormat: 'yy-mm-dd' });

		$('input.date').on('change', function() {
			var date = dateToString($(this).val());
			$('.bg').hide();
			$(this).parent().parent().find('.input-field-toggle').text(date);
		})

		$('input[name="start_date"]').val(start_date).change();
		$('input[name="end_date"]').val(end_date).change();

		$('ul.list-resort').empty();

		$.each(resorts, function(index, resort) {
			var id_resort = resort.id;
			var nama_resort = resort.name;

			var $list = $('<li id="' + id_resort + '">' + nama_resort + '</li>');

			if (id_resort == id_resort_terpilih) {
				$list.addClass('active');
				$('.input-nama-resort').text(nama_resort);
			}

			$('ul.list-resort').append($list);
		})

		$('.input-field-toggle').on('click', function() {
			showInput($(this));
		});
		$('.input-field.tanggal .input-field-toggle').on('click', function() {
			$(this).parent().find('.date-field input.date').focus();
		});
		

		$('.input-field ul li').on('click', function() {
			$('.bg').hide();
			$('.input-field ul.show').parent().find('.input-field-toggle').text($(this).text());	
			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		});

		$('.text-field button').on('click', function() {
			var value = $(this).prev().val();
			var default_value = $(this).parent().parent().parent().find('.input-field-toggle').attr('default');
			$('.bg').hide();

			console.log(default_value);

			if (value == '') value = default_value;
			
			$('.text-field-wrapper.show').parent().find('.input-field-toggle').text(value);	
			$('.text-field-wrapper.show').removeClass('fade');
			setTimeout(function() {
				$('.text-field-wrapper.show').removeClass('show');
			}, 500);
		});

		

		$('.bg').on('click', function() {
			$('.bg').hide();

			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		})

		$('.form-next').on('click', function() {
			var start_date = $('input[name="start_date"]').val();
			var end_date = $('input[name="end_date"]').val();
			var id_resort = $('ul.list-resort li.active').attr('id');

			$.post(
				base_url + '/resort/availability',
				{
					'_token' : '{{ csrf_token() }}',
					'start_date' : start_date,
					'end_date' : end_date,
					'id_resort' : id_resort
				},
				function(data) {
					console.log($.parseJSON(data));
					var resort_variant = $.parseJSON(data).availability;

					$('#list-kamar').empty();

					$.each(resort_variant, function(index, kamar) {
						var id_kamar = kamar.id;
						var nama_kamar = kamar.name;
						var id_harga = kamar.price.id;
						var harga = kamar.price.service_price;
						var harga_string = accounting.formatMoney(
						harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
						var sisa_kamar = kamar.count_availability;

						var $kamar = 
							'<div id="' + id_kamar + '" class="order flex">' +
								'<div class="left flex">' +
									'<span>' +
										'<input type="checkbox" id="checkbox-' + id_kamar + '" class="checkbox">' +
										'<label for="checkbox-' + id_kamar + '"></label>' +
									'</span>' +
									'<div class="nama">' +
										'<b>' + nama_kamar + '</b>' +
									'</div>' +
									'<div><p>Sisa <span class="sisa">' + sisa_kamar + '</span> kamar</p></div>' +
									'<div><p>' + harga_string + ' / malam</p><input id="' + id_harga + '" type="hidden" name="harga" value="' + harga + '"></div>' +
								'</div>' +
								'<div class="right flex">' +
									'<div class="qty flex center"><p>x</p><input type="number" value="0" min="0" disabled="true"></div>' +
									'<div class="harga"><p>Rp 0</p><input type="hidden" name="total" value="0"></div>' +
								'</div>' +
							'</div>';

						$('#list-kamar').append($kamar);
					})

					$('.order input[type="number"]').on('change', inputNumberListener);
					$('.order input.checkbox').on('change', checkboxListener);
				}
			)
		})
		

		$('.order-steps .step').on('click', function() {
			$('.order-steps .step.active').removeClass('active');

			var $step_trigger = $(this);
				$step_trigger.addClass('active');
				$step_trigger.prev().addClass('finished');

			var step_target = $(this).attr('for');
			var $step_target = $('#' + step_target);
			var $active_step = $('.form-reservasi.active');

				$active_step.find('.animation').addClass('disappear');
				setTimeout(function() {
					$active_step.addClass('gone');
					$active_step.removeClass('active');

					
					$step_target.removeClass('gone');
				}, 800);

				setTimeout(function() {
					$step_target.removeClass('disappear');
					$step_target.addClass('active');
					$step_target.find('.animation').removeClass('disappear');
				}, 1000);				
		});

		$('#btn-book').on('click', function() {
			var start_date = $('input[name="start_date"]').val();
			var end_date = $('input[name="end_date"]').val();
			var id_resort = $('ul.list-resort li.active').attr('id');
			var identitas_nama = $('input[name="identitas_nama"]').val();
			var identitas_email = $('input[name="identitas_email"]').val();
			var identitas_telepon = $('input[name="identitas_telepon"]').val();

			var obj_booking = {
				'name' : identitas_nama,
				'email' : identitas_email,
				'phone' : identitas_telepon,
				'full_payment' : false,
				'location_id' : 1,
				'items' : []
			};

			var array_kamar = [];
			$('#list-kamar').find('.order.selected').each(function() {
				var id_kamar = $(this).attr('id');
				var id_harga = $(this).find('input[name="harga"]').attr('id');

				var obj_kamar = {
					'item_detail_id' : id_kamar,
					'price_id' : id_harga,
					'person' : 1,
					'start_time' : start_date + ' 10:00:00',
					'end_time' : end_date + '11:00:00'
				};

				array_kamar.push(obj_kamar);
			})

			obj_booking.items = array_kamar;

			console.log(obj_booking);

			$.ajax({
				url: 'http://api.resort.shafarizkyf.com/api/booking',
				method: 'POST',
				data: obj_booking,
				headers: {
					'Accept': 'application/json',
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': "{{ csrf_token() }}"
				}
			}).then(response => {
				console.log(response)
			}).fail(error => {
				console.log(error)
				console.log(error.response)
			})

			// $.post(
			// 	base_url + '/booking',
			// 	{
			// 		'_token' : '{{ csrf_token() }}',
			// 		'data' : obj_booking
			// 	},
			// 	function(data) {
			// 		alert(data);
			// 	}
			// )

		})

	})

	function showInput(trigger) {
		$('.bg').show();
		trigger.parent().find('ul').addClass('show');
		trigger.parent().find('.text-field-wrapper').addClass('show');

		setTimeout(function() {
			trigger.parent().find('ul').addClass('fade');	
			trigger.parent().find('.text-field-wrapper').addClass('fade');	
		}, 100);
	}

	function hideInput() {
		
	}

	function checkboxListener() {
		var value = $(this).prop('checked');

		if (value == true) {
			$(this).closest('.order').addClass('selected');
			$(this).closest('.order').find('input[type="number"]').attr('disabled', false);
		} else {
			$(this).closest('.order').removeClass('selected');
			$(this).closest('.order').find('input[type="number"]').attr('disabled', true);
			$(this).closest('.order').find('input[type="number"]').val(0).change();
		}
	}

	function inputNumberListener() {
		var harga = $(this).closest('.order').find('input[name="harga"]').val();
		var qty = $(this).val();

		var total_harga = qty * parseInt(harga);

		$(this).closest('.order').find('.harga').find('input').val(total_harga);

			total_harga = accounting.formatMoney(
				total_harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		$(this).closest('.order').find('.harga p').text(total_harga);

		var orders = $(this).closest('.orders').find('.order:not(.total)').find('.harga input');

		var grand_total = 0;
		$.each(orders, function(index, order) {
			var total = parseInt($(order).val());

			grand_total = grand_total + total;
		})

		grand_total = accounting.formatMoney(
				grand_total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		$(this).closest('.orders').find('.total').find('.harga p').text(grand_total);
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