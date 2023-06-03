@extends('layouts.main_admin')
@section("postIndex")
    <div class="container">
    </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Тип пользователя</th>
                            <th>Имя</th>
                            <th>Почта</th>
                            <th>Создан</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th><a href="{{route('admin.user.show', $user->id)}}">{{$user->id}}</a></th>
                                <td>{{$user->userType}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="container mt-2">
                {{$users->links()}}
            </div>
@endsection
