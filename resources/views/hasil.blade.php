<!DOCTYPE html>
<html>
<head>
	<title>Palawi Resort</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom-fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font awesome/css/font-awesome.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.v2.0.3.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
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

		.background {
			background: #fff;
			width: 100%;
			/*height: 100vh;*/
			background-size: 130%;
		}

		.navbar {
			width: 100%;
			display: flex;
			padding: 50px 180px;
			align-items: center;
		}

		.navbar .logo, .navbar .special {
			width: 10%;
		}

		.navbar .special img {
			border: 1px solid #000;
			border-radius: 50%;
			padding: 10px;
		}

		.navbar .logo h1 {
			font-size: 1.5em;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 4px;
			margin: 0;
		}

		.navbar .nav {
			flex-grow: 1;
			text-align: center;
		}

		.navbar .nav>li {
		    display: inline-block;
		    margin: 0px 30px;
		    font-size: 1em;
		    font-weight: 500;
		    letter-spacing: 2px;
		    position: relative;
		}

		.navbar .nav>li>span {
		    position: relative;
		}

		.navbar .nav>li.active {
			font-weight: 700;
		}

		.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: 10px;
		    left: -8px;
		    width: 100%;
		    height: 10px;
		    background: #0fffbe;
		}

		.navbar .special {
			text-align: right;
		}

		.navbar .special button {
			padding: 12px 25px;
			font-weight: 600;
			letter-spacing: 2px;
		}

		.filter {
			width: 100%;
			padding: 20px;
			background: #fff;
			border-bottom: 1px solid #dcdcdc;
			display: flex;
			align-items: center;
		}

		.filter>div {
			border: 1px solid #dcdcdc;
			border-radius: 5px;
			flex-grow: 1;
			margin-right: 15px;
		}

		.filter>div input {
			padding: 15px;
			border: none; background: transparent;
			font-size: 1.2em;
			letter-spacing: 2px;
		}

		.content {
			position: relative;
			display: flex;
			padding: 0px 180px;
		}

		.content .right-content {
			flex-grow: 1;
		}

		.content .right-content .result-info {
			display: flex;
			align-items: center;
			margin-bottom: 50px;
		}

		.content .right-content .result-info .desc {
			flex-grow: 1;
		}

		.content .right-content .result-info .desc p {
			font-size: 1em;
			letter-spacing: 2px;
		}

		.content .right-content .result-info .desc p>b {
			font-weight: 800;
		}

		.content .right-content .result-info .desc span {
			font-size: 1em;
			letter-spacing: 2px;
		}

		.content .right-content .result-info .sorting {
			display: flex;
			align-items: center;
			letter-spacing: 1px;
		}

		.content .right-content .result-info .sorting>ul {
			margin: 0;
			padding-left: 15px;
		}

		.content .right-content .result-info .sorting ul>li {
			display: inline-block;
			padding: 5px 10px;
			border: 1px solid #000;
			font-weight: 600;
			cursor: pointer;
			
		}
		.content .right-content .result-info .sorting ul>li:first-child {
			border-right: 0;
		}
		.content .right-content .result-info .sorting ul>li.active {
			background: #0fffbe;
		}

		.content .right-content .room-info {
			/*display: flex;*/
			padding: 10px 0px;
			font-size: 0.8em;
			border-bottom: 1px dashed #dcdcdc;
			letter-spacing: 2px;
		}

		.content .right-content .room-info>div {
			flex-grow: 1;
		}

		.content .right-content .thumbnails {
			column-count: 3;
			column-gap: 70px;
		}

		.content .right-content .thumbnails .card {
			column-break-inside: avoid;
			display: inline-block;
			margin-bottom: 50px;
			width: 100%;
		}

		.content .right-content .thumbnails .thumbnail {
	        height: 300px;
		    border: 0;
		    border-radius: 15px;
		    overflow: hidden;
		    padding: 25px;
		    background-size: cover;
		    /*margin-bottom: 40px;*/
		    /*box-shadow: 2px 2px 0px 0px #656565;*/
		    background-image: url('../img/thumbnail-1.jpeg');
		}

		.content .right-content .thumbnails .thumbnail span {
            text-shadow: 0px 0px 5px #000;
		    letter-spacing: 4px;
		    color: #fff;
		    border-radius: 5px;
		    margin-right: 8px;
		    font-weight: 900;
		}

		.content .right-content .thumbnails .col-md-4 {
			border-radius: 10px;
			margin-bottom: 60px;
			padding-right: 30px;
			padding-left: 30px;
		}

		/*.content .right-content .thumbnails .thumbnail:hover .desc {
	        margin-top: 0;
	        background: #000000a3;
		}		*/

		.content .right-content .thumbnails .desc {
		    /*height: 100%;*/
		    width: 100%;
		    background: #fff;
		    /*margin-top: 200px;*/
	        color: #000;
		    font-size: 1.2em;
		    padding: 20px 15px;
		    padding-top: 35px;
		    position: relative;
		    box-sizing: border-box;
		}

		.content .right-content .thumbnails .desc:before {
			background: #000;
			box-shadow: 10px 0px 0px 0px, 20px 0px 0px 0px;
			/*content: '';*/
			height: 20px;
			left: 25px;
			position: absolute;
			top: 0px;
			width: 3px;
		}

		.content .right-content .thumbnails .desc .header {
			display: flex;
			align-items: end;
		}

		.content .right-content .thumbnails .desc .header>div:first-child {
			flex-grow: 1;
		}
		.content .right-content .thumbnails .desc .header>div:first-child>p {
			margin-top: 5px;
			margin-bottom: 0px;
		}

		.content .right-content .thumbnails .desc .header>.location {
		    position: relative;
		    width: 40px;
		    letter-spacing: 1px;
		    line-height: 15px;
		    font-size: 0.55em;
		    font-weight: 900;
		    word-break: break-word;
		    padding: 10px 0px;
		}
		.content .right-content .thumbnails .desc .header>.location:before {
	        content: '';
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    border: 3px solid #00cca4;
		    top: 0;
		    left: 8px;
		}
		.content .right-content .thumbnails .desc .header>.location span {
		    background: #fff;
		    padding: 2px 0px;
		    position: relative;
		    width: 60px;
		    text-transform: uppercase;
		}

		.content .right-content .thumbnails .desc .header b {
			font-weight: 700;
    		letter-spacing: 2px;
    		font-size: 1.2em;
		}

		.content .right-content .thumbnails .desc .header small {
			font-size: 0.5em;
			font-weight: 500;
			letter-spacing: 2px;
		}

		.content .right-content .thumbnails .desc .header p {
			letter-spacing: 1px;
			/*border-bottom: 1px dashed #dcdcdc;*/
			padding-bottom: 20px;
			/*margin-top: 10px;*/
		}

		.content .right-content .thumbnails .desc .header p span {
		    font-size: 1em;
		    font-weight: 500;
		    /*color: #ffc53e;*/
		}

		.content .right-content .thumbnails .desc .header p span.luas-area {
			font-size: 1.8em;
		}

		.content .right-content .thumbnails .desc .variant {
			display: flex;
			align-items: center;
			margin-bottom: 20px;
		}

		.content .right-content .thumbnails .desc .variant .line {
			height: 2px;
			border-top: 1px solid #b5b5b5;
			flex-grow: 1;
			margin: 0px 20px;
		}

		.content .right-content .thumbnails .desc .variant p {
			margin: 0;
		}

		.content .right-content .thumbnails .desc .list-icons {
			margin-top: 20px;
			display: flex;
			flex-flow: wrap;
		}

		.content .right-content .thumbnails .desc .list-icons span {
		    flex-grow: 1;
		    font-size: 0.8em;
		    letter-spacing: 1px;
		    margin-right: 8px;
		    margin-top: 8px;
		}

		.animation {
            transition: all 0.6s;
            transition-timing-function: cubic-bezier(0.25, 0.55, 0.265, 1);
        }
	</style>
