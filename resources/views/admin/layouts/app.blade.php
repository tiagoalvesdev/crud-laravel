<!DOCTYPE html>
<html lang={{ config('app.locale') }}>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>
	<div class="content">
		@yield('content')
	</div>
</body>
</html>