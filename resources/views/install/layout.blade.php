<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ lang('安装 KQ Laravel Admin') }}</title>
    @include('lang.lang')
    @include('admin.default.layouts.themeCss')
    @include('admin.default.layouts.themeJs')


    @yield('add_css')

</head>
<body>
<div class="f14">
    @section('nav')
        @include('install.nav')
    @show

    @yield('content')
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <a href="//{{ config('copyright.domain') }}">{{ config('copyright.author') }}</a> MIT license
            </div>
        </div>
    </footer>
    @yield('foot_js')
</div>
</body>
</html>