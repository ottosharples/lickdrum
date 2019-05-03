<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> @yield('title') </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('styles')

</head>
<body>
	@include('shared.nav')

	<div class="content">
    <div class="content-wrap">
    	@yield('content')
    </div>
    </div>

   	<script src="{{ asset('js/nav.js') }}" type="application/javascript"></script>

   	@include('shared.footer')

   	@stack('js')
   	<script type="text/javascript" href="{{ asset('js/nav.js') }}"></script>

</body>
</html>