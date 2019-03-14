<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body>


<div id="app" class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">用户列表</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0">
                @auth
                    <a href="{{route('logout')}}">退出</a>
                @else
                    <a href="{{route('login')}}">登录</a>
                    <a href="{{url('user/create')}}">注册</a>
                @endauth
            </div>

        </div>
    </nav>

    @include('front.layouts._message')
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>

@yield('scripts')

</body>
</html>