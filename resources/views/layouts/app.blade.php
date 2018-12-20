<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-4.1.3-dist/css/bootstrap.css')}}">
    <title>T-Fish</title>
</head>
<body>

    @include('inc.navbar')

    @include('inc.messages')

    @yield('content')

    @include('inc.footer')

</body>
</html>