<!doctype html>
<html>
<head>
	<title>テスト</title>
</head>
<body>
	<h1>bladeテスト</h1>

	@section('content')
		<p>ここが本文のコンテンツです。</p>
		<p>'message' = {{ $message }}</p>
		<p>'view_message' = {{ $view_message }}</p>
	@endsection
</body>
</html>