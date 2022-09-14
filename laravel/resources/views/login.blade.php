@extends('index')

@yield('title', 'Страница Авторизации')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form class="mt-4" action="{{route('login')}}" method="POST">
                    <h2 class="mb-3">Авторизация</h2>
                    @if(session()->has('errorSuccess'))
                        <div class="alert-danger">{{ session()->get('errorSuccess') }}</div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Ваш логин</label>
                        <input type="Text"
                               class="form-control @error('Login') is-invalid @enderror"
                               id="inputLogin"
                               name="Login"
                               aria-describedby="invalidLogin">
                        @error('Login')
                        <div id="invalidLogin" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль</label>
                        <input type="Password"
                               class="form-control @error('Password') is-invalid @enderror"
                               id="inputPassword"
                               name="Password"
                               aria-describedby="invalidPassword">
                        @error('Password')
                        <div id="invalidPassword" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Авторизоваться</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
