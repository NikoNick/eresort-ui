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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
		}

		.font-number {
			font-family: Consolas;
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
			/*overflow: hidden;*/
			display: flex;
			flex-direction: column;
		}

		.form-title {
			padding: 50px 0px;
			/*padding-bottom: 0;*/
		}

		.form-title h1 {
			margin-top: 0;
			font-size: 2.3em;
		}

		.form-title p {
			font-size: 1.1em;
			letter-spacing: 3px;
		}

		.form-reservasi {
			padding: 0px 120px;
			padding-top: 180px;
			padding-bottom: 120px;
			height: auto;
			/*min-height: 100vh;*/
		}

		.form-reservasi>.wrapper {
			display: flex;
			flex-direction: column;
		}

		.background h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		}

		.background .form-reservasi .form span {
			font-size: 2.8em;
		    line-height: 100px;
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

		.flex-grow-1 {
			flex-grow: 1;
		}

		.flex.end {
			align-items: flex-end;
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

		.order {
			display: flex;
			align-items: center;
			/*border: 1px solid #dcdcdc;*/
		}

		.order>div {
			padding: 25px;
		}

		#step-2 .orders .order .nama {
			color: #b5b5b5;
			text-transform: uppercase;
			font-size: 1em;
		}

		#step-2 .orders .order.selected .nama {
			color: #000;
		}

		#step-2 .orders .order.selected .nama {
			color: #000;
		}		

		.order .left div, .order .right div {
		    margin: 0px 20px;
		    font-size: 1.1em;
		    letter-spacing: 2px;
		    /*margin-right: 20px;*/
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

		.input-field:has(span) {
			border: 1px solid red !important;
		}

		.order-steps {
			background: #fff;
			padding: 80px 120px 50px;
			position: fixed;
			width: 100%;
			z-index: 1;
		}

		.order-steps .step {
			flex-grow: 1;
			margin-right: 4px;
			font-size: 0.9em;
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
			/*font-weight: bold;*/
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
		    font-size: 1.2em;
    		letter-spacing: 2px;
		}

		.nav-button a {
		    font-weight: 700;
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

		/*#step-2 .form-title, #step-3 .form-title {
			padding-top: 0;
		}*/

		#step-3 {
			padding: 180px 250px 100px 250px;
		}

		#step-3 .nav-button {
			margin-top: 50px;
		}

		#step-3 .orders {
			display: flex;
			/*flex-flow: wrap;*/
			flex-direction: column;
			max-height: 400px;
			border: 0;
		}

		#step-3 .orders .order {
			margin: 10px;
			border: 1px solid #ddd;
			/*border-top: 0px;*/
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

		#step-2, #step-6 {
		    padding: 220px 250px 120px 250px;
		}

		#step-6 .reservation-desc {
			margin-right: 70px;
		    padding-right: 70px;
		    border-right: 1px solid #dcdcdc;
		    max-width: 500px;
		    /*display: flex;*/
		}

		#step-6 .reservation-desc .thumbnail {
			width: 90px;
			height: 90px;
			background-image: url('../img/thumbnail-5.jpg');
			background-size: cover;
			margin-right: 30px;
			margin-bottom: 0px !important;
		}

		#step-6 .reservation-desc h2 {
			margin-top: 0;
		    font-family: Raleway;
		    letter-spacing: 5px;
		}

		#step-6 .reservation-desc p {
		    font-size: 1.2em;
    		letter-spacing: 3px;
		}

		#step-6 .reservation-desc .rating i {
			font-size: 1.8em;
		    margin-right: 10px;
		    color: #ff9b00;
		    text-shadow: none;
		}

		#step-6 .reservation-desc .hotel-desc .desc {
			flex-grow: 1;
			padding: 20px 0px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		    border-bottom: 1px solid #a9a9a9;
		}

		#step-6 .reservation-desc .hotel-desc .desc label {
			margin-right: 5px;
		}

		#step-6 .reservation-desc .hotel-desc {
			padding: 30px 0px;
		}

		#step-6 .order .left div, #step-6 .order .right div {
		    margin: 0px;
		    font-size: 1em;
		    letter-spacing: 2px;
		    margin-right: 20px;
		}

		#step-6 .order .left div p, #step-6 .order .right div p {
		    margin: 0px;
		}

		#step-6 .order .left {
		    /*border: 1px solid #b5b5b5;*/
		    border-radius: 5px;
		    padding: 15px 0px;
		    margin-right: 30px;
		    flex-grow: 1;
		}

		#step-6 .order .left label {
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

		#step-6 .order .left .nama {
			flex-grow: 1;
			margin-left: 30px;
		}

		/*.order .qty p {
			padding: 10px 20px;
			border: 1px solid #0000005c;
			border-radius: 5px;
		}*/

		#step-6 .order.total {
			padding: 30px 0px;
			margin-top: 20px;
		}

		#step-6 .order.total .val-grand-total {
			font-size: 2em;
			font-family: Calibri Light;
			font-weight: bold;
			margin-top: 10px;
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
                margin-bottom: 0px;
                margin-right: 20px;
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

        #step-2 .left {
        	margin-right: 80px;
        }

        #step-2 .left img {
        	border-radius: 10px;
        }

        #step-2 .left div {
        	margin-top: 70px;
        }

        #step-2 .left p {
        	writing-mode: vertical-lr;
        	transform: rotate(180deg);
        	letter-spacing: 2px;
        	font-size: 0.9em;
        	text-align: right;
        	line-height: 25px;
        }

        #step-2 .right {
        	/*width: 300px;*/
        	/*border: 3px solid #f9f9f9;*/
        	margin-left: 70px;
        }

        .main-info>span {
        	letter-spacing: 2px;
        }

        .main-info p {
    	    font-size: 2em;
    		letter-spacing: 4px;
        }

        .main-info p>b, .main-info p>b>span {
        	position: relative;
        }

        .main-info p>b:before {
    	    content: '';
    	    position: absolute;
    	    width: 100%;
    	    height: 12px;
    	    background: #0fffbe;
    	    top: 20px;
    	    left: -5px;
        }

        .main-info p>sup {
    	    font-size: 0.5em;
    		top: -1em;
        }

        .info {
        	letter-spacing: 1px;
        	margin-left: 80px;
        }

        .info span b {
        	font-weight: 800;
        }

        .info p {
    	    font-size: 1.2em;
    		letter-spacing: 1px;
        }

        .orders {
        	border: 1px solid #c9c9c9;
        	margin-top: 40px;
        }

        .order {
        	letter-spacing: 2px;
        	padding: 0px 15px;
        }

        .orders .order {
        	border-top: 1px solid #c9c9c9;
        	cursor: pointer;
        }

        #step-2 .orders .order:hover, #step-3 .orders .order:hover {
        	background: #f5f5f5;
        }

        #step-2 .orders .order:active, #step-3 .orders .order:active {
        	background: #dcdcdc;
        }

        .order:first-child {
        	border: none;
        }

        .order.header {
        	border: none;
        	border-top: 3px solid #f9f9f9;
        	font-size: 0.9em;
        	color: #b5b5b5;
        	margin-top: 40px;
        }

        .order.header>div {
        	padding: 20px 25px;
        }

        .order.header .name {
        	font-weight: 400;
        }

        .order.header .line {
        	border-color: #fff;
        }

        .order .index {
        	width: 3%;
        	text-align: center;
        }

        .order .index i {
        	display: none;
        	color: #00d69c;
        }

        .order.selected .index span {
        	display: none;
        }

        .order.selected .index i {
        	display: block;
        }

        .order .name {
        	flex-grow: 1;
        	align-items: center;
        	text-transform: uppercase;
        	font-weight: 700;
        }

        .order .price {
        	width: 25%;
        }

        .order .total-price {
         	width: 15%;
        }

        .order .unit {
        	width: 10%;
        }

        .order .line {
        	width: 25px;
        	height: 2px;
        	border-top: 1px solid #000;
        	margin: 0px 15px;
        }

        .order .unit input {
        	width: 50%;
        	outline: none;
        }

        #step-1, #step-4 {
        	z-index: 2;
        }

        .payment-method {
        	padding: 30px 0px;
        	margin-bottom: 10px;
        }

        .payment-method .name {
        	font-size: 1.5em;
        	font-weight: 700;
        	letter-spacing: 4px;
        }
	</style>
