<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('links/user.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="{{asset('links/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body id="body">
    <main class="main">
        @yield('user')
    </main>


    <script src="{{asset('links/user.js')}}"></script>
</body>

</html>
