@extends('layouts/app')

@section('body')
	<div class="background">
		@component('components/navbar')
			@slot('special')
				<button class="btn"><i class="fas fa-sign-in-alt"></i> LOGIN</button>
			@endslot
		@endcomponent
		<div class="search-nav">
			<ul class="nav inline">
				<li class="active"><a href="#tab-1">RESORT</a></li><li><a href="#tab-2">CAMPING</a></li><li><a href="#tab-3">OUTBOND</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="tab-1" class="tab">
				<h1>Pastikan Liburanmu Nyaman dengan Palawi</h1>
				<form method="GET" action="/hasil">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="field-row">
						<div class="input-wrapper">
							<b>LOKASI</b>
							<select name="location" class="fillable">
								<option value="0" selected>Semua Lokasi</option>
								@foreach($result as $lokasi)
									<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
								@endforeach
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
								@foreach($result as $lokasi)
									<option value="{{ $lokasi->id }}">{{ $lokasi->name }}</option>
								@endforeach
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
				<form method="GET" action="/hasil-camping">
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
							<input type="text" class="fillable" name="start_date" placeholder="">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="footer">
			<p><italic>COPYRIGHT</italic> PT. PALAWI RESORT BATURRADEN</p>
		</div>
	</div>
@endsection

@section('css-bottom')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
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

		$('input[name="start_date"]').val(today);
		$('input[name="end_date"]').val(tomorrow);

		$('.btn-search').on('click', function(e) {
			e.preventDefault();
			var array_field = $('form').find('.fillable');
			var count_filled = 0;

			$.each(array_field, function(index, item) {
				var value = $(item).val();
				if (value != '') count_filled = count_filled + 1;
			})

			if (count_filled == array_field.length) {
				$(this).unbind().click();
			} else {
				alert('Form Belum Lengkap');
			}
		})

		$('.input-wrapper').on('click', function() {
			$(this).find('input').focus();
			// $(this).find('select').focus();
		})

		$('.nav.inline li').on('click', function() {
			$('.nav.inline li.active').removeClass('active');
			$(this).addClass('active');
		})
	</script>
@endsection