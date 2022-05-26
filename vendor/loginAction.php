<?php
session_start();
require "connectDB.php";
$login = $_POST['login'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$confirmpassword = md5($_POST['confirmpassword']);
// $birthday = $_POST['birthday'];
$birthday = date('Y-m-d');
$avatarka = 'defualtavatar.png';


// Авторизация
if(isset($_POST['submit_login'])){
$resultlogin = mysqli_query($link,"SELECT * FROM `users` WHERE (`login` = '$login' OR `email`='$login') AND `password` = '$password'");
if(mysqli_num_rows($resultlogin) > 0){
    $user = mysqli_fetch_assoc($resultlogin);
    $_SESSION['users'] = [
        'id' => $user['id'],
        'login' => $user['login'],
        'password' => $user['password'],
        'email' => $user['email'],
        'avatarka'=>$user['avatarka'],
        'birthday'=>$user['birthday'],
    ];

header("Location: ../index.php");

}
else {
$_SESSION['message'] = "Не правильный логин или пароль";
header("Location: ".$_SERVER['HTTP_REFERER']);
}
}
// Конец Авторизации

//Регистрация 

if(isset($_POST['submit_reg'])){

    $checkuser = mysqli_query($link,"SELECT * FROM `users` WHERE `login` = '$login' OR `email`='$email'");

    if($password !== $confirmpassword){
        $_SESSION['message'] = "Пароли не совпадают";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    else if(mysqli_num_rows($checkuser) > 0){
        $_SESSION['message'] = "Пользователь с таким логином или email существует";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    else {
        $adduser = mysqli_query($link,"INSERT INTO `users`( `login`, `password`, `email`, `avatarka`, `birthday`) VALUES ('$login','$password','$email','$avatarka','$birthday')");
    
   
        if($adduser){
            $_SESSION['message'] = "Пользователь успешно зарегистрирован!";
            header("Location: ../login.php");
        }

    }
}