</head>
<body>
	<div class="background">
		<div class="navbar">
			<div class="logo">
				<h1>PALAWI</h1>
			</div>
			<ul class="nav">
				<li class="active"><span>PENCARIAN</span></li>
				<li><span>KONTAK</span></li>
				<li><span>PESANAN ANDA</span></li>
			</ul>
			<div class="special">
				<img src="{{ asset('img/scissors.png') }}" width="50px">
			</div>	
		</div>
		<div class="content">
			<div class="right-content">
				<div class="result-info">
					<div class="desc">
						<p>SEARCH > <b class="business-name">CAMPING AREA</b></p>
						<span id="count-data"></span>
					</div>
					<div class="sorting">
						<small>SORT BY</small>
						<ul class="inline">
							<li><small>HARGA</small></li><li class="active"><small>LUAS AREA</small></li>
						</ul>
					</div>
				</div>
				<div class="thumbnails">
				</div>
			</div>
		</div>
	</div>

	<form id="form-target" method="POST" action="/detail" hidden>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="start_date" value="{{ $start_date }}">
		<input type="text" name="end_date" value="{{ $end_date }}">
		<input type="hidden" name="business_id">
		<input type="hidden" name="data">

		<button type="submit">OK</button>
	</form>
</body>
<script type="text/javascript">
	var data = {!! $result !!};
	var catalog = {!! json_encode($catalog) !!};
	var result = data.data;
	console.log(catalog);

	console.log(data);

	$('.thumbnails').empty();

	if (catalog == 'Resort') {
		loadResortCatalog();
		$('input[name="business_id"]').val(1);
	} else if (catalog == 'Camping') {
		loadCampingCatalog();
		$('input[name="business_id"]').val(2);
	}

	$('.thumbnail').on('click', function() {
		var id_resort = parseInt($(this).parent().attr('id'));

		var data = result.filter(detail => detail.id === id_resort)[0];
			data = JSON.stringify(data);

		$('#form-target').find('input[name="data"]').val(data);
		$('#form-target').find('button').click();
	})

	function loadResortCatalog() {
		$('.business-name').text('RESORT');
		$('#count-data').html('Menampilkan <span class="font-number">' + result.length + '</span> Pilihan Resort Tersedia');

		$.each(result, function(index, resort) {
			var id_resort = resort.id;
			var nama_resort = resort.name;
			var harga_sewa = resort.price.service_price;
				harga_sewa = accounting.formatMoney(harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
			var fasilitas_villa = resort.villa_facilities;
			var lokasi = resort.location.name;

			var tipe_kamar = resort.availability;

			if (tipe_kamar.length > 1) {
				var harga_terendah = 0;
				var harga_tertinggi = 0;

				$.each(tipe_kamar, function(index, kamar) {
					var nama_kamar = kamar.name;
					var harga = kamar.price.service_price;

					harga_terkini = harga;

					if (index == 0) {
						harga_terendah = harga;
						harga_tertinggi = harga;
					}

					if (harga < harga_terendah) {
						harga_terendah = harga;
					} else if (harga > harga_tertinggi) {
						harga_tertinggi = harga;
					}
				});

				harga_terendah = accounting.formatMoney(harga_terendah, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				harga_tertinggi = accounting.formatMoney(harga_tertinggi, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

				var $harga_rata = '<p><span class="font-number">' + harga_terendah + ' - ' + harga_tertinggi + '</span></p>';
			} else {
				var harga = tipe_kamar[0].price.service_price;
					harga = accounting.formatMoney(harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
				var $harga_rata = '<p><span class="font-number">' + harga + '</span> / malam</p>';
			}

			var $kamar_infos = '';

			$.each(tipe_kamar, function(index, kamar) {
				var nama_kamar = kamar.name;
				var sisa_kamar = kamar.count_availability;

				var $kamar_info = 
				'<div class="variant">' +
					'<p><b>' + nama_kamar + '</b></p>' +
					'<span class="line"></span>' +
					'<p>Sisa <span class="font-number">' + sisa_kamar + '</span> kamar</p>' +
				'</div>';

				$kamar_infos = $kamar_infos + $kamar_info;
			});	

			var $fasilitass = '';
			$.each(fasilitas_villa, function(index, fasilitas) {
				var nama_fasilitas = fasilitas.name;

				var $fasilitas = '<span>' + nama_fasilitas + '</span>';

				$fasilitass = $fasilitass + $fasilitas;
			});

			var $thumbnail = 
			'<div id="' + id_resort + '" class="card">' +
				'<div class="thumbnail">' +
				'</div>' +
				'<div class="desc animation">' +
					'<div class="header">' +
						'<div>' +
							'<b>' + nama_resort + '</b>' +
							$harga_rata +
						'</div>' +
						'<div class="location">' +
							'<span>' + lokasi + '</span>' +
						'</div>' +
					'</div>' +
					'<div class="room-info">' +
						$kamar_infos +
					'</div>' +
					'<div class="list-icons">' +
						$fasilitass +
					'</div>' +
				'</div>' +
			'</div>';

			$('.thumbnails').append($thumbnail);
		});	
	}

	function loadCampingCatalog() {
		$('.business-name').text('CAMPING AREA');
		$('#count-data').html('Menampilkan <span class="font-number">' + result.length + '</span> Camping Area Tersedia');

		console.log(result);

		$.each(result, function(index, resort) {
			var id_resort = resort.id;
			var nama_resort = resort.name;
			var luas_area = resort.wide.slice(0,-3);
			var lokasi = resort.location.name;
			var harga_sewa = resort.price.service_price;
				harga_sewa = accounting.formatMoney(harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

			var variant = resort.availability;

			var $kamar_infos = '';

			$.each(variant, function(index, kamar) {
				var nama = kamar.name;
				var max_capacity = kamar.max_out;
				var wide = kamar.wide;

				var $kamar_info = 
				'<div class="variant">' +
					'<p><b>' + nama + '</b></p>' +
					'<span class="line"></span>' +
					'<p><span class="font-number">' + wide + '</span> m<sup>2</sup> / Max. <span class="font-number">' + max_capacity + '</span> org</p>' +
				'</div>';

				$kamar_infos = $kamar_infos + $kamar_info;
			});

			var $thumbnail = 
			'<div id="' + id_resort + '" class="card">' +
				'<div class="thumbnail">' +
				'</div>' +
				'<div class="desc animation">' +
					'<div class="header">' +
						'<div>' +
							'<b>' + nama_resort + '</b>' +
							'<p><span class="font-number">' + harga_sewa + '</span> / malam</p>' +
						'</div>' +
						'<div class="location">' +
							'<span>' + lokasi + '</span>' +
						'</div>' +
					'</div>' +
					'<div class="room-info">' +
						$kamar_infos +
					'</div>' +
				'</div>' +
			'</div>';

			$('.thumbnails').append($thumbnail);
		});	
	}

</script>
</html>