<?php 
session_start();
if($_SESSION['info']){
    echo "<script>alert(".$_SESSION['info'].");</script>";
    unset($_SESSION['info']);
}
require "vendor/connectDB.php";
$masters = mysqli_query($link, "SELECT * FROM `masters`");

?>




















<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="assets/css/contact/style.css">
    <link rel="stylesheet" href="assets/css/contact/bootstrap.min.css">  
      

    <!-- Компоненты -->
    
    <link rel="stylesheet" href="assets/css/components/header.css">  
    <link rel="stylesheet" href="assets/css/components/footer.css">    
  <!-- END Компоненты -->




    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    
    
    
    <title>TattooBadoo</title>
</head>
<body>



















<!-- Contact Section Begin -->
<section class="contact-section spad">



<?php
   require_once 'components/header.php';
   ?>
   <script></script>




   <section  class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Контакты</h2>
                    <div class="bt-option">
                        <a href="index.php">Главная</a>
                        <span>Контакты</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   














        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-text">
                        <h4>Контакты</h4>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-location-pin"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Наша локация:</span>
                                        Гагарина 10
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-mobile"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Телефон:</span>
                                        8 913 826 28 92
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ci-icon">
                                <span class="ti-email"></span>
                            </div>
                            <div class="ci-text">
                                <ul>
                                    <li>
                                        <span>Mail</span>
                                        dmitriy.ks.041001@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-option">
                        <h4>Оставьте комментарий</h4>
                        <form  class="comment-form contact-form"  action="" method="post">
                        <small>* Все поля обязатльны для заполнения</small>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="theme" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control" rows="3" name="message" placeholder="Messages"></textarea>
                                    <button name="submit" type="submit" class="site-btn">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->





















<!-- Map Section Begin -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1144.594525639866!2d73.37641677205649!3d54.98731929061525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43aafe1a80e84ef1%3A0x73ed6f7fab8d72ee!2z0YPQuy4g0JPQsNCz0LDRgNC40L3QsCwgMTAsINCe0LzRgdC6LCDQntC80YHQutCw0Y8g0L7QsdC7LiwgNjQ0MDI0!5e0!3m2!1sru!2sru!4v1649583098425!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map Section End -->

    

















    <?php
$to = "<dmitriy.ks.041001@gmail.com>";
$email = $_POST['email'];
$subject = $_POST["theme"];
$page = 'Страница спасибо за комментарий'; 
$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Откуда</b></td>
  <td>'.$page.'</td>
 </tr>
 <tr>
  <td><b>Адресат</b></td>
  <td><a href="mailto:'.$email.'">'.$email.'</a></td>
 </tr>
 <tr>
  <td><b>Тема</b></td>
  <td>'.$subject.'</td>
 </tr>
 <tr>
  <td><b>Сообщение</b></td>
  <td>'.$_POST['message'].'</td>
 </tr>
</table>
</center>	
</body>
</html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
if (!empty($email) && !empty($subject) && !empty($message)) {
$result = mail($to, $subject, $message, $headers);
}	
if ($result) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Сообщение успешно отправлено!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Сообщение не отправлено!</strong> Попробуйте еще раз.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>










    






	






    <?php
   require_once 'components/footer.php';
   ?>
    




  
</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    

    
<script src="assets/js/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/components/app.js"></script>
<script src="assets/js/masters/app.js"></script>
<script src="assets/js/components/libs/parallax.min.js"></script>

</html>