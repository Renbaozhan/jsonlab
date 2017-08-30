<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('meta')
        <title>@yield('title') - Json.cn</title>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/app.css">
        @yield('style')
    </head>
    <body>
        @include('header')
        @yield('main')
        @include('footer')
    <script src=https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.js"></script>

    @yield('script')
    <script>
      var navigation = responsiveNav("#nav");
    </script>
    </body>
</html>
