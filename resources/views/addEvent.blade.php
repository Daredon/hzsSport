<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/calendar.css') }}">
    <title>Dodavanje dogadjaja</title>
</head>
<body>
@if (isset($errors))
    @foreach($errors as $error)
        {{ $error }} <br>
    @endforeach
@endif
{!! Form::open(['route' => 'event.create']) !!}
        <input type="text" name="name" placeholder="Naziv dogadjaja">
        <input type="text" name="location" placeholder="Lokacija">
        <input type="text" name="start" id="start">
        <input type="text" name="end" id="end">
        <textarea name="description" placeholder="Opis"></textarea>

        <input type="submit">
{!! Form::close() !!}
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="{{ asset('scripts/calendar.js') }}"></script>
<script>
    jQuery('#end').datetimepicker();
    jQuery('#start').datetimepicker();
</script>
</body>
</html>