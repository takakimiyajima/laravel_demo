<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\FormTestRequest;

class FormTestController extends Controller
{
	public function index(Request $request)
	{
		return view('form_test', ['msg'=>'フォームを入力']);
	}

	public function post(FormTestRequest $request)
	{
		return view('form_test', ['msg'=>'正しく入力されました']);
	}
}