<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anggota</title>
</head>
<body>
    <ul>
    <h3>Penggunaan Pemanggilan Biasa</h3>
    <?php 
    
    // Penggunaan Pemanggilan biasa
    foreach ($a as $data) {
        echo "<li>".$data['id']." | ";
        echo $data['nama']."</li>";  
        echo "<hr>";
    }
    ?>
    
    <!-- Penggunaan Blade -->
    <br><br><h3>Penggunaan Blade</h3>
    @foreach($a as $data)
        <li>{{$data['id']}} | {{$data['nama']}}</li>
        <hr>
    @endforeach

    </ul>
</body>
</html>