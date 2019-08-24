<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru</title>
</head>
<body>
    <ul><br>
        <h3>Data Guru SMK ASSALAAM</h3>
        @foreach ($a as $data)
        <li>
            ID : {{ $data->id }} | <a href="/data-guru/{{ $data->id }}"> {{ $data->nama }} </a>
        <hr>
        </li>
        @endforeach
    </ul>
</body>
</html>