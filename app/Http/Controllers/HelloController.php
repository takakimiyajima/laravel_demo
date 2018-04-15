<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
	public function index(Request $request)
	{
		return view('index', ['data'=>$request->data]);
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