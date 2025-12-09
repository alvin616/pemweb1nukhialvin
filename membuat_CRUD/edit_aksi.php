<?php
// koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_tinggal = $_POST['tempat tinggal'];

// update data ke database
mysqli_query($koneksi,"update siswaa set nama='$nama',nim='$nim',tempat tinggal='$tempat_tinggal')");

// mengalihkan halaman kembalike index.php
header("location:index.php");

?>