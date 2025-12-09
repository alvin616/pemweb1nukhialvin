<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_tinggal = $_POST['tempat tinggal'];

//menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nama','$nim','$tempat_tiggal')");

//menghilangkan halaman kembali ke index.php
header("location:index.php");
?>