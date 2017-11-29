<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<title>Laravel</title>
</head>
<body>
	<div class="container">
		<div class="page-header">
			@yield('header')
		</div>
		@if (Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
		@yield('content')
	</div>
</body>
</html>