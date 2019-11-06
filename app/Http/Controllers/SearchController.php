<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class SearchController extends Controller {

  public function index(){
    $result = ExtrernalRequest::getLocation();
    return view('app', compact('result'));
  }

  public function resultResort(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $waktu = '08:00';
    $result = ExtrernalRequest::getResortAvailability();
    $catalog = strval('Resort');
    return view('hasil', compact('result', 'start_date', 'end_date', 'waktu', 'catalog'));
  }

  public function resultCamping(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $waktu = '08:00';
    $result = ExtrernalRequest::getAreaAvailability();
    $catalog = strval('Camping');
  	return view('hasil', compact('result', 'start_date', 'end_date', 'catalog', 'waktu'));
  }

  public function resultOutbound(){
    $start_date = request('start_date');
    $waktu = strval(request('waktu'));
    $end_date = request('start_date');
    $result = ExtrernalRequest::getOutboundAvailability();
    $catalog = strval('Outbound');
    return view('hasil', compact('result', 'start_date', 'end_date', 'waktu', 'catalog'));
  }

}
