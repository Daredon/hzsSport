<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/register/register.css')}}" />

</head>
<body>
@if (isset($errors))
    @foreach($errors as $error)
        {{ $error }} <br>
    @endforeach
@endif
<div class="form">
    <h1>Napravite nalog</h1>
{!! Form::open(['route' => 'user.addUser']) !!}
        <h2>Korisnicko ime</h2>
        <input type="text" name="username" placeholder="Username">
        <h2>E-mail</h2>
        <input type="email" name="email" placeholder="E-mail">
        <h2>Ime</h2>
        <input type="text" name="fname" placeholder="Ime">
        <h2>Prezime</h2>
        <input type="text" name="lname" placeholder="Prezime">
        <h2>Firma</h2>
        {!! Form::select('company', $companies) !!}
        <h2>Sifra</h2>
        <input type="password" name="password" placeholder="Password">
        <h2>Potvrdite sifru</h2>
        <input type="password" name="password_conf" placeholder="Confirm Password">
        <input type="submit">
{!! Form::close() !!}
</div>
</body>
</html>