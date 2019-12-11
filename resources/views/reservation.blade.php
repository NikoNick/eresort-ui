<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

		button {
			letter-spacing: 1px;
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

		.background-pattern {
			position: fixed;
			width: 100%;
			height: 100vh;
			z-index: 0;
		}

		.background-pattern .left {
			position: absolute;
			bottom: 120px;
			left: -110px;
		}

		.background-pattern .right {
			position: absolute;
			right: -110px;
			top: 320px;
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
			margin-top: 20px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern #three {
			display: inline-block;
			width: 170px;
			height: 33px;
			border-radius: 50px;
			/*position: absolute;*/
			margin-left: 50px;
			margin-top: 20px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern #four {
			display: inline-block;
			width: 33px;
			height: 33px;
			border-radius: 50px;
			/*position: absolute;*/
			margin-left: 20px;
			margin-top: 20px;
			background: linear-gradient(90deg, rgba(28,173,192,1) 0%, rgba(39,254,197,1) 100%);
		}

		.background-pattern .pattern.shadow {
		    position: absolute;
		    top: 40px;
		    left: -40px;
		    opacity: 0.15;
		}

		.background {
			/*background: #fff;*/
			width: 100%;
			height: 100vh;
			/*background-size: 130%;*/
			/*overflow: hidden;*/
			display: flex;
			position: relative;
			z-index: 1;
			flex-direction: column;
		}

		.form-title {
			align-items: baseline;
			padding-bottom: 50px;
			/*padding-bottom: 0;*/
		}

		.form-title h1 {
			margin-top: 0;
			font-size: 2.1em;
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
			font-size: 2.5em;
		    line-height: 90px;
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
			position: relative;
			white-space: nowrap;
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
			padding: 60px 120px 50px;
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

		.order-steps .step p .number:after {
			content: '.';
			margin-right: 5px;
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
			padding: 220px 250px 100px 250px;
		}

		#step-3 .form-title {
			padding-bottom: 0px;
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

		.form-reservasi .form {
			margin-top: 30px;
			margin-right: 250px;
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

		#step-2 {
		    padding: 200px 250px 120px 250px;
		}

		#step-6 .content {
			padding: 50px 130px 0px 130px;
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

		#step-6 .nav-button {
			margin-top: 0;
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
        	border: 1px solid #e4e4e4;
        	margin-top: 10px;
        }

        .order {
        	letter-spacing: 2px;
        	padding: 0px 15px;
        }

        .orders .order {
        	border-top: 1px solid #f1f1f1;
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
        	margin-top: 60px;
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
        	width: 20%;
        }

        .order .nights {
        	width: 10%;
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

        .order .label-disc {
    	    font-family: Arial;
		    font-size: 0.8em;
		    font-weight: 500;
		    position: absolute;
		    white-space: nowrap;
		    background: black;
		    color: #fff;
		    padding: 2px;
		    right: -80px;
        }

        #step-1, #step-4 {
        	z-index: 2;
        }

        .payment-method {
    	    margin-top: 30px;
		    padding: 15px 25px;
		    margin-bottom: 10px;
		    margin-right: 30px;
		    display: inline-block;
		    border: 1px solid #dcdcdc;
		    border-radius: 10px;
        }

        .payment-method:last-child {
        	margin-right: 0;
        }

        .payment-method .name {
        	font-size: 1.2em;
		    font-weight: 400;
		    letter-spacing: 4px;
        }

        .kode-promo {
        	align-items: center;
        }

        .kode-promo span {
        	letter-spacing: 2px;
        }

        .kode-promo .input-wrapper {
        	display: flex;
        	align-items: center;
        }

        .kode-promo #btn-check-promo {
        	cursor: pointer;
        }

        
        .input-wrapper {
    	    border: 1px solid #e4e4e4;
		    border-radius: 8px;
		    padding: 15px 25px;
		    margin-left: 25px;
		}

		.input-wrapper input {
			border: none;
			outline: none;
			letter-spacing: 2px;
		}

		.input-wrapper b {
		    white-space: nowrap;
		    letter-spacing: 1px;
		    font-weight: 800;
		    /*padding: 0px 25px;*/
		}

		.input-wrapper i {
		    /*margin: 0 25px;*/
		    font-size: 1.2em;
		}

		#step-5 .content {
			text-align: center;
			margin-top: 60px;
		}

		#step-5 .content h1 {
			font-weight: 400;
		}

		#step-5 .content p {
			font-size: 1.3em;
		    letter-spacing: 3px;
		    margin-top: 20px;
		}

		.form-dialog {
		    top: -120px;
    		left: 600px;
			position: absolute;
			z-index: 5;
			background: #fff;
			border-radius: 5px;
			box-shadow: 0px 5px 20px 0px #000;
		}

		.form-dialog>div {
			padding: 30px 40px;
		}

		.form-dialog .header {
			padding: 30px 0px;
		}

		.form-dialog .header h3 {
		    font-family: Raleway;
		    text-align: center;
		    margin: 0;
		    padding: 20px;
		    font-size: 1.2em;
		    letter-spacing: 2px;
		    border-top: 1px solid #f5f5f5;
		    border-bottom: 1px solid #f5f5f5;
		}

		.form-dialog .header p {
		    text-align: center;
		    font-size: 0.95em;
		    letter-spacing: 1.5px;
		    font-weight: 200;
		    margin-top: 20px;
		}

		.form-dialog .body>div {
			margin-top: 15px;
		}

		.form-dialog .body>div:first-child {
			margin-top: 0px;
		}

		.form-dialog .input-wrapper {
		    margin: 0;
    		min-width: 350px;
		}

		.form-dialog .input-wrapper label {
			margin: 0;
			margin-right: 30px;
			width: 60px;
		}

		.form-dialog button {
			width: 100%;
			background: #0ee6a2;
		    font-weight: 700;
		    letter-spacing: 2px;
		    color: #fff;
		    box-shadow: 0px 2px 0px 0px #10cc91;
		    /*background: linear-gradient(360deg, rgb(26, 226, 178) 0%, rgb(25, 255, 194) 100%);*/
		    padding: 12px;
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

		.mobile-visible {
			display: none;
		}

		@media screen and (max-width: 600px) {
			.background-pattern {
				display: none !important;
			}

			.order-steps {
				padding: 5% 10% !important;
				width: 100vw !important;
			}

			.order-steps .step {
				flex-grow: 0 !important;
				/*font-family: Raleway;*/
				font-size: 0.6em !important;
				margin: 0 !important;
			}

			.order-steps .step:first-child .number {
				margin-left: 0;
			}

			.order-steps .step:last-child .number {
				margin-right: 0;
			}

			.order-steps .step.active.finished {
				flex-grow: 1 !important;
			}

			.order-steps .step.active {
				flex-grow: 1 !important;
			}

			.order-steps .step .bar {
				display: none;
			}

			.order-steps .step .number {
			    width: 25px;
			    height: 25px;
			    text-align: center;
			    padding: 4px 8px;
			    display: inline-block;
			    border-radius: 50%;
			    border: 1px solid;
			    margin: 0px 5px;
			}

			.order-steps .step .name, .order-steps .step.active.finished .name {
				display: none !important;
				letter-spacing: 1px;
				margin-left: 5px;
			}

			.order-steps .step p .number:after {
				content: none;
			}

			.order-steps .step.active .name {
				display: inline-block !important;
			}

			.form-reservasi {
				padding: 5% 10% !important;
				padding-top: 30% !important;
				font-size: 0.8em;
			}

			.form-title {
				padding: 0;
				display: block !important;
			}

			.form-title h1 {
			    letter-spacing: 2px;
			    font-size: 1.5em;
			}

			.form-title p {
	    		font-size: 1em;
    			letter-spacing: 1px;
			}

			.mobile-visible {
				display: block;
			}

			.mobile-invisible, .info {
				display: none;
			}

			.form-reservasi .form, .nav-button span {
				display: none;
			}

			.order.header {
				/*display: none;*/
				font-size: 0.8em;
			}

			.orders {
				font-size: 0.9em;
				border: none;
			}

			.order {
				margin: 0;
				letter-spacing: 1px;
				border: none !important;
				/*border-top: 1px solid #f5f5f5 !important;*/
				padding: 0px;
			}
			.order>div {
				padding: 3% 2% !important;
			}

			.order .price {
				width: 30%;
			}

			.order .name {
				padding-left: 0px !important;
				text-transform: initial;
				font-weight: 500;
			}

			.order .unit {
				padding-right: 0px !important;
			}

			.order .line {
				display: none;
			}

			.order .index {
				margin-right: 10px;
			}

			.order .nights, .order .total-price, .order .availability {
				display: none;
			}

			.text-center {
				text-align: center;
			}
			.text-center h1 {
				font-size: 2.5em;
				font-family: Consolas;
				margin-top: 10px;
			}
			.text-center label {
			    font-weight: 400;
    			letter-spacing: 1px;
			}

			#step-5 .content p {
				font-size: 1em;
				letter-spacing: 1px;
			}

			#step-6 .content {
				padding: 0px;
			}

			#step-6 .order .price {
				display: none;
			}

			#step-6 .order .unit {
				width: 20%;
				text-align: center;
			}

			#step-6 .order .total-price {
				width: 25%;
				display: block;
			}

			.btn-book {
				display: block;
				width: 100%;
			    font-size: 1em;
			    padding: 4% 10%;
			    margin-top: 20px;
			}

			.mobile-info {
				margin-right: 10px;
				flex-grow: 1;
				margin-top: 20px;
			}
			.mobile-info p {
				font-size: 1.2em;
			}
		}
	</style>
