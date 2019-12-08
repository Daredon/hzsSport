<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>scroll.</title>
  <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
  <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/scroll/scroll.css')}}" />
  <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
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
            <span>Početak</span>
          </a>
        </li>
        <li>
          @if(Session::get('type') == 1)
          <a onclick="scrollToTop()">
            <i class="material-icons">people</i>
            <span>Grupe</span>
          </a>
          @else
          <a onclick="scrollToTop()">
            <i class="material-icons">people</i>
            <span>Grupa</span>
          </a>
          @endif
        </li>
        <li>
          <a href="#">
            <i class="material-icons">favorite</i>
            <span>Liked</span>
          </a>
        </li>
        <li class="account">
          @if(Session::get('id') == null)
          <a href="{{ route('page.login')}}">
            <i class="material-icons">person</i>
            <span>Prijavi se</span>
          </a>
          @else
          <a href="{{ route('user.showcase', Session::get('username'))}}">
            <i class="material-icons">person</i>
            <span>Nalog</span>
          </a>
          @endif
        </li>
      </ul>
    </div>
  </nav>
  <div id="scroller">
    <div id="sports">
      <div id="slide1">
        <video autoplay loop muted>
          <source src=" {{asset('assets/videos/background1.mp4')}}" type="video/mp4">
        </video>
      </div>
      <div id="slide2">
        <img src="{{asset('assets/slides/sadBoomer.jpg')}}" alt="lol" />
        <h1></h1>
      </div>
      <div id="slide3">
        <img src="{{asset('assets/slides/sadDishwasher.jpg')}}" alt="lol1" />
      </div>
    </div>
  </div>

  <div id="controlls">
    <div id="left" onclick="scrollBack()">
      <i class="material-icons">keyboard_arrow_left</i>
    </div>
    <div id="right" onclick="scrollFront()">
      <i class="material-icons">keyboard_arrow_right</i>
    </div>
  </div>
  <script src="scripts/inView.js"></script>
  <script src="scripts/scroll.js"></script>

</body>

</html>