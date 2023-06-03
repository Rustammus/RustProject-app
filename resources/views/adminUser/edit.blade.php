@extends('layouts.main_admin')
@section("postIndex")
            <div class="container">
                <form action="{{route('admin.user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Тип пользователя</label>
                        <select class="form-select mb-3" name="userType" id="userType">
                            <option @if($user->userType == 'user') selected @endif value="user">Обычный пользователь</option>
                            <option @if($user->userType == 'manager') selected @endif value="manager">Контент-менеджер</option>
                            <option @if($user->userType == 'admin') selected @endif value="admin">Админ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Почта</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </form>
            </div>
@endsection
