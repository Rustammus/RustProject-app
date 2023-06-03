@extends('layouts.main_admin')
@section("postIndex")
            <div class="container">
                <form action="{{route('admin.post.update', $post->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Загруженно</label>
                        <input type="text" name="load_by" class="form-control" id="load_by" value="{{$post->load_by}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Тип</label>
                        <select class="form-select mb-3" name="type" id="type">
                            <option @if($post->type == 'Концерт') selected @endif value="Концерт">Концерт</option>
                            <option @if($post->type == 'Театр') selected @endif value="Театр">Театр</option>
                            <option @if($post->type == 'Фестиваль') selected @endif value="Фестиваль">Фестиваль</option>
                            <option @if($post->type == 'Экскурсия') selected @endif value="Экскурсия">Экскурсия</option>
                            <option @if($post->type == 'Стендап') selected @endif value="Стендап">Стендап</option>
                            <option @if($post->type == 'Выставка') selected @endif value="Выставка">Выставка</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Заголовок</label>
                        <input type="text" name="heading" class="form-control" id="heading" value="{{$post->heading}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Описание</label>
                        <textarea name="description" class="form-control" id="description">{{$post->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Цена</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{$post->price}}">
                        <input type="checkbox" value="1" name="can_pay_pushkin" class="form-check-input" id="can_pay_pushkin" @if($post->can_pay_pushkin)checked @endif>
                        <label class="form-check-label" for="exampleCheck1">Можно оплатить пушкинской картой</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Город</label>
                        <input type="text" name="city" class="form-control" id="city" value="{{$post->city}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Адрес</label>
                        <input type="text" name="address" class="form-control" id="address" value="{{$post->address}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
@endsection
