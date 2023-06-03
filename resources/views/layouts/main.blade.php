<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-3">
        <div class="d-inline-flex">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Мероприятия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Запланированные</a>
                </li>
                @can('manager', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="#">Добавить мероприятие</a>
                </li>
                @endcan
                @can('view', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.post.index')}}">Войти в админ-панель</a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
    <div class="container mt-5" style="max-width: 80%">
        @yield('userPostIndex')
    </div>

</body>
</html>
