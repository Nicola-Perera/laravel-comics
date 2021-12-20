<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <!-- header -->
    @include('partials.header')

    <!-- main -->
    <main>

        <!-- hero image -->
        <div class="hero">
            <!-- <img src="../../img/images/jumbotron.jpg" alt=""> -->
        </div>
        @yield('content')
    </main>

    <!-- footer -->
    @include('partials.footer')

</body>

</html>