<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul><br>
        <h3>Biodata</h3>
    @foreach ($a as $data)
        <li>
            ID : {{ $data->id }} | <a href="/cont-bio/{{ $data->id }}"> {{ $data->nama }} </a>
        <hr>
        </li>
    @endforeach
    </ul>
</body>
</html>