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
	$url = 'api.resort.shafarizkyf.com/api/location';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = json_decode(curl_exec($ch));

	curl_close($ch);

	return view('app', compact('result'));
});

Route::post('/hasil', function() {
	// ambil data form pencarian
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$location = $_POST['location'];
	$person = $_POST['person'];

	// akses ke api
	$url = 'http://api.resort.shafarizkyf.com/api/availability/resort?' . 
			'start_date=' . $start_date . '&' .
			'end_date=' . $end_date . '&' . 
			'location=' . $location . '&' . 
			'person=' . $person;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = curl_exec($ch);
	$catalog = strval('Resort');

	curl_close($ch);

	// redirect + data
	// echo($start_date);
	return view('hasil', compact('result', 'start_date', 'end_date', 'catalog'));
});

Route::post('/hasil-camping', function() {
	// ambil data form pencarian
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$person = $_POST['person'];

	// akses ke api
	$url = 'http://api.resort.shafarizkyf.com/api/availability/area?' . 
			'start_date=' . $start_date . '&' .
			'end_date=' . $end_date .'&' .
			'capacity=' . $person;

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = curl_exec($ch);
	$catalog = strval('Camping');

	curl_close($ch);

	// redirect + data
	// echo($start_date);
	return view('hasil', compact('result', 'start_date', 'end_date', 'catalog'));
});

// Route::get('/detail', function() {
// 	return view('hasil-2');
// });

Route::post('/detail', function () {
	//ambil data form
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$business_id = $_POST['business_id'];
	$result = json_decode($_POST['data']);

	// $url = 'api.resort.shafarizkyf.com/api/availability/resort?start_date=' . $start_date . '&end_date=' . $end_date . '&item_id=' . $id_resort;

	// $ch = curl_init();

	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_URL, $url);

	// $result = json_decode(curl_exec($ch));

	// curl_close($ch);

	return view('detail', compact('result', 'start_date', 'end_date', 'business_id'));

	// var_dump($data);

	// return view('detail');
});

Route::post('/reservasi', function () {
	// ambil data form
	$business_id = $_POST['business_id'];
	$end_date = $_POST['end_date'];
	$item_id = $_POST['item_id'];
	$start_date = $_POST['start_date'];

	$url_config = 'api.resort.shafarizkyf.com/api/config/resort';

	if ($business_id == 1) {
		// api untuk mendapatkan semua daftar resort yg ada
		$url1 = 'api.resort.shafarizkyf.com/api/availability/resort?start_date=' . $start_date . '&end_date=' . $end_date;
		$url2 = 'http://api.resort.shafarizkyf.com/api/extra-item?business_id=1';
	} else if ($business_id == 2) {
		// api untuk mendapatkan semua daftar resort yg ada
		$url1 = 'http://api.resort.shafarizkyf.com/api/availability/area?' . 
			'start_date=' . $start_date . '&' .
			'end_date=' . $end_date;
		$url2 = 'http://api.resort.shafarizkyf.com/api/extra-item?business_id=2';
	}
	
	$ch   = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url1);
	$data = curl_exec($ch);
			curl_close($ch);

	$ch   = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url2);
	$extra_item = curl_exec($ch);
			curl_close($ch);

	$ch   = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url_config);
	$config = curl_exec($ch);
			curl_close($ch);

	
	return view('reservation', compact('data', 'extra_item', 'start_date', 'end_date', 'item_id', 'business_id', 'config'));
});

Route::post('/resort/availability', function() {
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$id_resort = $_POST['id_resort'];	
	$business_id = $_POST['business_id'];

	if ($business_id == 1) {
		// api untuk mendapatkan semua daftar resort yg ada
		$url = 'api.resort.shafarizkyf.com/api/availability/resort?start_date=' . $start_date . '&end_date=' . $end_date . '&item_id=' . $id_resort;
	} else if ($business_id == 2) {
		$url = 'api.resort.shafarizkyf.com/api/availability/area?start_date=' . $start_date . '&end_date=' . $end_date . '&item_id=' . $id_resort;
	}

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$resorts = curl_exec($ch);

	curl_close($ch);

	return $resorts;
});

Route::post('/booking', function() {
	$data = $_POST;
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

Route::post('/booksession', function() {
	$invoice = $_POST['invoice'];
	$email = $_POST['email'];

	session_start();

	$_SESSION['invoice'] = $invoice;
	$_SESSION['email'] = $email;

	return redirect('/book-detail');
});

Route::get('/book-detail', function() {
	// session_start();

	// $invoice = $_POST['invoice'];
	// $email = $_POST['email'];

	// if (isset($invoice)) {
	// 	// $url = 'api.resort.shafarizkyf.com/api/booking/search?invoice=' . $invoice . '&email=' . $email;

	// 	// $ch = curl_init();

	// 	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 	// curl_setopt($ch, CURLOPT_URL, $url);

	// 	// $resorts = curl_exec($ch);

	// 	// curl_close($ch);

	// 	return view('monitor');
	// } else {
	// 	echo $invoice;
	// }

return view('book-detail');
	
});


