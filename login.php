<?php 
session_start();
if($_SESSION['message']){
    echo "<script> alert(".$_SESSION['message'].")</script>";
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/log_reg/main.css">
    <title>login</title>
</head>
<body class="authorization">

    <form class="decor" action="vendor/loginAction.php" method="POST">
<div class="form-left-decoration" ></div>
<div class="form-right-decoration"></div>
<div class="circle"></div>
<div class="form-inner">
<h3>Авторизация</h3>
<input type="text" name = "login" required placeholder="Введите логин или e-mail">
<input type="password" name ="password" required placeholder="Введите пароль">
<input type="submit" name="submit_login" value="Войти">
<input type="submit" name="nazad" value="На главную" onclick="location.href=' http:index.php ' ">
<a href="registration.php">Ещё не зарегистрированы?</a>

<br>
    <span style="color:red;"><?php
    if($_SESSION['message']){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?></span>
</div>
</form>




</body>
</html>