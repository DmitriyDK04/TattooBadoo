<?php 
session_start();
if($_SESSION['info']){
    echo "<script>alert(".$_SESSION['info'].");</script>";
    unset($_SESSION['info']);
}
require "vendor/connectDB.php";
$gallery = mysqli_query($link, "SELECT * FROM `gallery`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" href="assets/css/gallery/main.css">



    <!-- Компоненты -->
    
	 <link rel="stylesheet" href="assets/css/components/header.css">  
    <link rel="stylesheet" href="assets/css/components/footer.css">    
  <!-- END Компоненты -->

    
	<title>Галерея</title>
	<style>
		.gallery { opacity: 0; }
	</style>

</head>
<body>



<?php
   require_once 'components/header.php';
   ?>

<div class="page">
<h1 class="header1">Architecture <span>Loading...</span></h1>

<!-- .gallery>(.gallery__item*20>img[src="img/$.jpg" alt="Alt"])*4 -->
<?php while ($gal = mysqli_fetch_assoc($gallery)){ ?>
<div class="gallery">
	<div class="gallery__item"><img src="assets/images/gallery/new/1.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/2.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/3.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/4.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/5.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/6.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/7.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/8.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/9.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/10.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/11.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/12.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/13.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/14.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/15.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/16.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/17.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/18.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/19.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/20.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/1.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/2.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/3.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/4.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/5.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/6.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/7.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/8.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/9.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/10.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/11.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/12.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/13.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/14.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/15.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/16.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/17.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/18.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/19.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/20.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/1.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/2.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/3.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/4.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/5.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/6.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/7.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/8.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/9.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/10.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/11.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/12.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/13.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/14.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/15.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/16.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/17.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/18.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/19.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/20.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/1.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/2.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/3.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/4.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/5.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/6.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/7.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/8.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/9.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/10.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/11.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/12.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/13.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/14.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/15.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/16.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/17.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/18.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/19.jpg" alt="Alt"></div>
	<div class="gallery__item"><img src="assets/images/gallery/new/20.jpg" alt="Alt"></div>
</div>
<?php }?>
    
	<script src="assets/css/gallery/gallery/libs/swiper/swiper-bundle.min.js"></script>



	<script src="assets/js/gallery/app.js"></script>

	<script src="assets/js/gallery/libs/Draggable.min.js"></script>
	<script src="assets/js/gallery/libs/gsap.min.js"></script>
	<script src="assets/js/gallery/libs/InertiaPlugin.min.js"></script>










    <script src="assets/js/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/components/app.js"></script>
<script src="assets/js/o_nas/app.js"></script>
<script src="assets/js/components/libs/parallax.min.js"></script>
</body>
</html>