<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">

<div class="container">
    <h1>Login</h1>
    <form action="login_aksi.php" method="POST">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Login</button>
        </div>
        <p class="login-register-text">
            Belum punya akun? <a href="register.php">Register</a>
        </p>
    </form>
</div>

</body>
</html>
