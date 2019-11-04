<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class BookingController extends Controller {

  public function index(){
    $business_id = request('business_id');
    $end_date = request('end_date');
    $item_id = request('item_id');
    $start_date = request('start_date');

    $url_config = ExtrernalRequest::API_RESORT_URL . 'config/resort';
    $extra_item_url =  ExtrernalRequest::API_RESORT_URL . "extra-item?business_id={$business_id}";
    if ($business_id == 1) {
      // api untuk mendapatkan semua daftar resort yg ada
      $itemAvailability =  ExtrernalRequest::API_RESORT_URL . "availability/resort?start_date={$start_date}&end_date={$end_date}";

    } else if ($business_id == 2) {
      // api untuk mendapatkan semua daftar resort yg ada
      $itemAvailability =  ExtrernalRequest::API_RESORT_URL . "availability/area?start_date={$start_date}&end_date={$end_date}";
    }

    $data = ExtrernalRequest::get($itemAvailability, false);
    $extra_item = ExtrernalRequest::get($extra_item_url, false);
    $config = ExtrernalRequest::get($url_config, false);

    return view('reservation', compact('data', 'extra_item', 'start_date', 'end_date', 'item_id', 'business_id', 'config'));
  }

  public function detail(){
    return view('book-detail');
  }

  public function store(){
    $data = request()->all();
    $data = http_build_query($data);
    $url = ExtrernalRequest::API_RESORT_URL . 'booking';
    return ExtrernalRequest::post($url, $data);
  }

  public function bookSession(){
    $invoice = request('invoice');
    $email = request('email');

    session()->put('invoice', $invoice);
    session()->put('email', $email);

    return redirect('book-detail')->route('booking.detail');
  }

}