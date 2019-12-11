<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller {

  public function redirect(){
    session()->put('state', $state = Str::random(40));

    $query = http_build_query([
      'client_id'     => '6HaGvn8J0X01FgXPV2wvRCmCid6iLV61Y836Tsim',
      'redirect_uri'  => 'https://resort.shafarizkyf.com/auth/callback',
      'response_type' => 'code',
      'scope'         => '',
      'state'         => $state,
    ]);

    return redirect('https://api.resort.shafarizkyf.com/oauth/authorize?' . $query);
  }

  public function callback(Request $request){
    $state = session()->pull('state');

    throw_unless(
      strlen($state) > 0 && $state === $request->state,
      InvalidArgumentException::class
    );

    $http = new Client;
    $response = $http->post('https://api.resort.shafarizkyf.com/oauth/token', [
      'form_params' => [
        'grant_type'    => 'authorization_code',
        'client_id'     => '6HaGvn8J0X01FgXPV2wvRCmCid6iLV61Y836Tsim',
        'client_secret' => 'rahasia',
        'redirect_uri'  => route('auth.callback'),
        'code'          => $request->code,
      ],
    ]);
    return json_decode((string) $response->getBody(), true);
  }
}
