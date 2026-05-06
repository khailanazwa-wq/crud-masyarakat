<!DOCTYPE html>
<html>
<head><title>Tambah</title></head>
<body>

<h2>Tambah Data</h2>

<form action="/masyarakat" method="POST">
@csrf

<input type="text" name="nama" placeholder="Nama"><br><br>
<input type="text" name="alamat" placeholder="Alamat"><br><br>
<input type="text" name="nomor_kk" placeholder="Nomor KK"><br><br>
<input type="text" name="nomor_ktp" placeholder="Nomor KTP"><br><br>

<select name="jenis_kelamin">
    <option value="">-- Pilih --</option>
    <option value="laki-laki">Laki-laki</option>
    <option value="perempuan">Perempuan</option>
</select><br><br>

<button type="submit">Simpan</button>

</form>

</body>
</html>