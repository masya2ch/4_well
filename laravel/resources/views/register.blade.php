@extends('index')

@yield('title', 'Страница Регистрации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form class="mt-4" action="{{ route('register') }}" method="POST">
                    <h2 class="mb-3">Регистрация</h2>
                    @if(session()->has('success'))
                        <div class="alert alert-success">Операция регистрации успешно выполнена</div>
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
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Повторите пароль</label>
                        <input type="Password"
                               class="form-control @error('Password_confirmation') is-invalid @enderror"
                               id="inputPasswordConfirmation"
                               name="Password_confirmation"
                               aria-describedby="invalidPasswordConformation">
                        @error('Password_confirmation')
                        <div id="invalidPasswordConformation" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputFullName" class="form-label">Ваше имя</label>
                        <input type="Text"
                               class="form-control @error('FullName') is-invalid @enderror"
                               id="inputFullName"
                               name="FullName"
                               aria-describedby="invalidFullName">
                        @error('FullName')
                        <div id="invalidFullName" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваш email</label>
                        <input type="Email"
                               class="form-control @error('Email') is-invalid @enderror"
                               id="inputEmail"
                               name="Email"
                               aria-describedby="invalidEmail">
                        @error('Email')
                        <div id="invalidEmail" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Ваш возраст</label>
                        <input type="Text"
                               class="form-control @error('Age') is-invalid @enderror"
                               id="inputAge"
                               name="Age"
                               aria-describedby="invalidAge">
                        @error('Age')
                        <div id="invalidAge" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">Ваш адрес проживания</label>
                        <input type="Text"
                               class="form-control @error('Address') is-invalid @enderror"
                               id="inputAddress"
                               name="Address"
                               aria-describedby="invalidAddress">
                        @error('Address')
                        <div id="invalidAddress" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
