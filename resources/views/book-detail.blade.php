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
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		p {
			margin: 0;
		}
		
		body {
			font-family: Raleway !important;
			/*background: url('../img/thumbnail-5.jpg');*/
			background-size: 150%;
			overflow-x: hidden;
		}

		.loading-screen {
			background: #fff;
			width: 100%;
			height: 100vh;
			text-align: center;
			position: absolute;
			z-index: 2;
			/*opacity: 0;*/
		}

		.loading-wrapper {
			text-align: center;
			width: 100%;
			position: absolute;
			top: calc(50% - 60px);
		}

		.loading-text {
			margin-top: 30px;
			letter-spacing: 3px;
		}

		.loader {
			display: inline-block;
			border: 8px solid #f3f3f3; /* Light grey */
			border-top: 8px solid #3498db; /* Blue */
			border-radius: 50%;
			width: 60px;
			height: 60px;
			animation: spin 2s linear infinite;
		}

		.loader.small {
			display: inline-block;
			border: 3px solid #f3f3f3; /* Light grey */
			border-top: 3px solid #3498db; /* Blue */
			border-radius: 50%;
			width: 20px;
			height: 20px;
			position: absolute;
			top: calc(50% - 20px);
			animation: spin 2s linear infinite;
		}

		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}

		.btn-black {
			background: #000;
			color: #fff;
			padding: 10px 20px;
			letter-spacing: 2px;
			font-weight: 800;
			font-size: 0.9em;
		}

		#form-invoice {
			padding: 100px 250px;
		}

		#form-invoice h1 {
			margin-bottom: 80px;
			font-family: Raleway;
			letter-spacing: 4px;
		}

		#form-invoice p {
		    width: 300px;
		    line-height: 30px;
		    letter-spacing: 2px;
		    margin-right: 60px;
		    border-top: 1px solid;
		    padding-top: 15px;
		    font-weight: 500;
		}

		.flex {
			display: flex;
			align-items: center;
		}

		.flex.end {
			align-items: flex-end !important;
		}

		.flex.stretch {
			align-items: stretch !important;
		}

		.flex-grow-1 {
			flex-grow: 1;
		}

		.font-number {
			font-family: Calibri Light !important;
			font-size: 1.2em;
		}

		.font-currency {
			font-family: Consolas;
		}

		.text-center {
			text-align: center;
		}

		.text-right {
			text-align: right;
		}

		.header {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.header.font-number {
			letter-spacing: 6px;
		}

		.gone {
			display: none !important;
		}

		.invisible {
			opacity: 0;
		}

		.marleft-15 {
			margin-left: 15px;
		}

		.marbot-10 {
			margin-bottom: 10px;
		}
		.marbot-15 {
			margin-bottom: 15px;
		}
		.marbot-20 {
			margin-bottom: 20px;
		}
		.marbot-30 {
			margin-bottom: 30px;
		}
		.marbot-50 {
			margin-bottom: 50px;
		}

		.martop-12 {
			margin-top: 12px;
		}
		.martop-30 {
			margin-top: 30px;
		}
		.martop-50 {
			margin-top: 50px;
		}

		.bg {
		    width: 80vw;
		    height: 80vh;
		    position: absolute;
		    top: 10vh;
		    box-shadow: 0px 0px 50px 1px #b9b9b9;
		    border-radius: 50px;
		    overflow: hidden;
		    left: 10vw;
		    background: #000000d6;
		    z-index: 2;
		    padding: 0px 0px;
		    color: #fff;
		}

		.bg>div {
			height: 100%;
		}

		.bg .upload {
			padding: 100px 150px;
			height: 100%;
			background: #fff;
			color: #000;
		}

		.bg .upload .photo-container {
		    width: 250px;
			height: 250px;
			padding: 8px;
			box-shadow: 50px 20px 0px 0px #b5b5b52b, -50px 50px 0px 0px #b5b5b52b;
			border: 1px solid #b5b5b5;
			border-radius: 25px;
		}

		.bg .upload .photo-container .photo {
			width: 100%;
			height: 100%;
			border-radius: 20px;
			cursor: pointer;
			/*background: url('../img/thumbnail-5.jpg');
			background-size: cover;*/
		}

		.bg .upload .photo-detail {
		    margin-top: 100px;
    		text-align: center;
		}

		.bg .upload .photo-detail h3 {
			font-family: Raleway;
    		letter-spacing: 2px;
		}

		.bg .upload .photo-detail button {
			margin-top: 50px;
		    width: 100%;
		    letter-spacing: 3px;
		    border-radius: 0px;
		    padding: 10px;
		    box-shadow: 0px 4px 0px 0px #cac
		}

		.bg .desc {
			padding: 80px 100px;
		}

		.bg .desc>.flex {
			margin-top: 20px;
			margin-bottom: 80px;
		}

		.bg .desc>.flex p {
		    font-weight: 200;
    		font-size: 3em;
    		margin: 0;
		}

		.bg .desc h1 {
		    margin: 0;
		    font-family: Raleway;
		    letter-spacing: 2px;
		    font-weight: 600;
		}

		.bg .desc p {
		    line-height: 40px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		}

		.bg .desc .new-line {
			position: relative;
			margin-bottom: 30px;
		}

		.bg .desc .new-line .line {
			position: absolute;
			width: 50px;
			border-top: 1px solid;
			display: block;
			top: 0;
			left: -50px;
		}

		.background {
			position: relative;
			background: #fff;
			width: 100%;
			/*height: 100vh;*/
			background-size: 130%;
			/*overflow: hidden;*/
			display: flex;
			flex-direction: column;
			/*filter: blur(1px);*/
		}

		.background.show-invoice .navbar .special {
			display: block;
		}

		.background.show-invoice .navbar {
			padding: 30px 120px;
			padding-top: 50px;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 30px 250px;
			padding-top: 100px;
			align-items: center;
			position: relative;
			margin: 0;
			z-index: 1;
		}

		.navbar .logo {
			/*flex-grow: 1;*/
			margin-right: 60px;
		}

		.navbar .logo h1 {
			color: #000;
			font-size: 1.5em;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 4px;
			margin: 0;
		}

		.navbar .nav>li {
			display: inline-block;
			margin-left: 30px;
			font-size: 0.9em;
			/*font-weight: 700;*/
			color: #000;
			padding: 5px 10px;
			letter-spacing: 2px;
		}

		.navbar .nav>li.active {
			/*margin-right: 20px;*/
			position: relative;
			font-weight: 600;
			box-shadow: -10px 10px 0px 0px #fff, 
						10px -10px 0px 0px #fff, 
						1px 1px 0px 0px #000, 
						-1px -1px 0px 0px #000;
		}

		/*.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: 6px;
		    left: -20px;
		    width: 8px;
		    height: 8px;
		    background: #000;
		    border-radius: 50px;
		}

		.navbar .nav>li.active:after {
		    content: '';
		    position: absolute;
		    top: 6px;
		    right: -20px;
		    width: 8px;
		    height: 8px;
		    background: #000;
		    border-radius: 50px;
		}*/

		.navbar .special {
			flex-grow: 1;
			text-align: right;
			letter-spacing: 2px;
			display: none;
		}

		.navbar .special button {
			padding: 12px 25px;
			font-weight: 600;
			letter-spacing: 2px;
		}

		.navbar .line {
        	width: 100%;
        	height: 2px;
        	background: #dcdcdc;
        	position: absolute;
        	bottom: 0px;
        	left: 0px;
        }

        .invoice {
        	padding: 30px 120px;
        }

        .invoice .left {
        	width: 63%;
        	
        }

        .invoice .right {
        	width: 37%;
        	padding-left: 100px;
        }

        .order-info .content p {
        	border: 1px solid #a5a5a5;
        	border-left: 0;
		    font-weight: 500;
		    padding: 13px 20px;
		    letter-spacing: 3px;
        }

        .order-info .content>div>p:first-child {
        	border-left: 1px solid #a5a5a5;
        }

        .table {
        	border: 1px solid #dcdcdc;
        }

        .table>tbody>tr>td {
        	border: 0;
        	letter-spacing: 2px;
        	vertical-align: middle;
        	padding-bottom: 10px;
        }

        .table>tfoot>tr>td {
        	letter-spacing: 2px;
        	padding: 15px 30px;
        }

        .table>tbody>tr:last-child>td {
        	padding-bottom: 30px;
        }

        .table>tbody>tr>td:last-child, 
        .table>thead>tr>th:last-child,
        .table>tfoot>tr>td:last-child {
    	    border-left: 1px solid #dcdcdc;
		    padding-right: 30px;
		    text-align: right;
        }

        .table>thead>tr>th {
        	border: 0;
    	    padding: 25px 8px;
    		font-size: 0.9em;
    		letter-spacing: 1px;
        }

        .table .font-number {
        	font-size: 1.3em !important;
        }

        .payment {
        	letter-spacing: 1px;
        }

        .payment .card {
        	width: 100%;
        	/*height: 280px;*/
        	background: url('../img/thumbnail-5.jpg');
    	    background-size: 130%;
    		background-position-x: 500px;
        	position: relative;
        	border-radius: 10px;
        	padding: 25px 35px;
        	color: #fff;
        }

        .payment .card>div {
        	position: relative;
        	display: none;
        }

        .payment .card>div.active {
        	display: block;
        }

        .payment .card:before {
    	    border: 1px solid #000;
		    content: '';
		    width: 100%;
		    height: 100%;
		    background: linear-gradient(0deg, #006cff, #67a7ff);
		    position: absolute;
		    opacity: 0.9;
		    border-radius: 10px;
		    top: 0;
		    left: 0;
        }

        .payment .payment-address b {
        	font-size: 1.5em;
		    letter-spacing: 5px;
		    font-weight: 900;
        }

        .payment .payment-address .line {
    	    width: 100%;
		    height: 1px;
		    background: #fff;
		    margin: 0px 20px;
		    opacity: 0.7;
        }

        .payment .payment-address p {
    	    font-size: 1.7em;
		    letter-spacing: 3px;
        }

        .payment .nominal b {
        	letter-spacing: 2px;
        }

        .payment h1 {
    	    border: 1px solid #ffffff87;
		    margin-top: 10px;
		    padding: 15px;
		    letter-spacing: 2px;
		    font-size: 2.5em;
		    border-radius: 5px;
		    text-align: center;
        }

        .payment .nominal h3 {
		    letter-spacing: 2px;
		    margin: 0;
		    font-size: 1.3em;
        }

        .payment .footer h3 {
    	    font-size: 1.5em;
		    font-family: Consolas;
		    text-align: center;
		    letter-spacing: 2px;
        }

        .payment .info b {
        	letter-spacing: 1px;
        }

        .payment .info>div:first-child {
        	border-bottom: 1px solid #dcdcdc;
        }

        .payment .info>div {
        	padding: 10px 0px;
        }

        .payment .info #grand-total {
        	font-size: 1.8em;
        	font-weight: 700;
        }

        .field-row {
			display: flex;
		    /*margin-bottom: 30px;*/
		    align-items: stretch;
		}

		.input-wrapper {
			display: flex;
			background: #fff;
			/*border-radius: 8px;*/
			align-items: center;
			padding: 0px 25px;
			border: 1px solid #b5b5b5;
		}

		.input-wrapper b {
			white-space: nowrap;
			letter-spacing: 1px;
			font-weight: 800;
			/*padding: 0px 25px;*/
		}

		.field-row input, .field-row select {
		    padding: 20px 25px;
		    font-size: 1.1em;
    		letter-spacing: 3px;
		    font-weight: 500;
		    font-family: Raleway;
		    border: 0;
		    border-radius: 8px;
		    height: auto;
		    outline: none !important;
		    box-shadow: none;
		    width: 100%;
		    background: transparent;
		}

		.field-row input[type="number"] {
		    padding: 20px 0px;
		    width: 50px;
		}

		.field-row button {
			padding: 20px 35px;
			font-size: 1.2em;
		    font-weight: 600;
		    letter-spacing: 2px;
		    margin-left: 30px;
		    /*border-radius: 8px;*/
		}

		.warning {
			padding: 100px 120px;
		}

		.warning h1, .warning h3 {
			font-family: Raleway;
			letter-spacing: 3px;
		}

		.background-pattern {
			position: absolute;
			width: 100%;
			height: 100vh;
			z-index: 0;
		}

		.background-pattern .left {
			position: absolute;
			top: 80px;
			left: -80px;
		}

		.background-pattern .right {
			position: absolute;
			right: -80px;
			top: 80px;
			transform: rotateY(180deg);
		}

		.background-pattern .pattern #one {
			width: 320px;
			height: 33px;
			border-radius: 50px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern #two {
			width: 220px;
			height: 33px;
			border-radius: 50px;
			/*position: absolute;*/
			margin-left: 150px;
			margin-top: 25px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern #three {
			display: inline-block;
			width: 170px;
			height: 33px;
			border-radius: 50px;
			/*position: absolute;*/
			margin-left: 50px;
			margin-top: 25px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern #four {
			display: inline-block;
			width: 33px;
			height: 33px;
			border-radius: 50px;
			/*position: absolute;*/
			margin-left: 20px;
			margin-top: 25px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern.shadow {
		    position: absolute;
		    top: 40px;
		    left: -40px;
		    opacity: 0.15;
		    filter: blur(3px);
		}

		.new-invoice {
			padding: 80px 320px 150px 320px;
			position: relative;
		}

		.new-invoice>.header {
			text-align: center;
			font-size: 1em;
			margin-bottom: 100px;
		}

		.new-invoice .header h1 {
		    font-family: Raleway;
		    font-weight: 800;
		    letter-spacing: 8px;
		    font-size: 3.5em;
		}

		.new-invoice .header p {
		    color: #848484;
		}

		.main-info>span {
        	letter-spacing: 2px;
        }

        .main-info p {
    	    font-size: 2em;
    		letter-spacing: 4px;
    		margin-bottom: 0px;
        }

        .main-info p>b, .main-info p>b>span {
        	position: relative;
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
    		margin-bottom: 0;
        }

        .orders {
        	min-height: 300px;
        }

        .order {
        	letter-spacing: 2px;
        	padding: 0px;
        	display: flex;
			align-items: center;
        }

        .order.disc {
    	    color: #ff3f3f;
    		margin-top: -5px;
        }

        .order.disc>div {
        	padding-top: 0;
        }

        .order.disc .line {
        	border-color: transparent;
        }

        .order.disc .total-price span {
        	position: relative;
        }

        .order.disc .total-price span:before {
        	content: '-';
		    position: absolute;
		    top: -2px;
		    left: -15px;
        }

        .order>div {
			padding: 25px;
			position: relative;
		}

		.order:first-child {
        	border: none;
        }

        .order.header {
        	border: none;
        	border-top: 1px solid #dedede;
        	font-size: 0.9em;
        	color: #b5b5b5;
        	margin-top: 60px;
        	padding-top: 20px;
        }

        .order.header>div {
        	padding: 20px 25px;
        }

        .order.header .name {
        	/*font-weight: 400;*/
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
        	/*font-weight: 700;*/
        }

        .order .price {
        	width: 20%;
        }

        .order .nights {
        	width: 12%;
        }

        .order .total-price {
         	width: 15%;
         	text-align: right;
        }

        .order .unit {
        	text-align: center;
        	width: 10%;
        }

        .order .line {
        	width: 25px;
        	height: 2px;
        	border-top: 1px solid #dcdcdc;
        	margin: 0px 15px;
        }

        .order .unit input {
        	width: 50%;
        	outline: none;
        }

        .invoice-info {
    	    border: 1px solid #e6e6e6;
    		margin-top: 40px;
        }

        .invoice-info>div {
    	    letter-spacing: 2px;
    		padding: 30px 35px;
        }

        .invoice-info .recipient label {
    	    color: #b5b5b5;
		    font-weight: 500;
		    font-size: 0.9em;
        }

        .invoice-info .recipient p {
        	margin-top: 5px;
        }

        .invoice-info .payment-status {
        	padding: 30px 65px;
		    border-left: 1px solid #e6e6e6;
		    border-right: 1px solid #e6e6e6;
		    margin: 0px auto;
        }

        .invoice-info .payment-status h1 {
    	    font-family: Raleway;
		    font-weight: 200;
		    letter-spacing: 3px;
		    margin-top: 30px;
		    text-transform: uppercase;
        }

        .invoice-info .payment-bill .flex {
		    margin-top: 8px;
		    text-align: right;
		}

		.invoice-info .payment-bill .flex label {
		    text-align: right;
		    margin: 0;
		    margin-right: 20px;
		    flex-grow: 1;
		    font-size: 0.9em;
		    letter-spacing: 2px;
    		font-weight: 400;
		}

		.invoice-info .payment-bill .flex p {
		    width: 130px;
		}

		.invoice-info .recipient, .invoice-info .payment-bill {
			width: 320px;
		}

		.new-invoice .footer {
		    letter-spacing: 2px;
		    text-align: center;
		    margin-top: 50px;
		    font-size: 0.9em;
		    color: #b5b5b5;
		}

		.text-red {
			color: #ff2a2a;
		}
	</style>
</head>
<body>
	<div class="loading-screen animation anim-blink disappear gone">
		<div class="loading-wrapper">
			<div class="loader"></div>
			<p class="loading-text">Loading</p>
		</div>
	</div>
	<div class="background">
		<div class="navbar animation anim-blink">
			<div class="logo">
				<h1>PALAWI</h1>
			</div>
			<ul class="nav">
				<li class="active">SEARCH</li>
				<li>CONTACT</li>
				<li>PESANAN ANDA</li>
				<li>INFO WISATA</li>
			</ul>
			<div class="special">
				<span><b>SUDAH BAYAR ?</b> Upload Bukti Transfer</span>
				<a class="marleft-15"><b>UPLOAD</b></a>
				<!-- <button class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> LOGIN</button> -->
			</div>
		</div>
		<div id="form-invoice" class="animation anim-blink">
			<h1>Cek Pesanan Anda.</h1>
			<div class="flex stretch">
				<p>Silahkan cek e-mail yang anda gunakan saat pemesanan untuk mendapatkan nomor invoice pesanan anda</p>
				<div class="flex-grow-1">
					<div class="field-row marbot-30">
						<div class="input-wrapper flex-grow-1">
							<b>NO. INVOICE</b>
							<input type="text" name="invoice" placeholder="Masukkan nomor invoice" class="font-number" spellcheck="false">	
						</div>
					</div>	
					<div class="field-row">
						<div class="input-wrapper flex-grow-1">
							<b>E-MAIL</b>
							<input type="text" name="email" placeholder="Masukkan e-mail anda" spellcheck="false">
						</div>
						<button id="btn-invoice" class="btn btn-warning">Cek Invoice</button>
					</div>	
				</div>
				
			</div>
		</div>
		<div class="warning animation anim-slide-down-up disappear gone">
			<h1>Mohon maaf atas ketidaknyamanan ini</h1>
			<h3>Pesanan anda telah dibatalkan, karena batas waktu pembayaran telah habis</h3>
		</div>
		<div class="invoice flex stretch animation anim-blink disappear gone">
			<div class="left">
				<div class="order-info">
					<div class="flex header marbot-30">
						<b class="flex-grow-1">BOOKING INVOICE</b>
						<p id="nomor-invoice" class="font-number"># INV/20191008/BAT/001</p>
					</div>
					<div class="content">
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Pesan <span id="val-nama-resort" class="marleft-15">RASAMALA VILLA</span></p>
							<p id="val-total-kamar" class="flex-grow-1 text-center">2 Kamar</p>
							<p id="val-lama-inap" class="flex-grow-1 text-center">1 Malam</p>
						</div>
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Untuk <span class="val-nama-pemesan marleft-15">Niko Prianto</span></p>
							<p class="flex-grow-1 text-center">C.P <span class="val-telepon marleft-15 font-number">0857-0160-9034</span></p>
							<p class="val-email flex-grow-1 text-center">nikonick47@gmail.com</p>
						</div>
						<div class="flex stretch martop-12">
							<p class="flex-grow-1">Check-In <span class="val-check-in marleft-15 font-number">05 September 2019</span></p>
							<p class="flex-grow-1">Check-Out <span class="val-check-out marleft-15 font-number">06 September 2019</span></p>
						</div>	
					</div>
				</div>
				<div class="order-detail martop-50">
					<div class="header marbot-15">
						<p>Rincian Pesanan Anda</p>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th class="text-center"><b>NO</b></th>
								<th><b>PESANAN</b></th>
								<th><b>HARGA PER UNIT</b></th>
								<th><b>UNIT</b></th>
								<th><b>BIAYA</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="font-number text-center">1</td>
								<td><b>DELUXE ROOM</b></td>
								<td class="font-number">Rp 350.000 <small>/malam</small></td>
								<td class="font-number">x 2</td>
								<td class="font-number">Rp 700.000</td>
							</tr>
							<tr>
								<td class="font-number text-center">2</td>
								<td><b>EXECUTIVE ROOM</b></td>
								<td class="font-number">Rp 250.000 <small>/malam</small></td>
								<td class="font-number">x 2</td>
								<td class="font-number">Rp 500.000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td class="text-right" colspan="4"><b>biaya per malam</b></td>
								<td class="font-number val-grand-total">Rp 1.200.000</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<div class="right">
				<div class="payment">
					<div class="card marbot-50">
						<div id="not-paid">
							<div class="flex payment-address">
								<b><i>BCA</i></b>
								<div class="line"></div>
								<p class="font-currency">0123456789</p>
							</div>
							<div class="flex nominal martop-30 marbot-10">
								<b class="flex-grow-1">Jumlah tagihan</b>
								<h3 class="font-currency"><b class="val-grand-total">Rp 1.200.000</b></h3>
							</div>
							<h1 class="font-currency"><b><span class="minutes">30</span> : <span class="seconds">11</span></b></h1>
							<div class="footer martop-30">
								<h3>a.n Palawi Resort Baturraden</h3>
							</div>
						</div>
						<div id="half-paid">
							<div class="flex payment-address">
								<b><i>BCA</i></b>
								<div class="line"></div>
								<p class="font-currency">0123456789</p>
							</div>
							<div class="flex nominal martop-30 marbot-10">
								<b class="flex-grow-1">Sisa tagihan</b>
								<h3 class="font-currency"><b class="val-sisa-bayar">Rp 1.200.000</b></h3>
							</div>
							<p>Anda telah membayar DP sebesar <span class="font-currency val-sudah-bayar">Rp 480.000</span>, sisa tagihan dapat dibayarkan lewat transfer kembali atau dilengkapi saat check-in</p>
							<div class="footer martop-30">
								<h3>a.n Palawi Resort Baturraden</h3>
							</div>
						</div>
						<div id="paid">
							<div class="flex nominal martop-30">
								<h1>Terimakasih telah melakukan pembayaran</h1>
							</div>
						</div>
					</div>
					<div class="info">
						<div class="flex">
							<b class="flex-grow-1">GRAND TOTAL</b>
							<span class="font-currency"><span class="val-lama-inap">1 malam</span> x <span class="val-total-per-malam">Rp 1.200.000</span></span>
						</div>
						<div class="flex">
							<h4 id="grand-total" class="flex-grow-1 font-currency text-right val-grand-total">Rp 1.200.000</h4>
						</div>
						<div class="flex">
							<b class="flex-grow-1">YANG TELAH DIBAYAR</b>
							<span class="font-currency val-sudah-bayar">Rp 0</span>
						</div>
						<div class="flex">
							<b class="flex-grow-1">SISA YANG HARUS DIBAYAR</b>
							<span class="font-currency val-sisa-bayar">Rp 1.200.000</span>
						</div>
						<div class="flex">
							<b class="flex-grow-1">STATUS PEMBAYARAN</b>
							<span class="font-currency val-status-bayar">MENUNGGU PEMBAYARAN</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background-pattern animation anim-blink disappear gone">
			<div class="left">
				<div class="pattern">
					<div id="one"></div>
					<div id="two"></div>
					<div>
						<span id="three"></span>
						<span id="four"></span>
					</div>
				</div>
				<div class="shadow pattern">
					<div id="one"></div>
					<div id="two"></div>
					<div>
						<span id="three"></span>
						<span id="four"></span>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="pattern">
					<div id="one"></div>
					<div id="two"></div>
					<div>
						<span id="three"></span>
						<span id="four"></span>
					</div>
				</div>
				<div class="shadow pattern">
					<div id="one"></div>
					<div id="two"></div>
					<div>
						<span id="three"></span>
						<span id="four"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="new-invoice animation anim-blink disappear gone">
			<div class="header">
				<h1>INVOICE</h1>
				<p># <span class="font-currency val-invoice">INV/20191114/COB/0001</span></p>
			</div>
			<div class="receipt">
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
					<div class="info nav-button">
						<button id="btn-upload-form" class="btn btn-black">BUKTI TRANSFER</button>
					</div>
				</div>
				<div class="order header">
					<div class="name flex">
						<span class="index">NO</span>
						<span class="line"></span>
						<span>ITEM ORDER</span>
					</div>
					<div class="price">
						<span>PRICE</span>
					</div>
					<div class="unit">
						<span>UNIT</span>
					</div>
					<div class="nights">
						<span></span>
					</div>
					<div class="total-price">
						<span>TOTAL PRICE</span>
					</div>
				</div>
				<div class="orders">
					<div class="order">
						<div class="name flex">
							<span class="index font-currency">1</span>
							<span class="line"></span>
							<span>Rasamala Executive</span>
						</div>
						<div class="price">
							<span>Rp 150.000 / malam</span>
						</div>
						<div class="unit">
							<span>x 1</span>
						</div>
						<div class="nights">
							<span>x 1 malam</span>
						</div>
						<div class="total-price">
							<span>Rp 150.000</span>
						</div>
					</div>
					<div class="order">
						<div class="name flex">
							<span class="index font-currency"></span>
							<span class="line"></span>
							<span></span>
						</div>
						<div class="price">
							<span></span>
						</div>
						<div class="unit">
							<span></span>
						</div>
						<div class="nights">
							<span>DISCOUNT</span>
						</div>
						<div class="total-price">
							<span>- Rp 50.000</span>
						</div>
					</div>
					<div class="order">
						<div class="name flex">
							<span class="index font-currency">2</span>
							<span class="line"></span>
							<span>Rasamala Deluxe</span>
						</div>
						<div class="price">
							<span>Rp 150.000 / malam</span>
						</div>
						<div class="unit">
							<span>x 1</span>
						</div>
						<div class="nights">
							<span>x 1 malam</span>
						</div>
						<div class="total-price">
							<span>Rp 150.000</span>
						</div>
					</div>
					<div class="order">
						<div class="name flex">
							<span class="index font-currency">3</span>
							<span class="line"></span>
							<span>Rasamala Executive</span>
						</div>
						<div class="price">
							<span>Rp 150.000 / malam</span>
						</div>
						<div class="unit">
							<span>x 1</span>
						</div>
						<div class="nights">
							<span>x 1 malam</span>
						</div>
						<div class="total-price">
							<span>Rp 150.000</span>
						</div>
					</div>
					<div class="order">
						<div class="name flex">
							<span class="index font-currency">4</span>
							<span class="line"></span>
							<span>Rasamala Executive</span>
						</div>
						<div class="price">
							<span>Rp 150.000 / malam</span>
						</div>
						<div class="unit">
							<span>x 1</span>
						</div>
						<div class="nights">
							<span>x 1 malam</span>
						</div>
						<div class="total-price">
							<span>Rp 150.000</span>
						</div>
					</div>
					<div class="order">
						<div class="name flex">
							<span class="index font-currency">5</span>
							<span class="line"></span>
							<span>Rasamala Executive</span>
						</div>
						<div class="price">
							<span>Rp 150.000 / malam</span>
						</div>
						<div class="unit">
							<span>x 1</span>
						</div>
						<div class="nights">
							<span>x 1 malam</span>
						</div>
						<div class="total-price">
							<span>Rp 150.000</span>
						</div>
					</div>
				</div>
				<div class="invoice-info flex stretch">
					<div class="recipient">
						<label><i>Pemesan</i></label>
						<p><b class="val-nama-pemesan">Niko Prianto</b></p>
						<p class="val-email-pemesan">nikonick47@gmail.com</p>
						<p class="font-number val-telepon-pemesan">0857-0160-9034</p>
					</div>
					<div class="payment-status">
						<h1><i class="val-status-bayar">LUNAS</i></h1>
					</div>
					<div class="payment-bill">
						<div class="flex">
							<label>TOTAL</label>
							<p class="font-number val-grand-total">Rp 600.000</p>
						</div>
						<div class="flex">
							<label>TERBAYAR</label>
							<p class="font-number val-sudah-bayar">Rp 180.000</p>
						</div>
						<div class="flex text-red">
							<label>TERHUTANG</label>
							<p class="font-number val-sisa-bayar">Rp 420.000</p>
						</div>
					</div>
				</div>
				<p class="footer">Invoice dibuat secara otomatis oleh sistem dan sah tanpa tanda tangan</p>
			</div>
		</div>
	</div>

	<div class="bg animation anim-scale disappear gone">
		<div class="flex stretch">
			<div class="upload">
				<div class="photo-container">
					<img src="{{ asset('img/thumbnail-5.jpg') }}" class="photo">
				</div>
				<div class="photo-detail">
					<p class="font-currency val-file-size">120.3 KB</p>
					<h3 class="val-file-name">thumbnail-5.jpg</h3>
					<button id="btn-upload" class="btn">Upload</button>
				</div>
				<input type="file" name="bukti_transfer" class="invisible">
			</div>
			<div class="desc">
				<div class="flex">
					<h1 class="flex-grow-1">Upload foto bukti transfer.</h1>	
					<p id="btn-close-form">x</p>
				</div>
				<div class="new-line">
					<div class="line"><p>01</p></div>
					<p>Terimakasih</p>	
					<p>telah melakukan pembayaran untuk pesanan anda.</p>
				</div>
				<div class="new-line">
					<div class="line"><p>02</p></div>
					<p>Silahkan upload foto bukti transfer</p>
					<p>agar pesanan anda dapat segera kami proses.</p>
				</div>
				<div class="new-line">
					<div class="line"><p>03</p></div>
					<p>Bukti transfer yang anda kirimkan akan di-verifikasi terlebih dahulu dalam waktu maksimal 1x24 jam</p>
				</div>
			</div>
			
		</div>		
	</div>

	<input type="hidden" name="booking_id">
</body>
<script type="text/javascript">
	var booking;
	var interval;

	$('input.date').datepicker({ 
		dateFormat: 'yy-mm-dd',
		minDate: 0
	});

	$('.input-field-toggle').on('click', function() {
		showInput($(this));
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

	$('#btn-invoice').on('click', function() {
		var invoice = $('input[name=invoice]').val();
		var email = $('input[name=email]').val();

		showLoader('Memuat Invoice');

		$.ajax({
			url: 'https://api.resort.shafarizkyf.com/api/booking/search?invoice=' + invoice + '&email=' + email,
			method: 'GET',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			}
		}).then(response => {
			var data = response;
			booking = response;

			console.log(response);
			var booking_id = data.id;
			var booking_details = data.details;
			var status_pembayaran = data.payment_status;
			var sudah_bayar = data.is_verified_payment;
			var total_bill = data.total_bill;
			var total_paid = data.total_paid;
			var is_paid = data.is_paid;
			var uang_muka = (30 * parseInt(total_bill))/100;
			var full_payment = data.full_payment;

			var nama_pemesan = data.guest.name;
			var email = data.guest.email;
			var telepon = data.guest.phone;
			var nama_resort = data.details[0].item_detail.item.name;

			var promos = data.promos;

			$('.new-invoice .orders').empty();

			var check_in_time = '';
			var check_out_time = '';

			$.each(booking_details, function(index, detail) {
				var check_in = detail.start_time;
				var check_out = detail.end_time;
				var id_kamar = detail.item_detail_id;
				var nama_kamar = detail.item_detail.item.name;
				var unit = 1;
				var harga = detail.price.service_price;
				var total = harga * unit;

					harga = accounting.formatMoney(
						harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
					total = accounting.formatMoney(
						total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

				var lama_inap = dateDiffInDays(check_in.split('T')[0], check_out.split('T')[0]);

				var $row = 
					// '<tr>' +
					// 	'<td class="font-number text-center">' + (index + 1) + '</td>' +
					// 	'<td><b>' + nama_kamar + '</b></td>' +
					// 	'<td class="font-number">' + harga + ' <small>/malam</small></td>' +
					// 	'<td class="font-number">x 1</td>' +
					// 	'<td class="font-number">' + total + '</td>' +
					// '</tr>';
					'<div id="' + id_kamar + '" class="order flex">' +
						'<div class="flex name">' +
							'<span class="index"><span>' + (index + 1) + '</span><i class="fas fa-check deselect"></i></span>' +
							'<span class="line"></span>' +
							'<span>' + nama_kamar + '</span>' + 
						'</div>' +
						'<div class="price">' + 
							'<span>' + harga + ' / malam</span>' +
						'</div>' +
						'<div class="unit">' +
							'<span>x ' + unit + '</span>' +
						'</div>' +
						'<div class="nights">' +
							'<span>' + lama_inap + ' malam</span>' +
						'</div>' +
						'<div class="total-price">' +
							'<span>' + total + '</span>' +
						'</div>' +
					'</div>';

				$('.new-invoice .orders').append($row);

				check_in_time = check_in;
				check_out_time = check_out;
			})

			$.each(promos, function(index, promo) {
				var amount = promo.amount;
				var item_id = promo.booking_detail.item_detail_id;

					amount = accounting.formatMoney(
						amount, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

				var $disc = 
					'<div class="order disc">' +
						'<div class="flex name">' +
							'<span class="index"><span></span><i class="fas fa-check deselect"></i></span>' +
							'<span class="line"></span>' +
							'<span></span>' + 
						'</div>' +
						'<div class="price">' + 
							'<span></span>' +
						'</div>' +
						'<div class="unit">' +
							'<span></span>' +
						'</div>' +
						'<div class="nights">' +
							'<span>DISCOUNT</span>' +
						'</div>' +
						'<div class="total-price">' +
							'<span>' + amount + '</span>' +
						'</div>' +
					'</div>';

				$('.orders .order#' + item_id).after($disc);
			}) 

			var lama_inap = dateDiffInDays(check_in_time.split('T')[0], check_out_time.split('T')[0]);
			var total_sisa = total_bill - total_paid;
				lama_inap = lama_inap + ' malam';

			// if (is_paid) {
			// 	$('.card>div.active').removeClass('active');
			// 	$('.card>div#paid').addClass('active');
			// } else {
			// 	$('.card>div.active').removeClass('active');

			// 	if (total_paid != 0) {
			// 		alert('half paid');
			// 		$('.card>div#half-paid').addClass('active');
			// 	} else {
			// 		$('.card>div#not-paid').addClass('active');

			// 		interval = setInterval(function() {
			// 			var today = moment();
			// 			var created_at = moment(data.created_at);
			// 			var diff = (45*60) - today.diff(created_at, 'seconds');
			// 			var diff_minutes = Math.floor(diff/60);
			// 			var diff_seconds = diff % 60;

			// 			$('#not-paid').find('.minutes').text(diff_minutes);
			// 			$('#not-paid').find('.seconds').text(diff_seconds);

			// 			if (diff_minutes <= 0 && diff_seconds <= 0) {
			// 				clearInterval(interval);
			// 				$('.invoice').addClass('disappear');

			// 				setTimeout(function() {
			// 					$('.invoice').addClass('gone');
			// 					$('.warning').removeClass('gone');
			// 				}, 600);

			// 				setTimeout(function() {
			// 					$('.warning').removeClass('disappear');
			// 				}, 800);
			// 			}
			// 		}, 1000);
			// 	}
			// }

			if (is_paid || total_paid > total_bill) {
				$('#btn-upload-form').parent().addClass('gone');
			} else {
				$('#btn-upload-form').show();
			}

				uang_muka = accounting.formatMoney(
						uang_muka, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				total_bill = accounting.formatMoney(
						total_bill, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				total_paid = accounting.formatMoney(
						total_paid, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				total_sisa = accounting.formatMoney(
						total_sisa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			check_in_time = dateToString(check_in_time.split('T')[0], 'short') + ' - ' + check_in_time.split('T')[1].slice(0,5);
			check_out_time = dateToString(check_out_time.split('T')[0], 'short') + ' - ' + check_out_time.split('T')[1].slice(0,5);

			$('input[name="booking_id"]').val(booking_id);
			$('.val-nama-item').text(nama_resort);
			$('.val-grand-total').text(total_bill);
			$('.val-sudah-bayar').text(total_paid);
			$('.val-sisa-bayar').text(total_sisa);
			$('.val-start-date').text(check_in_time);
			$('.val-status-bayar').text(status_pembayaran);
			$('.val-end-date').text(check_out_time);
			$('.val-nama-pemesan').text(nama_pemesan);
			$('.val-email-pemesan').text(email);
			$('.val-telepon-pemesan').text(telepon);
			$('.val-lama-inap').text(lama_inap);
			$('.val-invoice').text(invoice);

			transition();

			setTimeout(hideLoader, 500);
		}).fail(error => {
			console.log(error)
			console.log(error.response)
		})
	})

	$('.photo-container').on('click', function() {
		$('input[type="file"]').click();
	})

	$('input[type="file"]').on('change', function() {
		var path = $(this).val();
		var file_name = path.split('\\')[2];
		var file = $(this)[0].files[0];
		var file_size = Math.floor(file.size / 1024) + ' KB';

		$('.val-file-name').text(file_name);
		$('.val-file-size').text(file_size);

		readURL(file);
	})

	$('#btn-upload-form').on('click', function() {
		$('.bg').removeClass('gone');

		setTimeout(function() {
			$('.bg').removeClass('disappear');
		}, 200);
	})

	$('#btn-close-form').on('click', function() {
		$('.bg').addClass('disappear');

		setTimeout(function() {
			$('.bg').addClass('gone');
		}, 500);
	})

	$('#btn-upload').on('click', function() {
		showLoader('Uploading Bukti Transfer');
		var booking_id = $('input[name="booking_id"]').val();

		var file = $('input[type=file]')[0].files[0];
		var form = new FormData();
		form.append("payment_method_id", "1");
		form.append("booking_id", booking_id);
		form.append("file", file);

		var full_payment = booking.full_payment;
		var total_bill = booking.total_bill;

		$.ajax({
            url: 'https://api.resort.shafarizkyf.com/api/transaction',  
            type: 'POST',
            data: form,
            cache: false,
            contentType: false,
            processData: false
		}).done(function (response) {
			if (full_payment == '1') {
				// full payment
				$('.navbar .special').addClass('gone');

				var sudah_bayar = accounting.formatMoney(total_bill, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				var total_sisa = 'Rp 0';
				var status_pembayaran = 'Lunas';
				var target_card = $('#paid');
			} else {
				// dp
				var sudah_bayar = (30/100) * total_bill;
				var total_sisa = total_bill - sudah_bayar;
					sudah_bayar = accounting.formatMoney(sudah_bayar, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
					total_sisa = accounting.formatMoney(total_sisa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				var status_pembayaran = 'DP 30%';
				var target_card = $('#half-paid');
			}

		  	alert('Bukti Pembayaran Berhasil Di-Upload');
		  	$('.val-sudah-bayar').text(sudah_bayar);
			$('.val-sisa-bayar').text(total_sisa);
			$('.val-status-bayar').text(status_pembayaran);
			$('.payment .card>div.active').removeClass('active');

			$('#btn-close-form').click();

			hideLoader();
		}).fail(function (error) {
			console.log(error);
			console.log(error);
		});
	})

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

	function transition() {
		// $('.form').find('.animation').addClass('disappear');
		// setTimeout(function() {
		// 	$('.form').addClass('gone');
			
		// 	$('.content').removeClass('gone');
		// }, 800);

		// setTimeout(function() {
		// 	$('.content').find('.animation').removeClass('disappear');
		// }, 1000);

		$('.background').find('.navbar').addClass('disappear');
		$('.background').find('#form-invoice').addClass('disappear');

		setTimeout(function() {
			$('.background').addClass('show-invoice');	
			$('#form-invoice').addClass('gone');
			$('.new-invoice').removeClass('gone');
			$('.background-pattern').removeClass('gone');
		}, 200);
		
		setTimeout(function() {
			$('.background').find('.navbar').addClass('gone');
			$('.new-invoice').removeClass('disappear');
			$('.background-pattern').removeClass('disappear');
		}, 500);
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

    function dateToString(date, long_short) {
        var day = date.split('-')[2];
        var month = date.split('-')[1];
        var year = date.split('-')[0];
        	month = (long_short == 'short') ? monthString(month).slice(0,3) : monthString(month);

        var newDate = day + ' ' + month + ' ' + year;

        return newDate;
    }

    function dateDiffInDays(start, end) {
    	var new_start = new Date(start);
    	var new_end = new Date(end);

    	var diff = new Date(new_end - new_start);
    	var day_diff = diff/1000/60/60/24;

    	return day_diff;
    }

    function readURL(file) {
	    var reader = new FileReader();
	    
	    reader.onload = function(e) {
	      	$('.photo-container .photo').attr('src', e.target.result);
	    }
	    
	    reader.readAsDataURL(file);
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
</script>
</html>