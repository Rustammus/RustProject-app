@extends('layouts.main_admin')
@section("postIndex")
            <div>
                <a class="btn btn-primary" href="{{route('admin.user.edit', $user->id)}}" role="button">Редактировать</a>
                <form action="{{route('admin.user.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                </form>

            </div>
            <div class="container">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td>{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Тип пользователя</th>
                        <td>{{$user->userType}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Имя</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Почта</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Создан</th>
                        <td>{{$user->created_at}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Редактированн</th>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Постов</th>
                        <th><a href="{{route('admin.user.showPosts', $user->id)}}">{{$user->postsCount()}}</a></th>
                    </tr>
                    </tbody>
                </table>
            </div>
@endsection
