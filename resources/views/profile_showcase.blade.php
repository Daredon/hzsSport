<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$user->username}}</title>
  <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/scroll/scroll.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/profile/profile.css')}}" />
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
            <span>Home</span>
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
        <li class="account">
          <a href="#">
            <i class="material-icons">person</i>
            <span>Account</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="showcase">
    <div class="profile">
      <div>
        <img src="https://picsum.photos/150/150" alt="user">
        <div>
          <h1>Name Surname</h1>
          <h2>username</h2>
        </div>
      </div>
      <div>
        <ul>
          <li>Da</li>
          <li>Da</li>
          <li>Da</li>
          <li>Da</li>
          <li>Da</li>
        </ul>
      </div>
    </div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <script src="{{asset('scripts/navigation.js')}}"></script>
</body>

</html>