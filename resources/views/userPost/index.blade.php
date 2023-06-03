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
                <input type="text" name="type" class="form-control" placeholder="Тип мероприятия" aria-label="Last name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Поиск</button>
    </form>
    @foreach($posts as $post)
    <div class="container justify-content-center" style="max-width: 80%">
        <div class="card text-bg-secondary mt-5">
            <div class="card-header">
                {{$post->type}}
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
