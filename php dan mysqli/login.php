<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="login_aksi.php" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Login</button>
                <a href="register.php">Register</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