</head>
<body>
	<div class="background-pattern">
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
	<div class="loading-screen animation anim-blink disappear gone">
		<div class="loading-wrapper">
			<div class="loader"></div>
			<p class="loading-text">Loading</p>
		</div>
	</div>
	<div class="background">
		<div class="order-steps flex">
			<div id="trigger-1" class="step">
				<div class="bar"></div>
				<p><span class="number">1</span><span class="name">LIHAT JADWAL</span></p>
			</div>
			<div id="trigger-2" class="step">
				<div class="bar"></div>
				<p><span class="number">2</span><span class="name">RESERVASI</span></p>
			</div>
			<div id="trigger-3" class="step">
				<div class="bar"></div>
				<p><span class="number">3</span><span class="name">EXTRA ORDER</span></p>
			</div>
			<div id="trigger-4" class="step">
				<div class="bar"></div>
				<p><span class="number">4</span><span class="name">IDENTITAS DIRI</span></p>
			</div>
			<div id="trigger-5" class="step">
				<div class="bar"></div>
				<p><span class="number">5</span><span class="name">PEMBAYARAN</span></p>
			</div>
			<div id="trigger-6" class="step">
				<div class="bar"></div>
				<p><span class="number">6</span><span class="name">CHECK OUT</span></p>
			</div>
		</div>
		
		<div id="step-1" class="form-reservasi gone" condition="must-filled">
			<div class="wrapper">
				<div class="form-title">
					<h1 class="anim-slide-left-right animation disappear">Apa Yang Anda Butuhkan ?</h1>
				</div>
				<div class="mobile-visible">
					<div class="md-form">
						<select name="location" class="fillable form-control">
							<option value="0" selected>Akasia</option>
							<option value="1" selected>Eboni</option>
							<option value="2" selected>Merkusii</option>
						</select>
						<label for="form1" class="active">NAMA RESORT</label>
					</div>
					<div class="md-form">
						<div class="md-input-wrapper">
							<div class="date-wrapper">
								<span class="date-string">10 Desember 2019</span>
								<input type="text" id="form1" class="form-control date" name="start_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
							</div>	
						</div>
						
						<label for="form1" class="active">CHECK-IN</label>
					</div>
					<div class="md-form">
						<div class="md-input-wrapper">
							<div class="date-wrapper">
								<span class="date-string">10 Desember 2019</span>
								<input type="text" id="form1" class="form-control date" name="end_date" spellcheck="false" value="10 Desember 2019" placeholder="Check-In">	
							</div>	
						</div>
						
						<label for="form1" class="active">CHECK-OUT</label>
					</div>
				</div>
				<div class="form anim-slide-right-left animation disappear">
					<div class="bg"></div>
					<span id="business-text">Pesan kamar untuk tanggal </span>
					<div class="input-field tanggal">
						<span class="input-field-toggle">22 September 2019</span>
						<div class="date-field">
							<input type="text" class="date fillable" name="start_date" value="{{ $start_date }}">
						</div>
					</div>
					<br><span>sampai </span>
					<div class="input-field tanggal">
						<span class="input-field-toggle">25 September 2019</span>
						<div class="date-field">
							<input type="text" class="date fillable" name="end_date" value="{{ $end_date }}">
						</div>
					</div>
					<span> di </span>
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
					<input type="hidden" name="business_id">
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span>Saya ingin menghabiskan 3 malam di Rasamala Villa, </span><a for="1" next="2" class="form-nav form-next">Cek Jadwal !</a>
				</div>
			</div>
			
		</div>

		<div id="step-2" class="form-reservasi gone" condition="min-1">
			<div class="wrapper">
				<!-- <div class="form-title animation anim-slide-down-up disappear">
					<h1>Silahkan Lengkapi Pesanan Anda</h1>
				</div> -->
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
						<div class="order header">
							<div class="name">
								<span class="index">NO</span>
								<span class="line"></span>
								<span>PILIHAN LAYANAN</span>
							</div>
							<div class="availability">TERSEDIA</div>
							<div class="price">HARGA SEWA</div>
							<div class="unit">UNIT</div>
							<div class="nights"></div>
							<div class="total-price">TOTAL HARGA</div>
						</div>
						<div class="orders"></div>
						<div class="nav-button animation anim-slide-down-up disappear">
							<span>Saya memesan 2 Deluxe Room & 1 Executive Room, </span><a next="3" class="form-nav">Lanjutkan</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="step-3" class="form-reservasi gone" condition="optional">
			<div class="wrapper">
				<div class="form-title animation anim-slide-left-right disappear">
					<h1>Apakah Ada Tambahan ?</h1>
					<p>Kami menyediakan fasilitas tambahan untuk kenyamanan anda</p>
				</div>
				<div class="order header">
					<div class="name">
						<span class="index">NO</span>
						<span class="line"></span>
						<span>LAYANAN TAMBAHAN</span>
					</div>
					<!-- <div class="availability">TERSEDIA</div> -->
					<div class="price">HARGA SEWA</div>
					<div class="unit">UNIT</div>
					<div class="nights"></div>
					<div class="total-price">TOTAL HARGA</div>
				</div>
				<div class="orders">
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span>Tidak ada tambahan, </span><a next="4" class="form-nav">Lanjutkan</a>
				</div>
			</div>
		</div>

		<div id="step-4" class="form-reservasi gone" condition="must-filled">
			<div class="wrapper">
				<div class="form-title flex animation anim-scale-black disappear">
					<h1 class="flex-grow-1">Beritahu Kami Tentang Anda</h1>
					<div>
						<button id="btn-open-guest" class="btn">Pesan untuk tamu</button>
					</div>
				</div>
				<div class="mobile-visible">
					<div class="md-form">
						<input type="text" id="form1" class="form-control" name="identitas_nama" spellcheck="false" placeholder="Nama Lengkap Anda">	
						<label for="form1" class="active">NAMA LENGKAP</label>
					</div>
					<div class="md-form">
						<input type="text" id="form1" class="form-control" name="identitas_telepon" spellcheck="false" placeholder="0000-0000-0000">	
						<label for="form1" class="active">TELEPON</label>
					</div>
					<div class="md-form">
						<input type="text" id="form1" class="form-control" name="identitas_email" spellcheck="false" placeholder="john_doe@mail.com">	
						<label for="form1" class="active">E-MAIL</label>
					</div>
				</div>
				<div class="form animation anim-scale-black disappear">
					<div class="bg"></div>
					<div class="form-dialog animation anim-blink disappear gone">
						<div class="header">
							<h3>Identitas Tamu</h3>
							<p>Informasi data diri tamu yang akan check-in</p>
						</div>
						<div class="body">
							<div>
								<div class="input-wrapper">
									<label>NAMA</label>
									<input type="text" name="name_for" placeholder="Nama Lengkap">
								</div>
							</div>
							<div>
								<div class="input-wrapper">
									<label>TELEPON</label>
									<input type="text" name="phone_for" placeholder="xxxx-xxxx-xxxx">
								</div>
							</div>
						</div>
						<div>
							<button id="btn-confirm-guest" class="btn">Ok !</button>
						</div>
					</div>		
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
					<span>silahkan hubungi saya di </span>
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
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<span>Identitas saya sudah benar, </span><a id="btn-submit-detail" next="5" class="form-nav">Lanjutkan</a>
				</div>
			</div>
		</div>
		<div id="step-5" class="form-reservasi gone" condition="pass">
			<div class="wrapper">
				<div class="form-title flex">
					<div class="flex-grow-1">
						<h1 class="anim-slide-left-right animation disappear">Pilih Metode Pembayaran</h1>
						<p>Dan gunakan kode promo untuk mendapat potongan harga</p>	
					</div>
					<div class="kode-promo flex">
						<span>KODE PROMO</span>
						<div class="input-wrapper">
							<input type="text" name="kode_promo" placeholder="# xxxxxxx">
							<div id="btn-check-promo">
								<i class="fas fa-check promo-true"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<div class="mobile-visible text-center">
						<label>TOTAL PESANAN</label>
						<h1 class="val-grand-total">Rp 550.000</h1>
					</div>
					<h1 class="mobile-invisible">Total pesanan anda adalah <span class="val-grand-total">Rp 550.000</span></h1>
					<p>Setelah melakukan pemesanan, anda akan memiliki waktu 45 menit untuk melengkapi pembayaran</p><!-- 
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
							DP 30% (<span class="val-half-payment">Rp 0</span>)
						</span>
					</div> -->
				</div>
				<div class="nav-button animation anim-slide-down-up disappear">
					<a next="6" class="form-nav">Lihat Pesanan</a>
				</div>	
			</div>
			
		</div>
		<div id="step-6" class="form-reservasi gone" condition="pass">
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
							<p class="val-detail-pesanan font-number"><span class="val-lama-inap">1</span> malam / 2 kamar</p>
						</div>
						<div class="info">
							<span><b>TOTAL PESANAN</b></span>
							<p class="val-grand-total font-number">Rp 860.000</p>
						</div>
						<div class="info nav-button">
							<button class="btn btn-black btn-book">BOOK NOW</button>
						</div>
					</div>
					<div class="mobile-visible">
						<div class="flex">
							<div class="mobile-info">
								<span><b>CHECK-IN</b></span>
								<p class="val-start-date font-number">31 Okt 2019</p>
							</div>
							<div class="mobile-info">
								<span><b>CHECK-OUT</b></span>
								<p class="val-end-date font-number">01 Nov 2019</p>
							</div>
							<div class="mobile-info">
								<span><b>DETAIL PESANAN</b></span>
								<p class="val-detail-pesanan font-number"><span class="val-lama-inap">1</span> malam</p>
							</div>
						</div>
						<button class="btn btn-black btn-book">BOOK NOW</button>
					</div>
					<div class="content animation anim-slide-down-up disappear">
						<div class="order header">
							<div class="name">
								<span class="index">NO</span>
								<span class="line"></span>
								<span>LAYANAN TAMBAHAN</span>
							</div>
							<!-- <div class="availability">TERSEDIA</div> -->
							<div class="price">HARGA SEWA</div>
							<div class="unit">UNIT</div>
							<div class="nights"></div>
							<div class="total-price">TOTAL HARGA</div>
						</div>
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
						<!-- <div class="nav-button animation anim-slide-down-up disappear">
							<span><button id="btn-book" class="btn">BOOK NOW</button></span>
						</div> -->
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
		'name_for' : '',
		'phone_for' : '',
		'email_for' : '',
		'promo_id' : null,
		'items' : []
	};
	var orders = {
		'nama_pemesan' : '',
		'email_pemesan' : '',
		'telepon_pemesan' : '',
		'metode_pembayaran' : true,
		'lama_inap' : 0,
		'total_per_malam' : 0,
		'grand_total' : 0,
		'kode_promo' : 0,
		'items': []
	};

	$(document).ready(function() {
		showForm('1');

		var resorts 		   	= {!! $data !!}.data;
		var extra_item 			= {!! $extra_item !!};
		var config 				= {!! $config !!};
		var item_id 			= {!! json_encode($item_id) !!};
		var end_date 		   	= {!! json_encode($end_date) !!};
		var start_date 		   	= {!! json_encode($start_date) !!};
		var business_id 	   	= {!! json_encode($business_id) !!};

		$('input[name="business_id"]').val(business_id);
		if (business_id == 1) {
			$('#form-resort').show();
		} else if (business_id == 2) {
			$('#business-text').text('Pesan area camping untuk tanggal ');
			$('.val-nama-business').text('Camp Area');
			$('#form-resort').show();
		} 
	

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
			var id_resort = resort.id;
			var nama_resort = resort.name;

			var $list = $('<li id="' + id_resort + '">' + nama_resort + '</li>');

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
			$('.text-field-wrapper.show').removeClass('fade');
			$('.form-dialog').addClass('disappear');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
				$('.text-field-wrapper.show').removeClass('show');
				$('.form-dialog').addClass('gone');
			}, 500);
		})

		$('#btn-check-promo').on('click', function() {
			showLoader('Checking Promo');
			var kode_promo = $('input[name="kode_promo"]').val();

			$.post(
				base_url + '/promo',
				{
					'_token' : '{{ csrf_token() }}',
					'promo_code' : kode_promo
				},
				function(data) {
					if (data != '') {
						var promo = $.parseJSON(data);
						var id_promo = promo.id;
						var disc = (promo.amount_percent == null) ? promo.amount_fixed : promo.amount_percent;
						var items = promo.items;

						obj_booking.promo_id = id_promo;
						orders.kode_promo = id_promo;

						$.each(items, function(index, item) {
							const item_id = item.item.id;

							$.each(orders.items, function(index2, item2) {
								const ordered_item_id = item2.real_id;
								const harga = item2.harga;
								const total_harga = item2.total_harga;

								if (item_id == ordered_item_id) {
									const int_diskon = (promo.amount_percent == null) ? disc : disc * parseInt(harga);
									item2.diskon = int_diskon;
									item2.after_diskon = parseInt(total_harga) - int_diskon;
								}
							})
						})

						var grand_total_diskon = calculateDiscountBill();

						var half_payment = 0.3 * grand_total_diskon;
							half_payment = accounting.formatMoney(
								half_payment, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
							grand_total_diskon = accounting.formatMoney(
								grand_total_diskon, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

						$('.val-half-payment').text(half_payment);
						$('.val-grand-total').text(grand_total_diskon);

						calculateDiscount();	
					}
					

					hideLoader();
				}
			)
		})

		$('.mobile-visible input').on('change', function() {
			var input_name = $(this).attr('name');
			var value = $(this).val();
			
			var $target = $(this).closest('.mobile-visible').next().find('input[name="' + input_name + '"]');

			console.log($target);
				$target.val(value);
		})

		$('.form-next').on('click', function() {
			showLoader('Memuat Data');
			var start_date = $('input[name="start_date"]').val();
			var end_date = $('input[name="end_date"]').val();
			var id_resort = $('ul.list-resort li.active').attr('id');
			var id_business = $('input[name="business_id"]').val();
			var nama_resort = $('ul.list-resort li.active').text();

			day_diff = Math.round(dateDiffInDays(start_date, end_date));

			if (business_id == 1) {
				loadExtraItem(extra_item);
			} else if (business_id == 2) {
				loadExtraItem2(extra_item);
			}	

			$.post(
				base_url + '/resort/availability',
				{
					'_token' : '{{ csrf_token() }}',
					'start_date' : start_date,
					'end_date' : end_date,
					'business_id' : id_business,
					'id_resort' : id_resort
				},
				function(data) {
					var resort_variant = $.parseJSON(data).availability;

					$('#step-2 .orders').empty();

					$.each(resort_variant, function(index, kamar) {
						const item_detail = kamar.details.filter(detail => detail.is_booked === 0);
						var id_kamar = item_detail[0].id;
						var fake_id = kamar.id;
						var nama_kamar = kamar.name;
						var id_harga = kamar.price.id;
						var harga = kamar.price.service_price;
						var harga_string = accounting.formatMoney(
							harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
						var sisa_kamar = kamar.count_availability;

						var $kamar = 
							'<div id="' + id_kamar + '" class="order flex" for="' + fake_id + '">' +
								'<div class="flex name">' +
									'<span class="index"><span>' + (index + 1) + '</span><i class="fas fa-check deselect"></i></span>' +
									'<span class="line"></span>' +
									'<span>' + nama_kamar + '</span>' + 
								'</div>' +
								'<div class="availability">' + 
									'<span>' + sisa_kamar + ' kamar</span>' + 
								'</div>' +
								'<div class="price">' + 
									'<span>' + harga_string + '<span class="mobile-invisible"> / malam</span></span>' +
									'<input id="' + id_harga + '" type="hidden" name="harga" value="' + harga + '">' +
								'</div>' +
								'<div class="unit">' +
									'<span>x</span> <input type="number" class="input-unit fillable" value="0" min="1" disabled="true">' +
								'</div>' +
								'<div class="nights">' +
									'<span>' + day_diff + ' malam</span>' +
									'<input type="hidden" name="lama_inap" value="' + day_diff + '">' +
								'</div>' +
								'<div class="total-price">' +
									'<span>Rp 0</span>' +
									'<input type="hidden" name="total_harga" value="0">' +
								'</div>' +
							'</div>';

						$('#step-2 .orders').append($kamar);
					})

					start_date = dateToString(start_date, 'short');
					end_date = dateToString(end_date, 'short');

					$('.val-nama-item').text(nama_resort);
					$('.val-start-date').text(start_date);
					$('.val-end-date').text(end_date);
					$('.val-lama-inap').text(day_diff);

					$('.order input[type="number"]').on('keyup', inputNumberListener);
					$('.order input[type="number"]').on('change', inputNumberListener);
					$('.order input.checkbox').on('change', checkboxListener);
					$('#step-2 .order').on('click', function(e) {
						var condition = $(this).hasClass('selected');
						var target = $(this).find('.input-unit');

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

					hideLoader();
				}
			)
		})
		
		$('.form-nav').on('click', function() {
			var key = $(this).attr('next');
			
			showForm(key);
		})

		$('#btn-submit-detail').on('click', async function() {
			var nama_resort = $('.list-resort').find('li.active').text();
			var check_in = $('input[name="start_date"]').val();
			var check_out = $('input[name="end_date"]').val();
			var how_many_nights = Math.round(dateDiffInDays(check_in, check_out));
			var nama_pemesan = $('.form input[name="identitas_nama"]').val();
			var telepon = $('.form input[name="identitas_telepon"]').val();
			var email = $('.form input[name="identitas_email"]').val();

			var start_time = moment(check_in + 'T' + config.hour_check_in).format('YYYY-MM-DD HH:mm:SS');
			var end_time = moment(check_out + 'T' + config.hour_check_out).format('YYYY-MM-DD HH:mm:SS');

			const params = `booking_date=${check_in}`;
			const bookingTimeOut = await $.getJSON(`https://api.resort.shafarizkyf.com/api/booking-time-out?${params}`);

			if(bookingTimeOut){
				obj_booking.booking_time_out_id = bookingTimeOut.id;
			}

			orders.nama_pemesan = nama_pemesan;
			orders.email_pemesan = email;
			orders.telepon_pemesan = telepon;
			orders.lama_inap = how_many_nights;

			obj_booking.name = nama_pemesan;
			obj_booking.phone = telepon;
			obj_booking.email = email;

			$('#step-6').find('.orders').empty();

			var grand_total = 0;
			var current_index = 0;
			var array_item = [];

			$('#step-2 .orders').find('.order.selected').each(function(index) {
				var $order = $(this).clone();
					$order.removeClass('selected');
					$order.find('.availability').remove();

				var unit = $order.find('.unit').find('input[type="number"]').val();
					$order.find('.unit').find('input').attr('type', 'hidden');
					$order.find('.unit').find('span').text('x ' + unit);

				current_index = index + 1;

					$order.find('.index span').text(current_index);

				var id_kamar = $order.attr('id');
				var real_id = $order.attr('for');
				var harga = parseInt($order.find('.price input').val());

				var total_harga = parseInt($order.find('input[name="total_harga"]').val());

				grand_total += parseInt(total_harga);
				

				var obj_kamar = {
					'item_detail_id' : id_kamar,
					// 'price_id' : id_harga,
					'person' : unit,
					'start_time' : start_time,
					'end_time' : end_time
				};

				var order = {
					'real_id' : real_id,
					'item_id' : id_kamar,
					'unit' : unit,
					'harga' : harga,
					'total_harga' : total_harga,
					'diskon' : 0,
					'after_diskon' : total_harga
				}

				array_item.push(obj_kamar);
				orders.items.push(order);

				$('#step-6').find('.orders').append($order);
			})

			$('#step-3 .orders').find('.order.selected').each(function(index) {
				var $order = $(this).clone();
					$order.removeClass('selected');
					$order.find('.index span').text(current_index + (index + 1));

				var unit = $order.find('.unit').find('input[type="number"]').val();
					$order.find('.unit').find('input').remove();
					$order.find('.unit').find('span').text('x ' + unit);

				var id_kamar = $order.attr('id');
				var real_id = $order.attr('for');
				var harga = parseInt($order.find('.price input').val());

				var total_harga = parseInt($order.find('input[name="total_harga"]').val());

				grand_total += parseInt(total_harga);

				var obj_kamar = {
					'item_detail_id' : id_kamar,
					// 'price_id' : id_harga,
					'person' : unit,
					'start_time' : start_time,
					'end_time' : end_time
				};

				var order = {
					'real_id' : real_id,
					'item_id' : id_kamar,
					'unit' : unit,
					'harga' : harga,
					'total_harga' : total_harga,
					'diskon' : 0,
					'after_diskon' : total_harga
				}

				array_item.push(obj_kamar);
				orders.items.push(order);

				$('#step-6').find('.orders').append($order);
			})

			obj_booking.items = array_item;

			console.log(obj_booking);

			orders.grand_total = grand_total;

			grand_total = accounting.formatMoney(
						grand_total, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			$('.val-grand-total').text(grand_total);
		})

		$('.btn-book').on('click', function() {

			obj_booking.full_payment = true;

			$.ajax({
				url: 'https://api.resort.shafarizkyf.com/api/booking',
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

			// $.post(
			// 	base_url + '/booking',
			// 	{
			// 		'_token' : '{{ csrf_token() }}',
			// 		'booking_data' : JSON.stringify(obj_booking)
			// 	},
			// 	function(data) {
			// 		var data = $.parseJSON(data);

			// 		if (data.success) {
			// 			alert('Booking Berhasil');	
			// 			window.location.replace('/book-detail');
			// 		} else {
			// 			alert('Booking Gagal');
			// 		}
			// 	}
			// )
		})

		$('#btn-open-guest').on('click', function() {
			$('.bg').show();
			$('.form-dialog').removeClass('gone');

			setTimeout(function() {
				$('.form-dialog').removeClass('disappear');				
			}, 200);
		})

		$('#btn-confirm-guest').on('click', function() {
			$('.bg').hide();
			$('.form-dialog').addClass('disappear');

			var name_for = $('input[name="name_for"]').val();
			var phone_for = $('input[name="phone_for"]').val();
			var email_for = $('input[name="email_for"]').val();

			if (name_for != '') {
				obj_booking.name_for = name_for;
				obj_booking.phone_for = phone_for;
				obj_booking.email_for = email_for;

				$('#btn-open-guest').text('Tamu : ' + name_for);
			}

			setTimeout(function() {
				$('.form-dialog').addClass('gone');								
			}, 500);
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
			const nama_item = item.item.name;

			if (item.item.count_availability != 0) {
				let id_item = item.item.details.filter(detail => detail.is_booked === 0);
				if(id_item.length){
					id_item = id_item[0].id;
					const fake_id = item.item.id;
					const id_harga = item.item.price.id;
					const harga = item.item.price.service_price;
					const harga_string = accounting.formatMoney(
								harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

					var $extra_item = 
						'<div id="' + id_item + '" class="order flex" for="' + fake_id + '">' +
							'<div class="flex name">' +
								'<span class="index"><span>' + (index + 1) + '</span><i class="fas fa-check deselect"></i></span>' +
								'<span class="line"></span>' +
								'<span>' + nama_item + '</span>' + 
							'</div>' +
							'<div class="price">' + 
								'<span>' + harga_string + '<span class="mobile-invisible"> / pcs</span></span>' +
								'<input type="hidden" name="harga" value="' + harga + '">' +
							'</div>' +
							'<div class="unit">' +
								'<span>x</span> <input type="number" class="input-unit fillable" value="0" min="1" disabled="true">' +
							'</div>' +
							'<div class="nights">' +
								'<span>' + day_diff + ' malam</span>' +
								'<input type="hidden" name="lama_inap" value="' + day_diff + '">' +
							'</div>' +
							'<div class="total-price">' +
								'<span>Rp 0</span>' +
								'<input id="' + id_harga + '" type="hidden" name="total_harga" value="0">' +
							'</div>' +
						'</div>';

					$('#step-3 .orders').append($extra_item);	
				}

			}
		})

		$('.order input[type="number"]').on('keyup', inputNumberListener);
		$('.order input[type="number"]').on('change', inputNumberListener);
		$('.order input.checkbox').on('change', checkboxListener);
		$('#step-3 .order').on('click', function(e) {
			var condition = $(this).hasClass('selected');
			var target = $(this).find('.input-unit');

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

	function loadExtraItem2(extra_item) {
		console.log(extra_item);
		$('#step-3 .orders').empty();

		if (extra_item.data.length != 0) {
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
						'<div class="nights">' +
							'<span>' + day_diff + ' malam</span>' +
							'<input type="hidden" name="lama_inap" value="' + day_diff + '">' +
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
		var lama_inap = $(this).closest('.order').find('input[name="lama_inap"]').val();
		var qty = $(this).val();

		var total_harga = qty * parseInt(harga) * parseInt(lama_inap);

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

    function calculateDiscount() {
    	$.each(orders.items, function(index, item) {
    		var id_item = item.item_id;
    		var total_harga = item.after_diskon;
    		var diskon = item.diskon;

    		if (diskon != 0) {
    			total_harga = accounting.formatMoney(
					total_harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
    			diskon = accounting.formatMoney(
					diskon, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

	    		$('#step-6 .orders').find('.order#' + id_item).find('.total-price span').text(total_harga);
	    		$('#step-6 .orders').find('.order#' + id_item).find('.total-price').append('<label class="label-disc">DISC ' + diskon + '</label>');
    		}
    			
    	})
    }
	
	function calculateDiscountBill() {
		var grand_total = 0;

		$.each(orders.items, function(index, item) {
			var after_diskon = item.after_diskon;

			grand_total = grand_total + after_diskon;
		});

		return grand_total;
	}

</script>
</html>