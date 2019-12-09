<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class HomeController extends Controller {

  public function index(){
    $result = ExtrernalRequest::getLocation();
    return view('index', compact('result'));
  }

}
