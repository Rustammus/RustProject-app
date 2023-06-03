@extends('layouts.main_admin')
@section("postIndex")
            <div>
                <a class="btn btn-primary" href="" role="button">Редактировать</a>
                <form action="" method="post">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Удалить">
                </form>

            </div>
            <div class="container">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                    </tr>
                    </tbody>
                </table>
            </div>
@endsection
