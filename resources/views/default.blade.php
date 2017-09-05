<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" ng-app="app">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name', 'Leanfeats') }}</title>

	<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jsFiddleStar.css') }}" rel="stylesheet">

</head>
<body>
<div class="wrapper">

<section class="content">

	@yield('content')

</section>

</div>
</body>
</html>