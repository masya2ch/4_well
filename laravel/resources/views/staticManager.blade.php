@extends('index')

@yield('title', 'Страница Авторизации')

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Основная информация об сайте
                </div>
                <div class="card-body">
                    <h5 class="card-title">Реквизиты и расположения</h5>
                    <p class="card-text">
                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Название сайт</th>
                                <th scope="col">Адрес</th>
                                <th scope="col">Время работы</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $nameSite }}</td>
                                <td>{{ $address }}</td>
                                <td>{{ $time }}</td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
