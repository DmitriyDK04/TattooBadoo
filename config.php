<?php
   $host = "127.0.0.1";
   $dbuser = "root";
   $dbpassword = "root";
   $dbname = "isp396v2";
   $mysqli = new mysqli($host, $dbuser, $dbpassword, $dbname);
   if ($mysqli->connect_error) {
      die('Ошибка подключения (' . $mysqli->connect_errno . ') '. 
      $mysqli->connect_error);
   }
?>