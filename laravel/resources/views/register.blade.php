<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body>

<form class="mt-4" action="{{route('register')}}" method="POST">
    <h2 class="mb-3">Регистрация</h2>
    @if(session()->has('errorSuccess'))
        <h3>Операция регистрации успешно выполнена</h3>
    @endif
    @csrf
    <input class="form-control size" type="text" name="Login" placeholder="Ваш логин"><br>
    @error('Login') <p>{{$message}}</p> @enderror
    <input class="form-control" type="Password" name="Password" placeholder="Ваш пароль"><br>
    @error('Password') <p>{{$message}}</p> @enderror
    <input class="form-control" type="Password" name="Password_confirmation" placeholder="Повторите пароль"><br>
    @error('Password') <p>{{$message}}</p> @enderror
    <input class="form-control" type="Text" name="FullName" placeholder="Полное имя"><br>
    @error('Name') <p>{{$message}}</p> @enderror
    <input class="form-control" type="Email" name="Email" placeholder="Email"><br>
    <input class="form-control" type="text" name="Age" placeholder="Ваш возраст"><br>
    <input class="form-control" type="text" name="Address" placeholder="Место проживания"><br>
    <input type="Submit" name="Зарегестрироваться"><br>
</form>
</body>
</html>