</head>
<body>
	<div class="background">
		<div class="order-steps flex">
			<div id="trigger-1" class="step">
				<div class="bar"></div>
				<p>1. RESERVASI</p>
			</div>
			<div id="trigger-3" class="step">
				<div class="bar"></div>
				<p>2. EXTRA ORDER</p>
			</div>
			<div id="trigger-4" class="step">
				<div class="bar"></div>
				<p>3. IDENTITAS DIRI</p>
			</div>
			<div id="trigger-5" class="step">
				<div class="bar"></div>
				<p>4. PEMBAYARAN</p>
			</div>
			<div id="trigger-6" class="step">
				<div class="bar"></div>
				<p>5. CHECK OUT</p>
			</div>
		</div>
		
		<div id="step-1" class="form-reservasi gone" condition="must-filled">
			<div class="wrapper">
				<div class="form-title">
					<h1 class="anim-slide-left-right animation disappear">Apa Yang Anda Butuhkan ?</h1>
				</div>
				<div class="form anim-slide-right-left animation disappear">
					<div class="bg"></div>
					<span>Pesan layanan outbound </span>
					<div class="input-field">
						<span class="input-field-toggle input-nama-resort">Mabely Grand Hotel</span>
						<ul class="list-resort animation fillable">
							<p class="header">Pilih Tempat Penginapan</p>
							<li>Mabely Grand Hotel</li>
							<li class="active">Rosenberry Villa</li>
							<li>Verdenara Villa</li>
							<li>Ocika Villa</li>
						</ul>
					</div>
					<span> untuk tanggal </span>
					<div class="input-field tanggal">
						<span class="input-field-toggle">22 September 2019</span>
						<div class="date-field">
							<input type="text" class="date fillable" name="start_date" value="{{ $start_date }}">
						</div>
					</div>
					<span> pukul </span>
					<div class="input-field tanggal">
						<span class="input-field-toggle">{{ $waktu }}</span>
						<div class="text-field-wrapper animation">
							<div class="text-field">
								<p>Waktu Pelaksanaan</p>
								<input type="text" name="waktu" placeholder="10:00" class="input fillable" value="{{ $waktu }}">
								<button>
									<i class="fas fa-check"></i>
								</button>
							</div>
						</div>
					</div>
					<input type="hidden" name="business_id">
				</div>	
				<div class="nav-button animation anim-slide-down-up disappear">
					<span><a for="1" next="3" class="form-nav form-next">Lanjutkan</a></span>
				</div>
			</div>
			
		</div>

		<!-- <div id="step-2" class="form-reservasi gone" condition="min-1">
			<div class="wrapper">
				<div>
					<div class="flex end">
						<div class="main-info flex-grow-1">
							<span>Menginap di</span>
							<p><b><span class="val-nama-item">Rasamala</span></b> <sup class="val-nama-business">Resort</sup></p>
						</div>
						<div class="info">
							<span><b>CHECK-IN</b></span>
							<p class="val-start-date font-number">31 Okt 2019</p>
						</div>
						<div class="info">
							<span><b>CHECK-OUT</b></span>
							<p class="val-end-date font-number">01 Nov 2019</p>
						</div>
						<div class="info">
							<span><b>DETAIL PESANAN</b></span>
							<p class="font-number"><span class="val-lama-inap">1</span> malam / <span class="val-jumlah-pilihan"></span> kamar</p>
						</div>
					</div>
					<div class="animation anim-slide-down-up disappear">
						<div class="orders"></div>
						<div class="order total flex">
							<div class="left flex">
							</div>
							<div class="right flex">
								<div><label>TOTAL</label></div>
								<div class="harga"><p class="grand-total">Rp 0</p></div>
							</div>
						</div>
						<div class="nav-button animation anim-slide-down-up disappear">
							<span>Saya memesan 2 Deluxe Room & 1 Executive Room, <a next="3" class="form-nav">Lanjutkan</a></span>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<div id="step-3" class="form-reservasi gone" condition="optional">
			<div class="wrapper">
				<div class="form-title animation anim-slide-left-right disappear">
					<h1>Apakah Ada Tambahan ?</h1>
					<p>Kami menyediakan fasilitas tambahan untuk kenyamanan anda</p>
				</div>
				<div class="orders">
					
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span>Tidak ada tambahan, <a next="4" class="form-nav">Lanjutkan</a></span>
				</div>
			</div>
		</div>

		<div id="step-4" class="form-reservasi gone" condition="must-filled">
			<div class="wrapper">
				<div class="form-title animation anim-scale-black disappear">
					<h1>Beritahu Kami Tentang Anda</h1>
				</div>
				<div class="form animation anim-scale-black disappear">
					<div class="bg"></div>
					<span>Nama saya </span>
					<div class="input-field">
						<span id="input-nama" class="input-field-toggle" default="Nama Lengkap Anda">Nama Lengkap Anda</span>
						<div class="text-field-wrapper animation">
							<div class="text-field">
								<p>Nama Lengkap</p>
								<input type="text" name="identitas_nama" placeholder="Nama Lengkap Anda" class="input fillable" value="">
								<button next="input-telepon">
									<i class="fas fa-check"></i>
								</button>
							</div>
						</div>
					</div>
					<span>, silahkan hubungi saya di </span>
					<div class="input-field">
						<span id="input-telepon" class="input-field-toggle" default="0000-0000-0000">0000-0000-0000</span>
						<div class="text-field-wrapper animation">
							<div class="text-field">
								<p>Telepon</p>
								<input type="text" name="identitas_telepon" placeholder="xxxx-xxxx-xxxx" class="input fillable" value="">
								<button next="input-email">
									<i class="fas fa-check"></i>
								</button>
							</div>
						</div>
					</div>
					<span> atau lewat email </span>
					<div class="input-field">
						<span id="input-email" class="input-field-toggle" default="john_doe@mail.com">john_doe@mail.com</span>
						<div class="text-field-wrapper animation">
							<div class="text-field">
								<p>Email Anda</p>
								<input type="text" name="identitas_email" placeholder="john_doe@mail.com" class="input fillable" value="">
								<button>
									<i class="fas fa-check"></i>
								</button>
							</div>
						</div>
					</div>
					<!-- <span> atau ke alamat </span>
					<div class="input-field">
						<span id="input-alamat" class="input-field-toggle allow-whitespace" default="Alamat Anda">Jl. Overste Isdiman Gg.II/5A Purwokerto</span>
						<div class="text-field-wrapper animation">
							<div class="text-field">
								<p>Alamat Anda</p>
								<textarea placeholder="Jl. Overste Isdiman Gg.II/5A, Purwokerto" class="input" value=""></textarea>
								<button next="">
									<i class="fas fa-check"></i>	
								</button>
							</div>
						</div>
					</div> -->
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span>Identitas saya sudah benar, <a next="5" class="form-nav">Lanjutkan</a></span>
				</div>
			</div>
		</div>
		<div id="step-5" class="form-reservasi gone" condition="min-1">
			<div class="wrapper">
				<div class="form-title">
					<h1 class="anim-slide-left-right animation disappear">Pilih Metode Pembayaran yang diinginkan</h1>
				</div>
				<div>
					<div class="payment-method flex-grow-1">
						<span>
							<input type="checkbox" id="checkbox-1" class="checkbox fillable" value="true">
							<label for="checkbox-1"></label>
						</span>
						<span class="name">
							FULL PAYMENT
						</span>
					</div>
					<div class="payment-method flex-grow-1">
						<span>
							<input type="checkbox" id="checkbox-2" class="checkbox fillable" value="false">
							<label for="checkbox-2"></label>
						</span>
						<span class="name">
							DP 30%
						</span>
					</div>
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span><a id="btn-submit-detail" next="6" class="form-nav">Lihat Pesanan</a></span>
				</div>	
			</div>
			
		</div>
		<div id="step-6" class="form-reservasi gone" condition="pass">
			<div class="wrapper">
				<div>
					<div class="flex end">
						<div class="main-info flex-grow-1">
							<span>Pilih program</span>
							<p><b><span class="val-nama-item">Rasamala</span></b> <sup class="val-nama-business">Outbound</sup></p>
						</div>
						<div class="info">
							<span><b>CHECK-IN</b></span>
							<p class="val-start-date font-number">31 Okt 2019</p>
						</div>
						<div class="info">
							<span><b>CHECK-OUT</b></span>
							<p class="val-end-date font-number">01 Nov 2019</p>
						</div>
						<div class="info">
							<span><b>DETAIL PESANAN</b></span>
							<p class="val-detail-pesanan font-number"><span class="val-lama-inap">1</span> malam / 2 kamar</p>
						</div>
						<div class="info">
							<span><b>TOTAL PESANAN</b></span>
							<p class="val-grand-total font-number">Rp 860.000</p>
						</div>
					</div>
					<div class="animation anim-slide-down-up disappear">
						<div class="orders"></div>
						<div class="order total flex">
							<div class="left flex">
							</div>
							<div class="right flex">
								<div><label>TOTAL</label></div>
								<div class="harga">
									<p class="val-grand-total">Rp 0</p>
								</div>
							</div>
						</div>
						<div class="nav-button animation anim-slide-down-up disappear">
							<span><button id="btn-book" class="btn">BOOK NOW</button></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var base_url = window.location.origin;
	var day_diff = 0;
	var obj_booking = {
		'name' : '',
		'email' : '',
		'phone' : '',
		'full_payment' : true,
		'location_id' : 1,
		'items' : []
	};

	$(document).ready(function() {
		showForm('1');

		var resorts 		   	= {!! $data !!}.data;
		var extra_item 			= {!! $extra_item !!};
		var config 				= {!! $config !!};
		var waktu 				= {!! json_encode($waktu) !!};
		var item_id 			= {!! json_encode($item_id) !!};
		var end_date 		   	= {!! json_encode($end_date) !!};
		var start_date 		   	= {!! json_encode($start_date) !!};
		var business_id 	   	= {!! json_encode($business_id) !!};

		$('input[name="business_id"]').val(business_id);
		
		loadExtraItem(extra_item.data[0].availability);

		$('input.date').datepicker({ 
			dateFormat: 'yy-mm-dd' ,
			minDate: 0
		});

		$('input.date').on('change', function() {
			var date = dateToString($(this).val(), 'long');
			$('.bg').hide();
			$(this).parent().parent().find('.input-field-toggle').text(date);
		})

		$('.checkbox').on('change', function() {
			$('.checkbox').prop('checked', false);

			if ($(this).is(':checked')) {
				$(this).prop('checked', false);	
			} else {
				$(this).prop('checked', true);	
			}
			
		})

		$('input[name="start_date"]').val(start_date).change();
		$('input[name="end_date"]').val(end_date).change();

		$('ul.list-resort').empty();

		$.each(resorts, function(index, resort) {
			var id_resort = resort.details[0].id;
			var nama_resort = resort.name;
			var duration_day = resort.price.duration.day;
			var duration_hour = resort.price.duration.hour;
			var duration_minute = resort.price.duration.minute;
			var price = resort.price.service_price;

			var $list = $('<li id="' + id_resort + '">' + 
							'<span>' + nama_resort + '</span>' + 
							'<input type="hidden" name="day" value="' + duration_day + '">' +
							'<input type="hidden" name="hour" value="' + duration_hour + '">' +
							'<input type="hidden" name="minute" value="' + duration_minute + '">' +
							'<input type="hidden" name="price" value="' + price + '">' +
						  '</li>');

			if (id_resort == item_id) {
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

			$('.input-field ul li.active').removeClass('active');
			$(this).addClass('active');
			$('.input-field ul.show').parent().find('.input-field-toggle').text($(this).text());	
			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
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

		$('.bg').on('click', function() {
			$('.bg').hide();

			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		})

		// $('.form-next').on('click', function() {
		// 	var start_date = $('input[name="start_date"]').val();
		// 	var end_date = $('input[name="end_date"]').val();
		// 	var id_resort = $('ul.list-resort li.active').attr('id');
		// 	var id_business = $('input[name="business_id"]').val();
		// 	var nama_resort = $('ul.list-resort li.active').text();

		// 	day_diff = Math.round(dateDiffInDays(start_date, end_date));

		// 	$.post(
		// 		base_url + '/resort/availability',
		// 		{
		// 			'_token' : '{{ csrf_token() }}',
		// 			'start_date' : start_date,
		// 			'end_date' : end_date,
		// 			'business_id' : id_business,
		// 			'id_resort' : id_resort
		// 		},
		// 		function(data) {
		// 			var resort_variant = $.parseJSON(data).availability;

		// 			$('#step-2 .orders').empty();

		// 			$.each(resort_variant, function(index, kamar) {
		// 				const item_detail = kamar.details.filter(detail => detail.is_booked === 0);
		// 				var id_kamar = item_detail[0].id;
		// 				var nama_kamar = kamar.name;
		// 				var id_harga = kamar.price.id;
		// 				var harga = kamar.price.service_price;
		// 				var harga_string = accounting.formatMoney(
		// 					harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
		// 				var sisa_kamar = kamar.count_availability;

		// 				var $kamar = 
		// 					'<div id="' + id_kamar + '" class="order flex">' +
		// 						'<div class="flex name">' +
		// 							'<span class="index"><span>' + (index + 1) + '</span><i class="fas fa-check deselect"></i></span>' +
		// 							'<span class="line"></span>' +
		// 							'<span>' + nama_kamar + '</span>' + 
		// 						'</div>' +
		// 						'<div class="availability">' + 
		// 							'<span>' + sisa_kamar + ' kamar</span>' + 
		// 						'</div>' +
		// 						'<div class="price">' + 
		// 							'<span>' + harga_string + ' / malam</span>' +
		// 							'<input id="' + id_harga + '" type="hidden" name="harga" value="' + harga + '">' +
		// 						'</div>' +
		// 						'<div class="unit">' +
		// 							'<span>x</span> <input type="number" class="input-unit fillable" value="0" min="1" disabled="true">' +
		// 						'</div>' +
		// 						'<div class="total-price">' +
		// 							'<span>Rp 0</span>' +
		// 							'<input type="hidden" name="total_harga" value="0">' +
		// 						'</div>' +
		// 					'</div>';

		// 				$('#step-2 .orders').append($kamar);
		// 			})

		// 			start_date = dateToString(start_date, 'short');
		// 			end_date = dateToString(end_date, 'short');

		// 			$('.val-nama-item').text(nama_resort);
		// 			$('.val-start-date').text(start_date);
		// 			$('.val-end-date').text(end_date);
		// 			$('.val-lama-inap').text(day_diff);

		// 			$('.order input[type="number"]').on('keyup', inputNumberListener);
		// 			$('.order input[type="number"]').on('change', inputNumberListener);
		// 			$('.order input.checkbox').on('change', checkboxListener);
		// 			$('#step-2 .order').on('click', function(e) {
		// 				var condition = $(this).hasClass('selected');
		// 				var target = $(this).find('.input-unit');

		// 				console.log(e.target);

		// 				if (condition) {
		// 					if (! target.is(e.target)) {
		// 						$(this).removeClass('selected');
		// 						$(this).find('input[type="number"]').attr('disabled', true);
		// 						$(this).find('input[type="number"]').val(0).change();
		// 					}
		// 				} else {
		// 					$(this).addClass('selected');
		// 					$(this).find('input[type="number"]').val(1).change();
		// 					$(this).find('input[type="number"]').attr('disabled', false);
		// 					$(this).find('input[type="number"]').focus();
		// 				}
		// 			})
		// 		}
		// 	)
		// })
		
		$('.form-nav').on('click', function() {
			var key = $(this).attr('next');
			
			showForm(key);
		})

		$('#btn-submit-detail').on('click', function() {
			var id_item = $('.list-resort').find('li.active').attr('id');
			var nama_resort = $('.list-resort').find('li.active span').text();
			var check_in = $('input[name="start_date"]').val();
			var duration_day = $('.list-resort').find('li.active input[name="day"]').val();
			var duration_hour = $('.list-resort').find('li.active input[name="hour"]').val();
			var duration_minute = $('.list-resort').find('li.active input[name="minute"]').val();
			// var how_many_nights = Math.round(dateDiffInDays(check_in, check_out));
			var nama_pemesan = $('input[name="identitas_nama"]').val();
			var telepon = $('input[name="identitas_telepon"]').val();
			var email = $('input[name="identitas_email"]').val();
			var harga = $('.list-resort').find('li.active input[name="price"]').val();

			if ($('#step-5 input.checkbox:checked').val() == 'true') {
				var payment_method = true;
			} else {
				var payment_method = false;
			}

			var start_time = moment(check_in + 'T' + waktu + ':00').add(7, 'hours').format('YYYY-MM-DD HH:mm:SS');
			var end_time = moment(check_in + 'T' + waktu + ':00').add(parseInt(duration_day), 'days').add(parseInt(duration_hour), 'hours').add(parseInt(duration_minute), 'minutes').format('YYYY-MM-DD HH:mm:SS');

			obj_booking.name = nama_pemesan;
			obj_booking.phone = telepon;
			obj_booking.email = email;
			obj_booking.full_payment = payment_method;

			$('#step-6').find('.orders').empty();

			var total_per_malam = parseInt(harga);
			var current_index = 0;
			var array_item = [];

			// $('#step-2 .orders').find('.order.selected').each(function(index) {
			// 	var $order = $(this).clone();
			// 		$order.removeClass('selected');
			// 		$order.find('.availability').remove();

			// 	var unit = $order.find('.unit').find('input[type="number"]').val();
			// 		$order.find('.unit').find('input').remove();
			// 		$order.find('.unit').find('span').text('x ' + unit);

			// 	current_index = index + 1;

			// 	console.log('Loop' + index + ':' + current_index);

			// 		$order.find('.index span').text(current_index);

			// 	var id_kamar = $order.attr('id');
			// 	var id_harga = $order.find('input[name="harga"]');

			// 	var total_harga = $order.find('input[name="total_harga"]').val();

			// 	total_per_malam += parseInt(total_harga);
				

			// 	var obj_kamar = {
			// 		'item_detail_id' : id_kamar,
			// 		// 'price_id' : id_harga,
			// 		'person' : 1,
			// 		'start_time' : start_time,
			// 		'end_time' : end_time
			// 	};

			// 	array_item.push(obj_kamar);

			// 	$('#step-6').find('.orders').append($order);
			// })

			var obj_kamar = {
				'item_detail_id' : id_item,
				// 'price_id' : id_harga,
				'person' : 1,
				'start_time' : start_time,
				'end_time' : end_time
			};

			array_item.push(obj_kamar);

			$('#step-3 .orders').find('.order.selected').each(function(index) {
				var $order = $(this).clone();
					$order.removeClass('selected');
					$order.find('.index span').text(current_index + (index + 1));

				var unit = $order.find('.unit').find('input[type="number"]').val();
					$order.find('.unit').find('input').remove();
					$order.find('.unit').find('span').text('x ' + unit);

				var id_kamar = $order.attr('id');
				var id_harga = $order.find('input[name="harga"]');

				var total_harga = $order.find('input[name="total_harga"]').val();

				total_per_malam += parseInt(total_harga);

				var obj_kamar = {
					'item_detail_id' : id_kamar,
					// 'price_id' : id_harga,
					'person' : 1,
					'start_time' : start_time,
					'end_time' : end_time
				};

				array_item.push(obj_kamar);

				$('#step-6').find('.orders').append($order);
			})

			obj_booking.items = array_item;

			grand_total = total_per_malam;

			total_per_malam = accounting.formatMoney(
						total_per_malam, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
			grand_total = accounting.formatMoney(
						grand_total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			$('#step-6').find('.val-nama-item').text(nama_resort);
			$('#step-6').find('.total-per-malam').text(total_per_malam);
			$('#step-6').find('.val-grand-total').text(grand_total);
		})

		$('#btn-book').on('click', function() {
			$.ajax({
				url: 'http://api.resort.shafarizkyf.com/api/booking',
				method: 'POST',
				data: JSON.stringify(obj_booking),
				headers: {
					'Accept': 'application/json',
					'Content-Type': 'application/json'
				}
			}).then(response => {
				alert('Booking Berhasil');
				window.location = base_url + "/book-detail";
				// console.log(obj_booking);
			}).fail(error => {
				console.log(error)
				console.log(error.response)
			})
		})
	})

	function showForm(key) {
		var $step_trigger = $('#trigger-' + key);
		var $step_target = $('.form-reservasi#step-' + key);
		var $active_step = $('.form-reservasi.active');

		var array_field = $active_step.find('.fillable');
		var condition = $active_step.attr('condition');
		var count_filled = 0;

		$.each(array_field, function(index, field) {
			if ($(field).is('ul')) {
				var value = $(field).find('li.active').attr('id');
			} else if ($(field).is('input[type="checkbox"]')) {
				var value = $(field).prop('checked');
			} else {
				var value = $(field).val();
			}

			if (value != '' && value != false && value != 0) {
				count_filled = count_filled + 1;	
			}
		})

		switch (condition) {
			case 'must-filled' :
				var condition = (array_field.length == count_filled);
				break;
			case 'min-1' :
				var condition = (count_filled >= 1);
				break;
			case 'optional' :
				var condition = (count_filled >= 0);
				break;
			default :
				var condition = (true);
				break;
		}

		if (condition) {
			$step_trigger.addClass('active');
			$step_trigger.prev().addClass('finished');

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
		} else {
			alert('Lengkapi Dulu Form-nya');	
		}
	}

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

	function hideInput() {
		
	}

	function loadExtraItem(extra_item) {
		$('#step-3 .orders').empty();

		console.log(extra_item);

		$.each(extra_item, function(index, item) {
			const nama_item = item.name;
			const id_item = item.details.filter(detail => detail.is_booked === 0)[0].id;
			const id_harga = item.price.id;
			const harga = item.price.service_price;
			const harga_string = accounting.formatMoney(
						harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			var $extra_item = 
				'<div id="' + id_item + '" class="order flex">' +
					'<div class="flex name">' +
						'<span class="index"><span>' + (index + 1) + '</span><i class="fas fa-check deselect"></i></span>' +
						'<span class="line"></span>' +
						'<span>' + nama_item + '</span>' + 
					'</div>' +
					'<div class="price">' + 
						'<span>' + harga_string + ' / pcs</span>' +
						'<input type="hidden" name="harga" value="' + harga + '">' +
					'</div>' +
					'<div class="unit">' +
						'<span>x</span> <input type="number" class="input-unit fillable" value="0" min="1" disabled="true">' +
					'</div>' +
					'<div class="total-price">' +
						'<span>Rp 0</span>' +
						'<input id="' + id_harga + '" type="hidden" name="total_harga" value="0">' +
					'</div>' +
				'</div>';

			$('#step-3 .orders').append($extra_item);
		})

		$('.order input[type="number"]').on('keyup', inputNumberListener);
		$('.order input[type="number"]').on('change', inputNumberListener);
		$('.order input.checkbox').on('change', checkboxListener);
		$('#step-3 .order').on('click', function(e) {
			var condition = $(this).hasClass('selected');
			var target = $(this).find('.input-unit');

			console.log(condition);

			if (condition) {
				if (! target.is(e.target)) {
					$(this).removeClass('selected');
					$(this).find('input[type="number"]').attr('disabled', true);
					$(this).find('input[type="number"]').val(0).change();
				}
			} else {
				$(this).addClass('selected');
				$(this).find('input[type="number"]').val(1).change();
				$(this).find('input[type="number"]').attr('disabled', false);
				$(this).find('input[type="number"]').focus();
			}
		})
	}

	function checkboxListener() {
		var value = $(this).prop('checked');

		if (value == true) {
			$(this).closest('.order').addClass('selected');
			$(this).closest('.order').find('input[type="number"]').val(1);
			$(this).closest('.order').find('input[type="number"]').attr('disabled', false);
		} else {
			$(this).closest('.order').removeClass('selected');
			$(this).closest('.order').find('input[type="number"]').attr('disabled', true);
			$(this).closest('.order').find('input[type="number"]').val(0).change();
		}
	}

	function checkboxListener2() {
		var value = $(this).prop('checked');

		if (value == true) {
			$(this).closest('.tambahan').addClass('selected');
			$(this).closest('.tambahan').find('input[type="number"]').val(1);
			$(this).closest('.tambahan').find('input[type="number"]').attr('disabled', false);
		} else {
			$(this).closest('.tambahan').removeClass('selected');
			$(this).closest('.tambahan').find('input[type="number"]').attr('disabled', true);
			$(this).closest('.tambahan').find('input[type="number"]').val(0).change();
		}
	}

	function inputNumberListener() {
		var harga = $(this).closest('.order').find('input[name="harga"]').val();
		var qty = $(this).val();

		var total_harga = qty * parseInt(harga);

		$(this).closest('.order').find('input[name="total_harga"]').val(total_harga);

			total_harga = accounting.formatMoney(
				total_harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		$(this).closest('.order').find('.total-price span').text(total_harga);

		// var orders = $(this).closest('.orders').find('.order:not(.total)').find('.harga input');

		// var grand_total = 0;
		// $.each(orders, function(index, order) {
		// 	var total = parseInt($(order).val());

		// 	grand_total = grand_total + total;
		// })

		// grand_total = accounting.formatMoney(
		// 		grand_total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

		// $(this).closest('.orders').find('.total').find('.harga p').text(grand_total);
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

    function dateToString(date, mode) {
        var day = date.split('-')[2];
        var month = date.split('-')[1];
        var year = date.split('-')[0];
        var newDate = day + ' ' + ((mode == 'long') ? monthString(month) : monthString(month).slice(0,3)) + ' ' + year;

        return newDate;
    }

    function dateDiffInDays(start, end) {
    	var new_start = new Date(start);
    	var new_end = new Date(end);

    	var diff = new Date(new_end - new_start);
    	var day_diff = diff/1000/60/60/24;

    	return Math.round(day_diff);
    }
	
</script>
</html>