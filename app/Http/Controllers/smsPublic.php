<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smsPublic extends Controller
{
	public function index(){
		return view('sms');
	}

	public function smsPublicSend(Request $request){
		$request = [ 
			"api_key" => env('API_KEY'),
			"messages" => [ 
				[
					"from" => "Jose",
					"to" => "584143259878",
					"text" => $request->mensaje
				]
			]
		];

		$headers = array('Content-Type: application/json');
		$ch = curl_init('https://api.gateway360.com/api/3.0/sms/send');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));
		$result = curl_exec($ch);
		if (curl_errno($ch) != 0 ){
		// 	// die("curl error: ".curl_errno($ch));
			return back()->with('error','Mensaje no Enviado');
		}
		return back()->with('success','Mensaje Enviado');
	}
}
