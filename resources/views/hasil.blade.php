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

		.background {
			background: #f5f5f5;
			width: 100%;
			/*height: 100vh;*/
			background-size: 130%;
		}

		.navbar {
			width: 100%;
			padding: 40px 100px;
			background: #fff;
			border-bottom: 1px solid #dcdcdc;
			display: flex;
			align-items: center;
			margin: 0;
		}

		.navbar .logo {
			flex-grow: 1;
		}

		.navbar .logo h1 {
			color: #000;
			font-weight: bold !important;
			font-family: Raleway !important;
			letter-spacing: 5px;
			margin: 0;
		}

		.navbar .nav>li {
			display: inline-block;
			margin-left: 30px;
			font-size: 1.2em;
			font-weight: 700;
			color: #000;
			letter-spacing: 2px;
		}

		.navbar .nav>li.active {
			margin-right: 20px;
			margin-left: 50px;
		}

		.navbar .nav>li.active:before {
		    content: '';
		    position: absolute;
		    top: 6px;
		    left: -20px;
		    width: 8px;
		    height: 8px;
		    background: #737373;
		    border-radius: 50px;
		}

		.navbar .nav>li.active:after {
		    content: '';
		    position: absolute;
		    top: 6px;
		    right: -20px;
		    width: 8px;
		    height: 8px;
		    background: #737373;
		    border-radius: 50px;
		}

		.navbar .special {
			flex-grow: 1;
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

		.content .left-sidebar {
			min-width: 400px;
			display: none;
		}

		.content .left-sidebar h1 {
		    font-family: Raleway;
		    letter-spacing: 5px;
		    font-weight: 700;
		    font-size: 60px;
		}

		.content .left-sidebar .filter-tags {
			display: flex;
			padding: 0;
			margin-top: 30px;
		}

		.content .left-sidebar .filter-tags>li {
			display: flex;
			align-items: center;
			margin-right: 15px;
			padding: 8px 12px;
			border: 1px solid #b5b5b5;
			letter-spacing: 2px;
			border-radius: 5px;
		}

		.content .left-sidebar .filter-tags>li:last-child {
			margin: 0;
		}

		.content .left-sidebar .filter-tags>li i {
			margin-left: 10px;
		}

		.content .left-sidebar .filter {
			background: #fff;
		    padding: 20px 25px;
		    border-radius: 5px;
		    box-shadow: 2px 2px 0px 0px #dcdcdc;
		    margin-top: 20px;
		}

		.content .left-sidebar .filter .title {
			font-size: 1.1em;
		    letter-spacing: 2px;
		    margin-bottom: 25px;
		}

		.content .left-sidebar .filter .range-harga {
			border-bottom: 1px solid #b5b5b5;
			position: relative;
			margin-top: 40px;
			margin-bottom: 50px;
		}

		.content .left-sidebar .filter .range-harga input {
			padding: 8px 15px;
			border: 1px solid #b5b5b5;
			border-radius: 50px;
			letter-spacing: 2px;
			width: 160px;
			position: absolute;
			top: -20px;
		}

		.content .left-sidebar .filter .range-harga input[name="range-akhir"] {
			right: 0;
		}

		.content .left-sidebar .filter .slider {
			margin-top: 45px;
			border-radius: 50px;
			height: 5px;
			background: #ff9711;
			position: relative;
			margin-bottom: 20px;
		}

		.content .left-sidebar .filter .slider .point {
			background: #ff9711;
			width: 25px;
			height: 25px;
			border: 4px solid #fff;
			box-shadow: 0px 0px 0px 1px #ff9711;
			border-radius: 50px;
			position: absolute;
			top: -10px;
		}

		.content .left-sidebar .filter .slider .point.left {
			left: 0;
		}

		.content .left-sidebar .filter .slider .point.right {
			right: 0;
		}

		.content .left-sidebar .filter .list-filter {
			padding: 0;
			column-count: 2;
		}

		.content .left-sidebar .filter .list-filter>li:first-child {
			margin: 0;
		}

		.content .left-sidebar .filter .list-filter>li {
			display: flex;
			align-items: center;
			margin-top: 15px;
		}

		.content .left-sidebar .filter .list-filter>li span {
			width: 25px;
			height: 25px;
			border: 1px solid #b5b5b5;
			border-radius: 5px;
			margin-right: 15px;
		}

		.content .left-sidebar .filter .list-filter>li p {
			font-size: 1.1em;
			letter-spacing: 1px;
			margin: 0;
		}

		.content .right-content {
			flex-grow: 1;
		}

		.content .right-content .result-info {
			display: flex;
			align-items: center;
			margin-top: 15px;
			margin-bottom: 20px;
		}

		.content .right-content .result-info .desc {
			flex-grow: 1;
		}

		.content .right-content .result-info .desc p {
			font-size: 1.1em;
			letter-spacing: 2px;
		}

		.content .right-content .result-info .desc p>b {
			font-weight: 800;
		}

		.content .right-content .result-info .desc span {
			font-size: 1em;
			letter-spacing: 2px;
		}

		.content .right-content .result-info .pagination {
			background: #fff;
			border-radius: 5px;
			box-shadow: 2px 2px 0px 0px #dcdcdc;
		}

		.content .right-content .result-info .pagination button {
			background: transparent;
			border: 0;
			border-radius: 0px;
			font-weight: 600;
			letter-spacing: 2px;
			padding: 10px 15px;
		}

		.content .right-content .result-info .pagination button:first-child {
			
			border-right: 1px solid #b5b5b5;
		}

		.content .right-content .room-info {
			display: flex;
			padding: 10px 0px;
			font-size: 0.8em;
			border-bottom: 1px dashed #dcdcdc;
			letter-spacing: 2px;
		}

		.content .right-content .room-info>div {
			flex-grow: 1;
		}

		.content .right-content .thumbnails .thumbnail {
	        height: 300px;
		    border: 0;
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
		    padding: 20px 25px;
		    box-sizing: border-box;
		}

		.content .right-content .thumbnails .desc .header b {
			font-weight: 600;
    		letter-spacing: 2px;
    		font-size: 1.2em;
		}

		.content .right-content .thumbnails .desc .header p {
			letter-spacing: 1px;
			border-bottom: 1px dashed #dcdcdc;
			padding-bottom: 20px;
		}

		.content .right-content .thumbnails .desc .header p span {
		    font-size: 1.4em;
		    font-weight: 500;
		    color: #ffc53e;
		}

		.content .right-content .thumbnails .desc .list-icons {
			margin-top: 20px;
			display: flex;
			flex-flow: wrap;
		}

		.content .right-content .thumbnails .desc .list-icons span {
		    flex-grow: 1;
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
				<li>SEARCH</li>
				<li>CONTACT</li>
				<li class="active">GALLERY</li>
				<li>INFO WISATA</li>
			</ul>
			<div class="special">
				<button class="btn btn-warning"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
			</div>	
		</div>
		<div class="filter">
			<div>
				<input type="text" name="" placeholder="Check-In">
			</div>
			<div>
				<input type="text" name="" placeholder="Check-Out">
			</div>
			<div>
				<input type="text" name="" placeholder="Location">
			</div>
			<div>
				<input type="text" name="" placeholder="Harga">
			</div>
			
		</div>
		<div class="content">
			<div class="left-sidebar">
				<h1>12 Pilihan</h1>
				<ul class="filter-tags">
					<li>
						<span>Rp 100.000 - Rp 500.000</span>
						<i class="fas fa-times"></i>
					</li>
					<li>
						<span>TV</span>
						<i class="fas fa-times"></i>
					</li>
				</ul>
				<div class="filter">
					<p class="title">Kisaran Harga per Malam</p>
					<div class="range-harga">
						<input type="text" placeholder="Rp 100.000" name="range-awal">
						<input type="text" placeholder="Rp 500.000" name="range-akhir">
					</div>
					<div class="slider">
						<div class="left point">
							
						</div>
						<div class="right point">
							
						</div>
					</div>
				</div>
				<div class="filter">
					<p class="title">Fasilitas</p>
					<ul class="list-filter">
						<li>
							<span></span>
							<p>TV</p>
						</li>
						<li>
							<span></span>
							<p>AC</p>
						</li>
						<li>
							<span></span>
							<p>Wi-Fi</p>
						</li>
						<li>
							<span></span>
							<p>Kolam Renang</p>
						</li>
						<li>
							<span></span>
							<p>Taman Bermain</p>
						</li>
						<li>
							<span></span>
							<p>Gazebo</p>
						</li>
						<li>
							<span></span>
							<p>Kamar Tidur 3</p>
						</li>
						<li>
							<span></span>
							<p>Kamar Tidur 4</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="right-content">
				<div class="result-info">
					<div class="desc">
						<p>BOOKING > <b>RESORT</b></p>
						<span>Menampilkan 6 dari 12 Hasil Pencarian Tersedia</span>
					</div>
					<div class="pagination">
						<button class="btn">Prev</button>
						<button class="btn">Next</button>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-4">
						<div id="thumbnail-1" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
								<span>DELUXE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="thumbnail-2" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="thumbnail-1" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
								<span>DELUXE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="thumbnail-2" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="thumbnail-1" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
								<span>DELUXE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="thumbnail-2" class="thumbnail">
							<div>
								<span>EXECUTIVE</span>
							</div>
						</div>
						<div class="desc animation">
							<div class="header">
								<b>Mabely Grand Hotel</b>
								<p><span>Rp 355.000</span> /malam</p>
							</div>
							<div class="room-info">
								<div>
									<p><b>Executive Room</b></p>
									<p>Sisa dua kamar</p>
								</div>
								<div>
									<p><b>Deluxe Room</b></p>
									<p>Sisa empat kamar</p>
								</div>
							</div>
							<div class="list-icons">
								<span>Ruang Makan</span>
								<span>Ruang Tamu</span>
								<span>Breakfast</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form id="form-target" method="POST" action="/detail" hidden>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="start_date" value="{{ $start_date }}">
		<input type="text" name="end_date" value="{{ $end_date }}">
		<input type="text" name="id_resort">

		<button type="submit">OK</button>
	</form>
</body>
<script type="text/javascript">
	var data = {!! $result !!};
	var resorts = data.data;

	console.log(data);

	$('.thumbnails').empty();

	$.each(resorts, function(index, resort) {
		var id_resort = resort.id;
		var nama_resort = resort.name;
		var harga_sewa = resort.price.service_price;
			harga_sewa = accounting.formatMoney(harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
		var fasilitas_villa = resort.villa_facilities;

		// var $harga_rata = '<p><span>' + harga_sewa + '</span> /malam</p>';

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

			var $harga_rata = '<p><span>' + harga_terendah + ' - ' + harga_tertinggi + '</span></p>';
		} else {
			var harga = tipe_kamar[0].price.service_price;
				harga = accounting.formatMoney(harga, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });
			var $harga_rata = '<p><span>' + harga + '</span> /malam</p>';
		}

		var $kamar_infos = '';

		$.each(tipe_kamar, function(index, kamar) {
			var nama_kamar = kamar.name;
			var sisa_kamar = kamar.count_availability;

			var $kamar_info = 
			'<div>' +
				'<p><b>' + nama_kamar + '</b></p>' +
				'<p>Sisa ' + sisa_kamar + ' kamar</p>' +
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
		'<div class="col-md-4">' +
			'<div id="' + id_resort + '" class="thumbnail">' +
				'<div>' +
					'<span>EXECUTIVE</span>' +
					'<span>DELUXE</span>' +
				'</div>' +
			'</div>' +
			'<div class="desc animation">' +
				'<div class="header">' +
					'<b>' + nama_resort + '</b>' +
					$harga_rata +
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

	$('.thumbnail').on('click', function() {
		var id_resort = $(this).attr('id');

		$('#form-target').find('input[name="id_resort"]').val(id_resort);
		$('#form-target').find('button').click();
	})


</script>
</html>