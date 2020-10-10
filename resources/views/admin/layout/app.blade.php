<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - txblog</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body style="margin-top:20px;">
    <div class="container">
        @include('flash::message')
        @yield('content2')
    </div>
    <div class="container">    
        @yield('content')
    </div>
 
<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>