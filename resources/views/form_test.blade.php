@extends('layout.helloapp')

@section('title', 'ここにタイトル')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>{{ $msg }}</p>
	@if(count($errors) > 0)
	<p>入力に問題があります</p>
	@endif
	<table>
		<form action="form_test" method="post">
			{{ csrf_field() }}
			@if($errors->has('name'))
				<tr><th>エラー</th><td>{{ $errors->first('name')}}</td></tr>
			@endif
			<tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
			@if($errors->has('mail'))
				<tr><th>エラー</th><td>{{ $errors->first('mail')}}</td></tr>
			@endif
			<tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
			@if($errors->has('age'))
				<tr><th>エラー</th><td>{{ $errors->first('age')}}</td></tr>
			@endif
			<tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
			<tr><th></th><td><input type="submit" value="send"></td></tr>
		</form>
	</table>
@endsection

@section('footer')
copyright miyajima
@endsection