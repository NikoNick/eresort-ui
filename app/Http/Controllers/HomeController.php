<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

  public function index(){
    $result = ExtrernalRequest::getLocation();
    return view('index', compact('result'));
  }

}
