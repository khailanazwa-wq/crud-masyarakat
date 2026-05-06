<!DOCTYPE html>
<html>
<head>
    <title>Data Masyarakat</title>
    <style>
        body { font-family: Arial; background: #f4f6f9; padding:20px; }
        h2 { text-align:center; }
        table { width:100%; border-collapse:collapse; background:white; }
        th { background:#007bff; color:white; }
        th,td { padding:10px; border:1px solid #ddd; text-align:center; }
        tr:nth-child(even){ background:#f2f2f2; }
        .btn { padding:6px 10px; color:white; text-decoration:none; border-radius:5px; }
        .add { background:green; }
        .edit { background:orange; color:black; }
        .hapus { background:red; border:none; }
    </style>
</head>
<body>

<h2>Data Masyarakat</h2>

<a href="/masyarakat/create" class="btn add">+ Tambah Data</a>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No KK</th>
    <th>No KTP</th>
    <th>Jenis Kelamin</th>
    <th>Aksi</th>
</tr>

@foreach($data as $m)
<tr>
    <td>{{ $m->id }}</td>
    <td>{{ $m->nama }}</td>
    <td>{{ $m->alamat }}</td>
    <td>{{ $m->nomor_kk }}</td>
    <td>{{ $m->nomor_ktp }}</td>
    <td>{{ $m->jenis_kelamin }}</td>
    <td>
        <a href="/masyarakat/{{ $m->id }}/edit" class="btn edit">Edit</a>

        <form action="/masyarakat/{{ $m->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn hapus">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

</body>
</html>