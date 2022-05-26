<?php
require 'connectDB.php';
session_start();
$id = $_SESSION['users']['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

if(isset($_POST['saveProfile'])){
    $newprofile = mysqli_query($link,"UPDATE `users` SET `login`='$name',
    `password`='$password',`email`='$email' WHERE `id` = '$id'");
    header('Location: '. $_SERVER['HTTP_REFERER']);
}
?>