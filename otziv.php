<?php 
session_start();
if($_SESSION['info']){
    echo "<script>alert(".$_SESSION['info'].");</script>";
    unset($_SESSION['info']);
}













$idvideo = $_GET['video'];
$idcomment = $_GET['comments'];

$_SESSION['idvideo']=$idvideo;
$_SESSION['idcomments']=$idcomment;




//var_dump($idvideo);
require_once "vendor/connectDB.php";
$videoquery = mysqli_query($link,"SELECT * FROM `video` WHERE `id` = '$idvideo'");
$video = mysqli_fetch_assoc($videoquery);

$likequery = mysqli_query($link, "SELECT * FROM `comments` WHERE `id` = '$idcomment'" );
$like = mysqli_fetch_assoc($likequery);


$getcomment = mysqli_query($link,"SELECT `comments`.*, `users`.`login` AS `Name`
FROM `comments` 
	LEFT JOIN `users` ON `comments`.`id_users` = `users`.`id`
    ;" );




?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мастера</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/o_nas/main.css">  

    <link rel="stylesheet" href="assets/css/otziv/main.css">  
    

    <!-- Компоненты -->
    
    <link rel="stylesheet" href="assets/css/components/header.css">  
    <link rel="stylesheet" href="assets/css/components/footer.css">    
  <!-- END Компоненты -->






	<link rel="stylesheet" href="assets/js/components/libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/js/components/libs/swiper/swiper-bundle.min.css">
	





    <link rel="stylesheet" href="vendor/config.php">
    <link rel="stylesheet" href="vendor/subscribe.php">
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script>if(!window._teletypeWidget){window._teletypeWidget = window._teletypeWidget || {};!function(){var t = document.getElementsByTagName("app-teletype-root");if (t.length > 0 && _teletypeWidget.init)return;var d = new Date().getTime();var n = document.createElement("script"),c = document.getElementsByTagName("script")[0];n.id = "teletype-widget-embed",n.src = "https://widget.teletype.app/init.js?_=" + d,n.async = !0,n.setAttribute("data-embed-version", "0.1");c.parentNode.insertBefore(n, c);}();document.addEventListener("teletype.ready", function(){console.log("Teletype ready")});window.teletypeExternalId = "HVyaEMz4Ri0fHtGTGj397fQ1B2GVRfGBXEYz72ftE7NVqmHhZ7j40DFU_JbGWZoU";}</script>
</head>

<body>
<?php
   require_once 'components/header.php';
   ?>


<style>
    .disqus_thread{
	width: 50%;
	margin-left: 25%;
	margin-top: 15%;
}
</style>
    <!-- Линия-->
    <header       class="header-section header-normal">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            
    </header>
    

   

  

 <!-- Breadcrumb Section Begin -->
 <section       class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Услуги</h2>
                        <div class="bt-option">
                            <a href="index.php">Главная</a>
                            <span>Услуги</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->







<section         class="qwe">
    <div class="container">
    <div id="disqus_thread"></div>
    <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
                s.src = 'https://tattoobadoo.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
        })();
    </script>
    </div>
</section>



<section>
   

<form class="video-commit" action="vendor/addComment.php" method="POST">
<div class="form-left-decoration"></div>
<div class="form-right-decoration"></div>
<div class="circle"></div>
<div class="form-inner">
<h3>Оставьте комментарий:</h3>

<textarea placeholder="Введите текст..." required maxlength="300" cols="60" rows="5" class="textarea" name="text"></textarea>
<input class="btnOtp" type="submit" name="submit_comment" value="Отправить" ?>
</div>
</form>




    
<?php 
 while ($comment = mysqli_fetch_assoc($getcomment)){?>
 <form class="comment">
<div class="post-wrap">
    <div class="post-item">
        <div class="item-content">
            <div class="item-icon group"></div>
                <div class="item-body">
                    <p><span><?php echo $comment['Name']?></span></p>
                    <h3> <span><?php echo $comment['text']?></span></h3>
                    
                </div>
                        <div class="item-footer">
                            <a href="#" class="link"><span class="dateAlign"><?php echo $comment['date']?></span></a>
                        </div>
                
            
        </div>
    </div>
</div>

</form>
<?php }?>
    
       
</section>







    <?php
   require_once 'components/footer.php';
   ?>
<script src="assets/js/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/components/app.js"></script>
<script src="assets/js/o_nas/app.js"></script>
<script src="assets/js/components/libs/parallax.min.js"></script>
</body>

</html>