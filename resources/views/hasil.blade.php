@extends('layouts/app')

@section('body')
	<div class="background">
		@component('components/navbar') @endcomponent
		<div class="content">
			<div class="result-info">
				<div class="desc">
					<p>SEARCH > <b class="business-name">{{ $catalog }}</b></p>
					<span id="count-data"></span>
				</div>
				<!-- <div class="sorting">
					<small>SORT BY</small>
					<ul class="inline">
						<li><small>HARGA</small></li><li class="active"><small>LUAS AREA</small></li>
					</ul>
				</div> -->
			</div>
			<div class="thumbnails">
			</div>
		</div>
	</div>
	<form id="form-target" method="POST" action="/detail" hidden>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="start_date" value="{{ $start_date }}">
		<input type="text" name="end_date" value="{{ $end_date }}">
		<input type="text" name="waktu" value="{{ $waktu }}">
		<input type="number" name="person" value="{{ $person }}">
		<input type="hidden" name="business_id" value="{{ $business_id }}">
		<input type="hidden" name="business_name" value="{{ $catalog }}">
		<input type="hidden" name="data">
		<button type="submit">OK</button>
	</form>
@endsection

@section('css-bottom')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/hasil.css') }}">
	<style type="text/css">
	@media screen and (max-width: 600px) {
		.background {
			padding: 0px;
		}

		.thumbnails {
	        column-count: 1 !important;
	        /*background-color: red;*/
	    }
	    .thumbnails .thumbnail {
	        border-radius: 0px;
	        height: 250px;
	    }
	    .thumbnails .card {
	        margin-bottom: 20px;
	    }
	    .thumbnails .desc {
	        font-size: 1em;
	        padding: 35px 45px 20px;
	    }
	}
	</style>
@endsection

@section('js-bottom')
	<script type="text/javascript" src="{{ asset('js/accounting.js') }}"></script>
	<script type="text/javascript">
		var data = {!! $result !!};
		var person = {!! $person !!};
		var catalog = {!! json_encode($catalog) !!};
		var result = data.data;

		person = parseInt(person);
		result = result.filter(item => item.min_out >= person && (item.max_out >= person || item.max_out == null));

		$('.thumbnails').empty();

		if (catalog == 'Resort') {
			loadResortCatalog();
			$('input[name="business_id"]').val(1);
			var waktu = '';
		} else if (catalog == 'Camping') {
			loadCampingCatalog();
			$('input[name="business_id"]').val(2);
			var waktu = '';
		} else if (catalog == 'Outbound') {
			var waktu = {!! json_encode($waktu) !!};
			$('input[name="business_id"]').val(3);
			loadOutboundCatalog();
			$('input[name="waktu"]').val(waktu);
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
				var media_path = (resort.media.length != 0) ? resort.media[0].path : `https://via.placeholder.com/600x600?text=${resort.name}`;
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
						'<p>' + nama_kamar + '</p>' +
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
						'<img src="' + media_path + '">' +
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
				var media_path = (resort.media.length != 0) ? resort.media[0].path : `https://via.placeholder.com/600x600?text=${resort.name}`;

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
						'<img src="' + media_path + '">' +
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

		function loadOutboundCatalog() {
			$('.business-name').text('Outbound');
			$('#count-data').html('Menampilkan <span class="font-number">' + result.length + '</span> Layanan Outbound tersedia');

			console.log(result);

			$.each(result, function(index, resort) {
				var id_resort = resort.id;
				var nama_resort = resort.name;
				// var luas_area = resort.wide.slice(0,-3);
				var lokasi = resort.location.name;
				var media_path = (resort.media.length != 0) ? resort.media[0].path : `https://via.placeholder.com/600x600?text=${resort.name}`;
				var harga_sewa = resort.price.service_price;
					harga_sewa = accounting.formatMoney(harga_sewa, { symbol: 'Rp', format: '%s %v', thousand: '.', precision: 0 });

				// var variant = resort.availability;

				// var $kamar_infos = '';

				// $.each(variant, function(index, kamar) {
				// 	var nama = kamar.name;
				// 	var max_capacity = kamar.max_out;
				// 	var wide = kamar.wide;

				// 	var $kamar_info =
				// 	'<div class="variant">' +
				// 		'<p><b>' + nama + '</b></p>' +
				// 		'<span class="line"></span>' +
				// 		'<p><span class="font-number">' + wide + '</span> m<sup>2</sup> / Max. <span class="font-number">' + max_capacity + '</span> org</p>' +
				// 	'</div>';

				// 	$kamar_infos = $kamar_infos + $kamar_info;
				// });

				var $thumbnail =
				'<div id="' + id_resort + '" class="card">' +
					'<div class="thumbnail">' +
						'<img src="' + media_path + '">' +
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
						// '<div class="room-info">' +
						// 	$kamar_infos +
						// '</div>' +
					'</div>' +
				'</div>';

				$('.thumbnails').append($thumbnail);
			});
		}
	</script>
@endsection
