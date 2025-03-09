<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    {{-- <style>
        .box {
            border: 1px solid black;
            width: 200px;
            padding: 10px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style> --}}
</head>
<body>
    <h1>Data User</h1>
    <a href="/user/tambah">+ Tambah User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username}}</td>
                <td>{{ $d->nama}}</td>
                <td>{{ $d->level_id}}</td>
                <td><a href="/user/ubah/{{$d->user_id}}">Ubah</a> | <a href="/user/hapus/{{$d->user_id}}">Hapus</a></td>
            </tr>
         @endforeach 
    </table>

    {{-- Praktikum 4 --}}
    {{-- <div>
        <table class="box">
            <tr>
                <td>Jumlah Pengguna</td>
            </tr>
            <tr>
                <td>{{ $data }}</td>
            </tr>
        </table>
    </div> --}}
</body>
</html>