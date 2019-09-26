<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<style type="text/css">
		a, a:hover {
			color: inherit;
			border: 0;
		}

		body {
			font-family: Raleway !important;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }

		.bg {
			width: 100%;
			height: 100vh;
			position: absolute;
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

		.order-steps {
			padding: 80px 120px 50px;
		}

		.order-steps .step {
			flex-grow: 1;
			margin-right: 4px;
		}

		.order-steps .step .bar {
			height: 3px;
			width: 100%;
			background: #dcdcdc;
		}

		.order-steps .step p {
			font-family: Calibri Light;
		    margin-top: 10px;
		    letter-spacing: 3px;
		    font-size: 1.2em;
		}

		.order-steps .step.finished .bar {
			background: #61cc82;
		}

		.order-steps .step.finished p {
			color: #09ad3c;
			font-weight: bold;
		}

		.navbar {
			height: auto;
			padding: 0px 120px;
			/*display: flex;*/
			padding-bottom: 0;
		}

		.navbar h1 {
			flex-grow: 1;
		}

		.form-reservasi {
			padding: 0px 120px;
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

		.background h1 {
		    font-family: Raleway;
		    font-weight: 700;
		    letter-spacing: 4px;
		}

		.background .form-reservasi span {
			font-size: 2.9em;
		    line-height: 80px;
		    font-weight: 300;
		    letter-spacing: 5px;
		    word-spacing: 20px;
		    /*padding-bottom: 50px;*/
		    /*border-bottom: 1px solid #dcdcdc;*/
		}

		.background .navbar p, .orders>p {
			font-size: 1.2em;
			letter-spacing: 3px;
		}

		.flex {
			display: flex;
			align-items: center;
		}

		.nav-button {
		    text-align: right;
		    padding: 50px 120px;
		    /*margin-top: 50px;*/
		}

		.nav-button span {
		    font-size: 1.3em;
    		letter-spacing: 2px;
		}

		.nav-button span a {
		    font-weight: 800;
		    margin-left: 20px;
		    padding-bottom: 10px;
		    border-bottom: 2px solid;
		    letter-spacing: 3px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="background">
		<div class="bg"></div>
		<div class="order-steps flex">
			<div class="step finished">
				<div class="bar"></div>
				<p>1. LIHAT JADWAL</p>
			</div>
			<div class="step finished">
				<div class="bar"></div>
				<p>2. RESERVASI</p>
			</div>
			<div class="step active">
				<div class="bar"></div>
				<p>3. EXTRA ORDER</p>
			</div>
			<div class="step active">
				<div class="bar"></div>
				<p>4. IDENTITAS DIRI</p>
			</div>
			<div class="step">
				<div class="bar"></div>
				<p>5. PEMBAYARAN</p>
			</div>
		</div>
		
		<div class="form-reservasi">
			<div class="form-title">
				<h1>Apakah Ada Tambahan ?</h1>
				<p>Kami menyediakan fasilitas tambahan untuk kenyamanan anda</p>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>BANTAL</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>ROOM SERVICE</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>GULING</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>DINNER</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>GULING</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>DINNER</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>SINGLE BED</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="tambahan">
				<label></label>
				<div class="nama">
					<b>GULING</b>
				</div>
				<div class="harga"> Rp 10.000/pcs</div>
			</div>
			<div class="nav-button">
				<span>Tidak ada tambahan, <a>Lanjutkan</a></span>
			</div>
		</div>
		
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('input[name="date"]').datepicker({ dateFormat: 'dd/mm/yy' });
		$('.input-field-toggle').on('click', function() {
			showInput($(this));
		});

		$('.text-field button').on('click', function() {
			$('.bg').hide();
			$('.text-field-wrapper.show').parent().find('.input-field-toggle').text($(this).prev().val());	
			$('.text-field-wrapper.show').removeClass('fade');
			setTimeout(function() {
				$('.text-field-wrapper.show').removeClass('show');
			}, 500);
		});

		$('.input-field.tanggal .input-field-toggle').on('click', function() {
			$(this).next().focus();
		});
		$('input[name="date"]').on('change', function() {
			var date = dateToString($(this).val());
			$('.bg').hide();
			$(this).parent().find('.input-field-toggle').text(date);
		})

		$('.bg').on('click', function() {
			$('.bg').hide();

			$('.input-field ul.show').removeClass('fade');
			setTimeout(function() {
				$('.input-field ul.show').removeClass('show');
			}, 500);
		})

		// $(document).on('click', function(e) {
		// 	var $target = $('.bg');
  //           var $trigger = $('.input-field ul.show');

  //           if ($target.parent().hasClass('show')) {
  //               if (!$target.is(e.target) && $target.has(e.target).length === 0) {
  //                   if (!$trigger.is(e.target)) {
  //                       $('.overlay').removeClass('show');
  //                   }
  //               }   
  //           }
		// })
	})

	function showInput(trigger) {
		$('.bg').show();
		trigger.parent().find('.text-field-wrapper').addClass('show');

		setTimeout(function() {
			trigger.parent().find('.text-field-wrapper').addClass('fade');	
		}, 100);
		
	}

	function hideInput() {
		
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
        var day = date.split('/')[0];
        var month = date.split('/')[1];
        var year = date.split('/')[2];
        var newDate = day + ' ' + monthString(month) + ' ' + year;

        return newDate;
    }
	
</script>
</html>