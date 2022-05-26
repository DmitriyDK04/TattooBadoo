<?php 
session_start();
require 'connectDB.php';
$iduser = $_SESSION['users']['id'];

$text = $_POST['text'];
$date = date('Y-m-d');

if(isset($_POST['submit_comment'])){
    $insert = mysqli_query($link, "INSERT INTO `comments`(`id_users`, `text`, `date`) VALUES ('$iduser','$text','$date')");
       
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    
}
var_dump();

?>