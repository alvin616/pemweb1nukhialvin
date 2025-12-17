<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login">

<div class="container">
    <h1>Register</h1>
    <form action="register_aksi.php" method="POST">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Daftar</button>
        </div>
        <p class="login-register-text">
            Sudah punya akun? <a href="login.php">Login</a>
        </p>
    </form>
</div>

</body>
</html>
