<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function () {
	return view('app');
});

Route::post('/hasil', function() {
	// ambil data form pencarian
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$location = $_POST['location'];
	$class = $_POST['class'];

	// akses ke api
	$url = 'http://api.resort.shafarizkyf.com/api/availability/resort?' . 
			'start_date=' . $start_date . '&' .
			'end_date=' . $end_date . '&' . 
			'location=' . $location . '&' . 
			'class=' . $class;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = curl_exec($ch);

	curl_close($ch);

	// redirect + data
	// echo($start_date);
	return view('hasil', compact('result', 'start_date', 'end_date'));
});

Route::post('/detail', function () {
	// ambil data form
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$id_resort = $_POST['id_resort'];

	$url = 'api.resort.shafarizkyf.com/api/catalog/resort/' . $id_resort . '?show_variant=true';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = json_decode(curl_exec($ch));

	curl_close($ch);

	return view('detail', compact('result', 'start_date', 'end_date'));
});

Route::post('/reservasi', function () {
	// ambil data form
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$id_resort = $_POST['id_resort'];

	// api untuk mendapatkan semua daftar resort yg ada
	$url = 'api.resort.shafarizkyf.com/api/catalog/resort';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$resorts = curl_exec($ch);

	curl_close($ch);

	// $resorts = 'ahahaha';

	// echo($end_date);
	return view('reservation', compact('resorts', 'start_date', 'end_date', 'id_resort'));
});

Route::post('/resort/availability', function() {
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$id_resort = $_POST['id_resort'];	

	// api untuk mendapatkan semua daftar resort yg ada
	$url = 'api.resort.shafarizkyf.com/api/availability/resort?start_date=' . $start_date . '&end_date=' . $end_date . '&item_id=' . $id_resort;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$resorts = curl_exec($ch);

	curl_close($ch);

	return $resorts;
});

Route::post('/booking', function() {
	$data = $_POST['data'];
	$data = http_build_query($data);

	$url = 'api.resort.shafarizkyf.com/api/booking';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	$resorts = curl_exec($ch);

	curl_close($ch);

	return $resorts;
});

