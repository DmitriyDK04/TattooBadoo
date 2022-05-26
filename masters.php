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
    
    <link rel="stylesheet" href="assets/css/masters/style.css">    
    
    

    <!-- Компоненты -->
    
    <link rel="stylesheet" href="assets/css/components/header.css">  
    <link rel="stylesheet" href="assets/css/components/footer.css">    
  <!-- END Компоненты -->




    <link rel="stylesheet" href="vendor/config.php">
    <link rel="stylesheet" href="vendor/subscribe.php">
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    
    
    
    <title>TattooBadoo</title>
</head>
<body>




<?php
   require_once 'components/header.php';
   ?>
   <script></script>




  











   <section class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/10.jpg"   class="about-section spad">


            
    



<section  class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Мастера</h2>
                    <div class="bt-option">
                        <a href="index.php">Главная</a>
                        <span>Мастера</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Мастера -->






<?php while ($master = mysqli_fetch_assoc($masters)){ ?>
<div class="member-item set-bg">
    
    <div class="mi-social">
        <div class="mi-social-inner bg-gradient">
            <a href=" <?php echo $master["face"]?> "> <i class="fa fa-facebook"> </i></a>
            <a href=" <?php echo $master["inst"]?> "> <i class="fa fa-instagram"></i></a>
            <a href=" <?php echo $master["twit"]?> "> <i class="fa fa-twitter"></i></a>
            
        </div>
        
       <img src="assets/images/team/<?php echo $master['img'];?>">
    </div>

    


    <div class="mi-text">
        
        <h5><?php echo $master["name"] ?> <?php echo $master["surname"];?></h5>
        <span>Предпочитаемые стили:</span>
        <p><?php echo $master["description"]; ?></p>
        
    </div>
    
</div>
<?php }?>

<!-- Мастера End -->











<section  class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text">
                                <h2>Некоторые примеры наших работ:</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>










<div class="cd-radial-slider-wrapper">
		<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
			<li class="visible">
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						
						<defs>
							<clipPath id="cd-image-1">
								<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
							</clipPath>
						</defs>

						<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="img/img-1.jpg"></image>
					</svg>
				</div> <!-- .svg-wrapper -->

				<div class="cd-radial-slider-content">
					<div class="wrapper">
						<div>
							<h2>Виталий Гусев</h2>
							<p>Реализм: Black and grey</p>
							<a href="gallery.php" class="cd-btn">Смотреть больше</a>
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li>

			<li class="next-slide">
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						
						<defs>
							<clipPath id="cd-image-2">
								<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
							</clipPath>
						</defs>

						<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="img/img-2.jpg"></image>
					</svg>
				</div> <!-- .svg-wrapper -->

				<div class="cd-radial-slider-content">
					<div class="wrapper">
						<div>
							<h2>Владислава Егорова</h2>
							<p>Контурные работы</p>
							<a href="gallery.php" class="cd-btn">Смотреть больше</a>
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li>

			<li>
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						
						<defs>
							<clipPath id="cd-image-3">
								<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
							</clipPath>
						</defs>

						<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="img/img-3.jpg"></image>
					</svg>
				</div> <!-- .svg-wrapper -->

				<div class="cd-radial-slider-content">
					<div class="wrapper">
						<div>
							<h2>Станислав Котельников</h2>
							<p>Геометрия</p>
							<a href="gallery.php" class="cd-btn">Смотреть больше</a>
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li>

			<li class="prev-slide">
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						
						<defs>
							<clipPath id="cd-image-4">
								<circle id="cd-circle-4" cx="110" cy="400" r="60"/>
							</clipPath>
						</defs>
						
						<image  height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="img/img-4.jpg"></image>
					</svg>
				</div> <!-- .svg-wrapper -->

				<div class="cd-radial-slider-content">
					<div class="wrapper">
						<div>
							<h2>Евгения Аносенко</h2>
							<p>Old school, New school.</p>
							<a href="gallery.php" class="cd-btn">Смотреть больше</a>
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li>
		</ul> <!-- .cd-radial-slider -->

		<ul class="cd-radial-slider-navigation">
			<li><a href="#0" class="next">Next</a></li>
			<li><a href="#0" class="prev">Prev</a></li>
		</ul> <!-- .cd-radial-slider-navigation -->
		
		<div class="cd-round-mask">
			<svg viewBox="0 0 1400 800">
				<defs>
					<mask id="cd-left-mask" height='800px' width="1400px" x="0" y="0" maskUnits="userSpaceOnUse">
						<path fill="white" d="M0,0v800h1400V0H0z M110,460c-33.137,0-60-26.863-60-60s26.863-60,60-60s60,26.863,60,60S143.137,460,110,460z"/>
				    </mask>

				    <mask id="cd-right-mask" height='800px' width="1400px" x="0" y="0" maskUnits="userSpaceOnUse">
						<path fill="white" d="M0,0v800h1400V0H0z M1290,460c-33.137,0-60-26.863-60-60s26.863-60,60-60s60,26.863,60,60S1323.137,460,1290,460z"/>
				    </mask>
				</defs>
			</svg>
		</div>
	</div> <!-- .cd-radial-slider-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="assets/js/masters/slider/jquery-2.2.1.min.js"></script>');
</script>










</section>

    


    

    <?php
   require_once 'components/footer.php';
   ?>
    




  
</body>






    
<script src="assets/js/masters/slider/snap.svg-min.js"></script>
<script src="assets/js/masters/slider/main.js"></script> <!-- Resource jQuery -->
    
<script src="assets/js/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/components/app.js"></script>
<script src="assets/js/masters/app.js"></script>
<script src="assets/js/components/libs/parallax.min.js"></script>

</html>