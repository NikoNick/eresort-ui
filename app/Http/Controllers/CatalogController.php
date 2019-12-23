<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class CatalogController extends Controller {

  public function availability(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $id_resort = request('id_resort');
    $business_id = request('business_id');

    if ($business_id == 1) {
      // api untuk mendapatkan semua daftar resort yg ada
      $url = ExtrernalRequest::API_RESORT_URL . "availability/resort?start_date={$start_date}&end_date={$end_date}&item_id={$id_resort}";
    } else if ($business_id == 2) {
      $url = ExtrernalRequest::API_RESORT_URL . "availability/area?start_date={$start_date}&end_date={$end_date}&item_id={$id_resort}";
    } else if ($business_id == 3) {
      $url = ExtrernalRequest::API_RESORT_URL . "availability/outbound-program?start_date={$start_date}&end_date={$end_date}&item_id={$id_resort}";
    }


    $resorts = ExtrernalRequest::get($url, false);
    return $resorts;
  }

  public function detail(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $waktu = request('waktu');
    $person = request('person');
    $business_id = request('business_id');
    $business_name = request('business_name');
    $result = json_decode(request('data'));
    return view('hasil-2', compact('result', 'start_date', 'end_date', 'business_id', 'waktu', 'person', 'business_name'));
  }

}
