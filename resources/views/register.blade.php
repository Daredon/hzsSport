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
{!! Form::open(['route' => 'user.addUser']) !!}
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_conf" placeholder="Confirm Password">
        <input type="submit">
{!! Form::close() !!}
</body>
</html>