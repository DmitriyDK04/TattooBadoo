<?php 
require "vendor/connectDB.php";
session_start();
$id = $_SESSION['users']['id'];
$userquery = mysqli_query($link,"SELECT * FROM `users` WHERE `id` = '$id'" );
//var_dump($id);
$user = mysqli_fetch_assoc($userquery);

$videoquery = mysqli_query($link,"SELECT * FROM `video` WHERE `id_users` = '$id'")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSSviews/index.css">
    <link rel="stylesheet" href="assets/CSSviews/footer.css">
    
    
    <title>Личный кабинет</title>
</head>
<body>
<div class="wrapper">
<?php
   require_once 'components/header.php';
   ?>
 <main class="main">
 <div class="qwe">
   <div class="container">
       <div class="avatarka__info">
           <span class="avatarka"><img src="/public/defualtavatar.png" alt=""></span>
           <div class="user__info">
               <form action="vendor/updateProfile.php" method="POST">
               <label for="">Логин:<input class="string__info" name="name" type="text" value="<?php echo $user['login'] ?>" disabled></label>
               <label for="">Пароль:<input class="string__info" name="password" type="password" value="<?php echo  $user['password'] ?>" disabled ></label>
               <label for="">E-mail:<input class="string__info" name="email" type="email" value="<?php echo  $user['email'] ?>" disabled></label>
               
               <button type="submit" class="btnSave"  name="saveProfile" id="save" hidden>Сохранить</button>
               
               
               
               </form>
               <button type="submit"  class="btnCancel" name="close" id="close" hidden>Отменить</button>
              
               <button type="submit" class="btnRedact"  name="eddit" id="eddit">Редактировать</button>
               
           </div>
       </div>
       <div class="News">
       <h1>Новости</h1>
       </div>
      
   </div>
</div>








   
   <div class="video__page">
<ol class="push">
<?php while($video = mysqli_fetch_assoc($videoquery)){ ?>

<li> <a  href="page.php?video=<?php echo $video['id'] ?>">
<div class="video__container">
<h1><?php echo $video['name'];?></h1>
<p><?php echo $video['description'];?></p>
<span class=""><?php echo $video['date'];?></span>
</div>
</a></li>
<?php }?>

</ol>

   </div>
  
   </div>


 </main>
 
 <?php
   require_once 'components/footer.php';
   ?>
 <script src="/assets/js/main.js"></script>
</div>



</body>
</html>