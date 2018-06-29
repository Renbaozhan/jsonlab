<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('meta')
        @yield('meta')
        <title>@yield('title') - Json.cn</title>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/app.css">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/color.css">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/spin.css">
        @yield('style')
    </head>
    <body>
        @include('header')
        @yield('main')
        @include('footer')
    <script src=https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('/') }}js/vue.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.js"></script>

    @yield('script')
    <script>
      var navigation = responsiveNav("#nav");
    </script>
    </body>
</html>
