<!DOCTYPE html>
<html lang="zh-CH">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','学生信息管理')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')
<div class="container">
    <div class="col-md-offset-1 col-md-8">
        @include('shared._message')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>