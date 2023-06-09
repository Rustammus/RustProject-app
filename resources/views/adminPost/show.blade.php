@extends('layouts.main_admin')
@section("postIndex")
            <div>
                <a class="btn btn-primary" href="{{route('admin.post.edit', $post->id)}}" role="button">Редактировать</a>
                <form action="{{route('admin.post.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                </form>

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
                            <tr>
                                <th>{{$post->id}}</th>
                                <td><a href="{{route('admin.user.show', $post->author_id)}}">{{$post->user->name}}</a></td>
                                <td>{{$post->type}}</td>
                                <td>{{$post->heading}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->price}}</td>
                                <td>{{$post->can_pay_pushkin}}</td>
                                <td>{{$post->city}}</td>
                                <td>{{$post->address}}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
@endsection
