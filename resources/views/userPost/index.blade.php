@extends('layouts.main ')
@section('userPostIndex')
    <form action="{{route('main.filter')}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="exampleInputEmail1" class="form-label">Расширенный поиск</label>
            <div class="col mt-1">
                <input type="text" name="city" class="form-control" placeholder="Город" aria-label="First name">
            </div>
            <div class="col mt-1">
                <select class="form-select mb-3" name="type" id="type">
                    <option value="" selected>Укажите тип мероприятия</option>
                    <option value="Концерт">Концерт</option>
                    <option value="Театр">Театр</option>
                    <option value="Фестиваль">Фестиваль</option>
                    <option value="Экскурсия">Экскурсия</option>
                    <option value="Стендап">Стендап</option>
                    <option value="Выставка">Выставка</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Поиск</button>
    </form>
    @foreach($posts as $post)
    <div class="container justify-content-center" style="max-width: 80%">
        <div class="card text-bg-secondary mt-5">
            <div class="card-header justify-content-between">
                {{$post->type}}
                {{$post->city}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->heading}}</h5>
                <p class="card-text">{{$post->description}}</p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container mt-2" style="max-width: 80%">
        @if($nofilter)
        {{$posts->links()}}
        @endif
    </div>
@endsection
