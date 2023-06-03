@extends('layouts.main')
@section("userPostIndex")
            <div class="container">
                <form action="{{route('main.post.store')}}" method="post">
                    @csrf
                    <label for="exampleInputPassword1" class="form-label">Тип</label>
                    <select class="form-select mb-3" name="type" id="type">
                        <option value="" selected>Укажите тип мероприятия</option>
                        <option value="Концерт">Концерт</option>
                        <option value="Театр">Театр</option>
                        <option value="Фестиваль">Фестиваль</option>
                        <option value="Экскурсия">Экскурсия</option>
                        <option value="Стендап">Стендап</option>
                        <option value="Выставка">Выставка</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Заголовок</label>
                        <input type="text" name="heading" class="form-control" id="heading">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Описание</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Цена</label>
                        <input type="number" name="price" class="form-control" id="price">
                        <input type="checkbox" value="1" name="can_pay_pushkin" class="form-check-input" id="can_pay_pushkin">
                        <label class="form-check-label" for="exampleCheck1">Можно оплатить пушкинской картой</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Город</label>
                        <input type="text" name="city" class="form-control" id="city">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Адрес</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
@endsection
