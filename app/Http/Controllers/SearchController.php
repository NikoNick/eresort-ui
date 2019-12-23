<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class SearchController extends Controller {

  public function index(){
    $result = ExtrernalRequest::getLocation();
    // var_dump($result);
    return view('index', compact('result'));
  }

  public function resultResort(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $person = request('person');
    $waktu = '08:00';
    $result = ExtrernalRequest::getResortAvailability();
    $business_id = 1;
    $catalog = strval('Resort');
    return view('hasil', compact('result', 'start_date', 'end_date', 'waktu', 'person', 'catalog', 'business_id'));
  }

  public function resultCamping(){
    $start_date = request('start_date');
    $end_date = request('end_date');
    $person = request('person');
    $waktu = '08:00';
    $result = ExtrernalRequest::getAreaAvailability();
    $business_id = 2;
    $catalog = strval('Camping');
  	return view('hasil', compact('result', 'start_date', 'end_date', 'catalog', 'person', 'waktu', 'business_id'));
  }

  public function resultOutbound(){
    $start_date = request('start_date');
    $waktu = strval(request('waktu'));
    $person = request('person');
    $end_date = request('start_date');
    $result = ExtrernalRequest::getOutboundAvailability();
    $business_id = 3;
    $catalog = strval('Outbound');
    return view('hasil', compact('result', 'start_date', 'end_date', 'waktu', 'person', 'catalog', 'business_id'));
  }

}
