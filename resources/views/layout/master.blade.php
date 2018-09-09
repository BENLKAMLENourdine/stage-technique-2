<!DOCTYPE html>
<html>
<head>
    <title>VIVALALG</title>
    <!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('partials.navbar')
@yield('content')
@include('partials.footer')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mapdata.js') }}"></script>		
    <script  type="text/javascript" src="{{ asset('js/countrymap.js') }}"></script>
</body>
</html>