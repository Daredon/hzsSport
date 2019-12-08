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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
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
      </ul>
    </div>
  </nav>
  <div id="showcase">
    <div class="profile">
      <div>
        <img src="https://picsum.photos/150/150" alt="user">
        <div>
          <h1>{{$user->firstname . ' ' . $user->lastname}}</h1>
          <h2>{{$user->username}}</h2>
        </div>
      </div>
      <div>
        <ul>
          <li>
            <i class="material-icons">person</i>
            Masa: 70 kg
          </li>
          <li>
            <i class="material-icons">height</i>
            Visina: 180 cm
          </li>
          <li>
            <i class="material-icons">calendar_today</i>
            Starost: 50 godina
          </li>
        </ul>
        <div class="buttons">
          <a href="{{route('page.logout')}}">Odjavi se</a>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <div>
      <canvas id="pieChart" width="350" height="175"></canvas>
      <script>
        var ctx = document.getElementById('pieChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['% osoba nije uspešno odradilo zadatak', '% osoba uspešno odradilo zadatak'],
            datasets: [{
              label: '# of Votes',
              data: [15, 85],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>
    </div>
    <div>
      <canvas id="lineChart" width="350" height="175"></canvas>
      <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['jul', 'avgust', 'septembar', 'oktobar', 'novembar', 'decembar'],
            datasets: [{
              label: 'Srednja vrednost poena srca',
              data: [18, 21, 20, 24, 22, 21],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }, {
              label: 'Vaša vrednost poena srca',
              data: [17, 22, 18, 22, 24, 25],
              backgroundColor: [
                'rgba(55, 99, 132, 0.2)'
              ],
              borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }, ]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>
    </div>

    <div>
      <canvas id="barChart" width="350" height="175"></canvas>
      <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['ponedeljak', 'utorak', 'sreda', 'četvrtak', 'petak', 'subota', 'nedelja'],
            datasets: [{
              label: '# aktivnih poena',
              data: [50, 53, 47, 60, 58, 68, 72],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>
    </div>
  </div>
  <script src="{{asset('scripts/navigation.js')}}"></script>
</body>

</html>