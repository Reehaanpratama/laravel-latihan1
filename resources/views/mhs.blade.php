<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($query as $data)
        <h2>Data Mahasiswa</h2>
        NIM : {{ $data->nim }} <br>
        Nama : {{ $data->nama }} <br>
        Jurusan : {{ $data->jurusan }} <br>
        Wali : {{ $data->wali }}
        <hr>
    @endforeach
</body>
</html>
