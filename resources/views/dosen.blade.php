<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Daftar Dosen</h1>
    <ul>
        @foreach($nama as $n)
        <li>{{$n}}</li>
        @endforeach
    </ul>

</body>

</html>