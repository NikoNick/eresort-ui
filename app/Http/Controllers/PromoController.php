<?php

namespace App\Http\Controllers;

use App\Helper\ExtrernalRequest;

class PromoController extends Controller {

  public function index(){
    $result = ExtrernalRequest::allPromo();
    return $result;
  }

  public function checkPromo(){
    $code = request('promo_code');
    $result = ExtrernalRequest::getPromo();
    return $result;
  }
}
