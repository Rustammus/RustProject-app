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
    <div class="container mt-3 d-flex justify-content-between">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Мероприятия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.postUser.index')}}">Запланированные</a>
                </li>
                @can('manager', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.post.create')}}">Добавить мероприятие</a>
                </li>
                @endcan
                @can('view', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.post.index')}}">Войти в админ-панель</a>
                </li>
                @endcan
            </ul>
            <ul class="nav justify-content-end">
                @if(!auth()->check())
                    <a class="btn btn-outline-success m-1" href="{{route('login')}}" role="button">Log in</a>
                    <a class="btn btn-outline-success m-1" href="{{route('register')}}" role="button">Sign up</a>
                @endif
                @if(auth()->check())
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-success">Log out</button>
                        </form>
                @endif
            </ul>
    </div>
    <div class="container mt-5" style="max-width: 80%">
        @yield('userPostIndex')
    </div>

</body>
</html>
