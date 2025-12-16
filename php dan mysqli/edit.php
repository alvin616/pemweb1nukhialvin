<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form method="post" action="edit_aksi.php">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $d['nim']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" required><?php echo $d['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="UPDATE">
                <a href="index.php">Kembali</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
