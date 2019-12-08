<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Događaji</title>
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/scroll/navigation.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/burger.css')}}" />
    <link rel="stylesheet" href="{{ asset('styles/event/allEvents.css')}}" />
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
                @if(Session::get('id') != null)
                <li>
                    @if(Session::get('type') == 1)
                    <a href="{{route('page.groups')}}">
                        <i class="material-icons">people</i>
                        <span>Grupe</span>
                    </a>
                    @else
                    <a href="{{route('page.groups')}}" z>
                        <i class="material-icons">people</i>
                        <span>Grupa</span>
                    </a>
                    @endif
                </li>
                <li>
                    <a href="{{route('events.show')}}">
                        <i class="material-icons">event</i>
                        <span>Događaji</span>
                    </a>
                </li>
                @if(Session::get('type') == 1)
                <li>
                    <a href="{{ route('page.addEvent') }}">
                        <i class="material-icons">add</i>
                        <span>Dodaj događaj</span>
                    </a>
                </li>
                @endif
                @endif
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
    <div class="oh">
        <div class="cards">
            @foreach ($events as $event)
            <div class="card">
                <h1>{{$event->name}}</h1>
                <h2>{{$event->description}}</h2>
                <h3>Pocetak: {{date("d.m.Y H:i", $event->time_start)}}</h3>
                <h3>Kraj: {{date("d.m.Y H:i", $event->time_end)}}</h3>
            </div>
            @endforeach
        </div>
    </div>
    <script src="scripts/navigation.js"></script>
</body>

</html>