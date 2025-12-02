<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id     = $_POST['id'];
$nama   = $_POST['nama'];
$nis    = $_POST['nim'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', nis='$nis', alamat='$alamat' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");

?>
