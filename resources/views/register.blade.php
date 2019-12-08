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
        <li>
          <a href="#">
            <i class="material-icons">camera_enhance</i>
            <span>Images</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="material-icons">favorite</i>
            <span>Liked</span>
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
    <h1>Napravite nalog</h1>
    {!! Form::open(['route' => 'user.addUser']) !!}
    <h2>Korisničko ime</h2>
    <input type="text" name="username" placeholder="Korisničko ime">
    <h2>E-mail</h2>
    <input type="email" name="email" placeholder="E-mail">
    <h2>Ime</h2>
    <input type="text" name="fname" placeholder="Ime">
    <h2>Prezime</h2>
    <input type="text" name="lname" placeholder="Prezime">
    <h2>Firma</h2>
    {!! Form::select('company', $companies) !!}
    <h2>Šifra</h2>
    <input type="password" name="password" placeholder="Šifra">
    <h2>Potvrdite šifru</h2>
    <input type="password" name="password_conf" placeholder="Potvrdi šifru">
    <input type="submit">
    {!! Form::close() !!}
    <script src="{{asset('scripts/navigation.js')}}"></script>
  </div>
</body>

</html>