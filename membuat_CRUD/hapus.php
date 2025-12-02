<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query ($koneksi,"delete from siswaa where id='$id'");

header("location:index.php");


?>