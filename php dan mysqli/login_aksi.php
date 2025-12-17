<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users 
                            WHERE username='$username' 
                            AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $data['username'];
    header("location:sukses_login.php");
} else {
    header("location:tabel.php");
}
?>
