<?php

namespace App\Helper;

class ExtrernalRequest {

  const RESORT_URL = 'https://api.booking.mypalawi.com/';
  const API_RESORT_URL = 'https://api.booking.mypalawi.com/api/';

  public static function get($url, $decode = true, $asArray = false){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = $decode ? json_decode(curl_exec($ch), $asArray) : curl_exec($ch);
    curl_close($ch);
    return $result;
  }

  public static function post($url, $data){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }

  public static function getLocation(){
    $url = self::API_RESORT_URL . 'location';
    return self::get($url);
  }

  public static function getResortAvailability(){
    $startDate = request('start_date');
    $endDate = request('end_date');
    $location = request('location');
    $person = request('person');
    $url = self::API_RESORT_URL . "availability/resort?start_date={$startDate}&end_date={$endDate}&location={$location}&person={$person}";
    return self::get($url, false);
  }

  public static function getAreaAvailability(){
    $startDate = request('start_date');
    $endDate = request('end_date');
    $location = request('location');
    $person = request('person');
    $url = self::API_RESORT_URL . "availability/area?start_date={$startDate}&end_date={$endDate}&location={$location}&capacity={$person}";
    return self::get($url, false);
  }

  public static function getOutboundAvailability(){
    $startDate = request('start_date');
    // $endDate = request('end_date');
    $waktu = request('waktu');
    $person = request('person');
    $url = self::API_RESORT_URL . "availability/outbound-program?start_date={$startDate}";
    return self::get($url, false);
  }

  public static function allPromo(){
    $url = self::API_RESORT_URL . "promo";
    return self::get($url, false);
  }

  public static function getPromo(){
    $code = request('promo_code');
    $url = self::API_RESORT_URL . "promo?code={$code}";
    // var_dump($code);
    return self::get($url, false);
  }

  public static function getBusinessAvailability() {
    $url = self::API_RESORT_URL . "business";

    return self::get($url, false);
  }

}
