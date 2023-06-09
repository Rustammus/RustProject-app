@extends('layouts.main')
@section("userPostIndex")
            <div class="container mb-3">
                <form action="{{route('main.postUser.store', $post->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
                    <input class="btn btn-primary" type="submit" value="Подписаться">
                </form>
            </div>
            <div class="container">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>{{$post->id}}</th>
                    </tr>
                    <tr>
                        <th>Автор</th>
                        <td>{{$post->user->name}}</td>
                    </tr>
                    <tr>
                        <th>Тип</th>
                        <td>{{$post->type}}</td>
                    </tr>
                    <tr>
                        <th>Заголовок</th>
                        <td>{{$post->heading}}</td>
                    </tr>
                    <tr>
                        <th>Цена</th>
                        <td>{{$post->price}}</td>
                    </tr>
                    <tr>
                        <th>Можно оплатить Пушкинской картой</th>
                        <td>{{$post->can_pay_pushkin}}</td>
                    </tr>
                    <tr>
                        <th>Город</th>
                        <td>{{$post->city}}</td>
                    </tr>
                    <tr>
                        <th>Адрес</th>
                        <td>{{$post->address}}</td>
                    </tr>
                    <tr>
                        <th>Описание</th>
                        <td>{{$post->description}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
@endsection
