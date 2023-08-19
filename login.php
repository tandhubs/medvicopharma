<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include"includes/head.php" ?>
    <title>Login</title>
</head>
<body>
<?php include"includes/header.php" ?>

<div class="login">
    <div class="login-sec">
        <h3>Login to Medvico</h3>
        <form action="">
    <input type="email" name="email" placeholder="Email or Username" id="email-input">
    <input type="password" name="password" placeholder="Password" id="password-input">
    <button type="login" id="login-btn">Login <i class="bi bi-arrow-right-circle-fill"></i></button>
    </form>

    <div class="login-2">
    <div class="check-box">
    <input type="checkbox" id="remember" name="remember" value="Remember">
    <label for="remember">Remember me</label>
    </div>

    <div class="login-link">
    <a href="#">Forgotten your password?</a>
    </div>

    <div class="login-link">
    Do not have an account?
    <a href="#">Create new.</a>
    </div>

    </div>

    </div>
</div>

</body>
</html>