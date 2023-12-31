<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Задачник')</title>
    @section('styles')
        <link rel="stylesheet" href="/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @show
</head>
<body>
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Задачник</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">Регистрация\вход</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks.index')}}">Задачи</a>
                </li>
                    <li class="nav-item dropdown " style="justify-content:flex-end">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Личный кабинет
                        </a>
                        <ul class="dropdown-menu bg-dark-subtle bg-opacity-50">
                            <li><a class="dropdown-item" href="{{ route('lk.show')}}">Личный кабинет</a></li>
                            <li><form action="/logout" method="post">@csrf<button class="dropdown-item">Выход</button></form></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('tag')}}">Теги</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container">
   @yield('content')
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@show
</body>
</html>
