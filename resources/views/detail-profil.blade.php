<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><br>
<div class="card" align="center" style="text-align:left" border="1px">
        <img src="{{url('/images/avatar.png')}}" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>{{$bio->nama}}</b></h4> 
            <br><b>ID : {{$bio->id}}</b>
            <br>Umur : {{$bio->umur}}
            <br>Alamat : {{$bio->alamat}}
        </div>
      </div>
</body>
</html>