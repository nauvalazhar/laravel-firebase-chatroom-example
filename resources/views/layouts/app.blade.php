<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{config('app.name')}}</title>

	<!-- Styleheet -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	@yield('css')
</head>
<body>
	@yield('content')

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

	@yield('scripts')
</body>
</html>