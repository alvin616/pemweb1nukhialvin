<?php
include 'koneksi.php';

// ambil id dari URL
$id = $_GET['id'];

// hapus data berdasarkan id
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

// kembali ke halaman utama
header("location:tabel.php");
?>
