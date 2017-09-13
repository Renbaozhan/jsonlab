<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('meta')
        @yield('meta')
        <title>500服务器内部异常 - Json.cn</title>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/') }}css/app.css">
        @yield('style')
    </head>
    <body>
         <div style="padding:15%;text-align:center;line-height:30px;font-size:14px;">
             <h1 class="red-light" style="font-size:1000%;">5<i class="fa fa-cog fa-spin" style="text-shadow:0 0 3px #ddd;"></i>0</h1>
             <div>似乎哪里不对？<a class="green-light" href="/">返回首页</a></div>

         </div>
    <script src=https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js></script>


    </body>
</html>
