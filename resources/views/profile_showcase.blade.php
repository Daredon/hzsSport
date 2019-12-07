<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>scroll.</title>
  <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/profile.css')}}" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
</head>

<body onload="load()" onscroll="scrolled()" onresize="resized()">
  <nav id="nav">
    <div onclick="burgerToggle()" class="burger" id="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="links">
      <ul>
        <li>
          <a onclick="scrollToTop()">
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
          <a href="{{route('profile')}}">
            <i class="material-icons">person</i>
            <span>Account</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>


</body>

</html>