<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormTestController extends Controller
{
	public function index(Request $request)
	{
		return view('form_test', ['msg'=>'フォームを入力']);
	}

	public function post(Request $request)
	{
		$validate_rule = [
			'name'	=>	'required',
			'mail'	=>	'email',
			'age'	=>	'numeric|between:0,120',
		];

		$this->validate($request, $validate_rule);
		return view('form_test', ['msg'=>'正しく入力されました']);

	}
}