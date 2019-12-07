<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if (isset($errors))
    @foreach($errors as $error)
        {{ $error }} <br>
    @endforeach
@endif
{!! Form::open(['route' => 'users.loginUser']) !!}
        <input type="text" name="input" placeholder="Username or email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
{!! Form::close() !!}
</body>
</html>