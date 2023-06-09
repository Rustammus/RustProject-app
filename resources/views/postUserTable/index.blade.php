@extends('layouts.main ')
@section('userPostIndex')
    @foreach($posts as $post)
    <div class="container justify-content-center" style="max-width: 80%">
        <div class="card text-bg-secondary mt-5">
            <div class="card-header">
                <div class="container text-center">
                    <div class="row justify-content-between">
                        <div class="col-2">
                            {{$post->type}}
                        </div>
                        <div class="col-2">
                            Город: {{$post->city}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p><a href="{{route('main.post.show', $post->id)}}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><h5 class="card-title">{{$post->heading}}</h5></a></p>
                <p class="card-text">{{$post->description}}</p>
            </div>
        </div>
    </div>
    @endforeach
@endsection
