<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form method="post" action="tambah_aksi.php">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" required></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="SIMPAN">
                <a href="tabel.php">Kembali</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
