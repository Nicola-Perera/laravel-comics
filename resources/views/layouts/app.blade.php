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
    <main id="site_main" class="py-5">
        @yield('content')
    </main>

    <!-- footer -->
    @include('partials.footer')

</body>

</html>