<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prijavite se</title>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/login/login.css')}}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
</head>

<body onload="load()">
    <nav id="nav">
        <div onclick="burgerToggle()" class="burger" id="burger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="links">
            <ul>
                <li>
                    <a href="{{route('page.index')}}">

                        <i class="material-icons">home</i>
                        <span>Početak</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    @if (isset($errors))
    @foreach($errors as $error)
    {{ $error }} <br>
    @endforeach
    @endif
    <div class="form">
        <h1>Prijavite se</h2>
            {!! Form::open(['route' => 'user.loginUser']) !!}
            <h2>Korisničko ime ili e-mail</h2>
            <input type="text" name="input" placeholder="Korisničko ime or e-mail">
            <h2>Sifra</h2>
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
            <span>Nemate nalog? <a href="{{ route('page.register') }}">Napravite ga!</a></span>
            {!! Form::close() !!}
    </div>
    <script src="{{asset('scripts/navigation.js')}}"></script>
</body>

</html>