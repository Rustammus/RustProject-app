@extends('layouts.main_admin')
@section("postIndex")
    <div class="container">
        <a class="btn btn-primary" href="{{route('admin.post.create')}}" role="button">Создать новую запись</a>
    </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Автор</th>
                            <th>Тип</th>
                            <th>Заголовок</th>
                            <th>Описание</th>
                            <th>Цена</th>
                            <th>Пушкин</th>
                            <th>Город</th>
                            <th>Адрес</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th><a href="{{route('admin.post.show', $post->id)}}">{{$post->id}}</a></th>
                                <td><a href="{{route('admin.user.show', $post->author_id)}}">{{$post->user->name}}</a></td>
                                <td>{{$post->type}}</td>
                                <td>{{$post->heading}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->price}}</td>
                                <td>{{$post->can_pay_pushkin}}</td>
                                <td>{{$post->city}}</td>
                                <td>{{$post->address}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="container mt-2">
                {{$posts->links()}}
            </div>
@endsection
