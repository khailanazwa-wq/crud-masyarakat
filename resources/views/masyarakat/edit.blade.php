<!DOCTYPE html>
<html>
<head><title>Edit</title></head>
<body>

<h2>Edit Data</h2>

<form action="/masyarakat/{{ $data->id }}" method="POST">
@csrf
@method('PUT')

<input type="text" name="nama" value="{{ $data->nama }}"><br><br>
<input type="text" name="alamat" value="{{ $data->alamat }}"><br><br>
<input type="text" name="nomor_kk" value="{{ $data->nomor_kk }}"><br><br>
<input type="text" name="nomor_ktp" value="{{ $data->nomor_ktp }}"><br><br>

<select name="jenis_kelamin">
    <option value="laki-laki" {{ $data->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
    <option value="perempuan" {{ $data->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
</select><br><br>

<button type="submit">Update</button>

</form>

</body>
</html>