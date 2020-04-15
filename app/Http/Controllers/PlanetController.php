<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index(Request $search) {

    	//background();

    	$planet_name = $search->input('search');

    	if($planet_name == null) {
    		$planet_name = 'lune';
    	}
    	

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.le-systeme-solaire.net/rest/bodies/%7B".$planet_name."%7D",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_COOKIE => "SERVERID102299=220116%7CXmJE6%7CXmJEX",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  //echo $response;
		}


/*pour mettre en forme la réponse dans un tableau*/

		return view('welcome', ['dataBody' => json_decode($response)]);


    }
}
