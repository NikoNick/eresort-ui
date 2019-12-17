<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class HomeController extends Controller {

  public function index(){
    $location = ExtrernalRequest::getLocation();
    $business = ExtrernalRequest::getBusinessAvailability();

    return view('index', compact('location', 'business'));
  }

}
