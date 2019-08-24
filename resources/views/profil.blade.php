<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>
    <ul>
    <ol><br>
        <h2>Data Siswa</h2>
        @foreach($bio as $data)
            <li>&nbsp;| <a href="/detail-profil/{{$data->id}}"> {{$data->nama}} </a></li>
            <hr>    
        @endforeach
    </ol>
    </ul>
</body>
</html>