<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
	public function index()
	{

	
		return view('index', ['message'=>'Hello']);
	}

	public function post(Request $request)
	{
		$msg = $request->msg;

		$data = [
			'msg' => $msg,
		];

		return view('index', $data);
	}

}