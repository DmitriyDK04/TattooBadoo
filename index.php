<?php 
session_start();
if($_SESSION['info']){
    echo "<script>alert(".$_SESSION['info'].");</script>";
    unset($_SESSION['info']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/index/index.css">    

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



   <ul class="body_slides">
            <li></li>
            <li></li>
            <li></li>
        </ul>


  


<div class="q">
 <!-- Intro -->
 <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h2 class="intro__suptitle">Идеальные реализации для любой идеи</h2>
                <h1 class="intro__title">"TattooBadoo" - Самый масштабный проект города Омска</h1>

                <a class="btn" href="uslugi.php">Смотреть всё</a>
            </div>
        </div>

    

    </div><!-- /.intro -->

    <!-- Мастера -->
    <section class="section" id="about">
        <div class="container">

            <div class="section__header">
                <h3 class="section__suptitle">Наши мастера</h3>
                <h2 class="section__title">Предлагают следующие услуги:</h2>
                <div class="section__text">
                    <p>Студии "TattooBadoo" - самый масштабный тату-проект в городе Омске, объединяющий в себе две студии, талантливых мастеров и тысячи счастливых гостей! В 2017 году перешли на Российский уровень, открыв третью студию, одну из лучших в Москве.</p>
                </div>
            </div>

            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/about/1.jpg " style="width:450px; height:275px;" alt="">
                        </div>
                        <div class="card__text">Татуировка</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/about/4.jpg" style="width:450px; height:275px;" alt="">
                        </div>
                        <div class="card__text">Удаление</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="assets/images/about/5.jpg" style="width:450px; height:275px;" alt="">
                        </div>
                        <div class="card__text">Пирсинг</div>
                    </div>
                </div>

                
            </div>

        </div><!-- /.container -->
    </section>


    


    <!-- О компании -->
    <section class="section" id="services">
        <div class="container">

            <div class="section__header">
                <h3 class="section__suptitle">О компании</h3>
            </div>

            <div class="services">
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/photography.png" alt="">

                    <div class="services__title">Качество </div>
                    <div class="services__text">Качество нашей работы и уровень мастеров признаны наградами фестивалей/конвенций России и Европы. Воплотим любую Вашу идею, на самом высоком уровне - от аккуратной надписи до масштабной художественной работы в любом стиле.</div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/webdesign.png" alt="">

                    <div class="services__title">Оборудование</div>
                    <div class="services__text">В ходе работы используем только сертифицированное современное оборудование, лучшие пигменты и стерильные одноразовые расходные материалы, что гарантирует высокое качество и безопасность оказываемых услуг.</div>
                </div>
                <div class="services__item  services__item--border">
                    <img class="services__icon" src="assets/images/services/creativity.png" alt="">

                    <div class="services__title">Подход</div>
                    <div class="services__text">Индивидуальный подход к каждому клиенту. Грамотно проконсультируем по всем вопросам. Поможем в выборе идеи, места, размера татуировки. Подскажем, как нам достичь идеальной татуировки! Консультация, разработка эскиза (проекта) - бесплатно!</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/seo.png" alt="">

                    <div class="services__title">Отзывы</div>
                    <div class="services__text">Более 1000 реальных благодарных отзывов о работе с нашей командой! Мы знаем как предоставить комфортную атмосферу и прийти к отличным результатам!</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/css-html.png" alt="">

                    <div class="services__title">Фестивали</div>
                    <div class="services__text"> Команда «Tattoo-Leader» регулярно представляет Омск и Москву на Российских и международных тату-фестивалях, конвенциях, начиная с 2015 года.</div>
                </div>
                <div class="services__item">
                    <img class="services__icon" src="assets/images/services/digital.png" alt="">

                    <div class="services__title">Развитие</div>
                    <div class="services__text">Мы развиваемся и совершенствуемся, для того чтобы создавать для Вас лучшие татуировки. Не желаем стоять на месте, нас всегда мотивируют дух состязания и новые победы!</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>



  

        </div>
    </section>

 <!-- Команда -->
 <section class="section">
    <div class="container">

        <div class="section__header">
            
            <h2 class="section__title">Наша команда:</h2>
            <div class="section__text">
                
            </div>
        </div>

        <div class="card">
            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img">
                        <img src="assets/images/team/1.jpg" alt="">
                    </div>
                    <div class="card__text">
                        <div class="social">
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card__info">
                    <div class="card__name">Виталий Гусев</div>
                    <div class="card__prof">Предпочитаемые стили:
                        Реализм, Black and grey, цвет
                        портретная татуировка</div>
                </div>
            </div><!-- /.card__item -->

            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img">
                        <img src="assets/images/team/2.jpg" alt="">
                    </div>
                    <div class="card__text">
                        <div class="social">
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card__info">
                    <div class="card__name">Михаил Кузнецов</div>
                    <div class="card__prof">Предпочитаемые стили:
                        Реализм Black and grey
                        портретная татуировка
                        акварель</div>
                </div>
            </div><!-- /.card__item -->

            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img">
                        <img src="assets/images/team/3.jpg" alt="">
                    </div>
                    <div class="card__text">
                        <div class="social">
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a class="social__item" href="#" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card__info">
                    <div class="card__name">Олег Басов</div>
                    <div class="card__prof">Предпочитаемые стили:
                        Old school
                        New school
                        Японская
                        Органика
                        Орнаментальная
                        графика</div>
                </div>
            </div><!-- /.card__item -->

        </div><!-- /.card -->

    </div><!-- /.container -->
</section>



<!-- Лого -->
<div class="section  section--gray">
    <div class="container">

        <div class="logos">
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/1.png" alt="">
            </div>
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/2.png" alt="">
            </div>
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/3.png" alt="">
            </div>
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/4.png" alt="">
            </div>
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/5.png" alt="">
            </div>
            <div class="logos__item">
                <img class="logos__img" src="assets/images/logos/6.png" alt="">
            </div>
        </div>

    </div>
</div>






    <!-- Работы -->
    <section class="section" id="works">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">Наши работы</h3>
                
                <div class="section__text">
                    <p></p>
                </div>
            </div>
        </div>

        <div class="works">
            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/1.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Виталий Гусев</div>
                        <div class="works__text">Портретная татуировка(5 часов)</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/2.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Михаил Кузнецов</div>
                        <div class="works__text">Акварель(8 часов)</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/3.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Михаил Кузнецов</div>
                        <div class="works__text">Портретная татуировка (6 часов)</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/4.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Олег Басов</div>
                        <div class="works__text">Old School (3 часа)</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/5.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Михаил кузнецов</div>
                        <div class="works__text">Black and Gray (8 часов)</div>
                    </div>
                </div>
            </div>

            <div class="works__col">
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/6.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Виталий Гусев</div>
                        <div class="works__text">Цвет (7часов)</div>
                    </div>
                </div>
                <div class="works__item">
                    <img class="works__image" src="assets/images/works/7.jpg" alt="">
                    <div class="works__info">
                        <div class="works__title">Олег Басов</div>
                        <div class="works__text">Органика (9 часов)</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>



 <!-- Клиенты -->
 <section class="section  section--clients">
    <div class="container">

        <div class="section__header">
            <h3 class="section__suptitle">Счастливые люди</h3>
            <h2 class="section__title">Что о нас пишут клиенты</h2>
        </div>

        <div class="clients">
            <div class="clients__item">
                <img class="clients__photo" src="assets/images/clients/1.png" alt="">
                <div class="clients__content">
                    <div class="clients__name">Антон Добровольский</div>
                    
                    <div class="clients__text">Настало время делать тату, было необходимо сделать выбор салона и по совету друзей обратился сюда. Скажу точно, ни разу не пожалел. Делал в салоне "центр", админ Руслан уже на входе в салон стал располагать к себе, подробно отвечал на все вопросы, и просто вёл себя как старый добрый друг. Чуть позже произошла встреча с мастером, Костя Баженов. Обсудили все детали и тонкости эскиза, так же отвечал на все вопросы. Слегка изменили эскиз тату из-за чего она стала выглядеть намного круче. </div>
                </div>
            </div>

            <div class="clients__item">
                <img class="clients__photo" src="assets/images/clients/2.png" alt="">
                <div class="clients__content">
                    <div class="clients__name">Никита Антонов</div>
                    <div class="clients__text">Спасибо тату Лидер за проделанную работу с моей тату. После неудачно выбранного тату салона (если его можно так назвать), боялась идти в другой на коррекцию. Все-таки решилась и пришла к вам. Однако...не прогадала). Все получилось на отлично) я осталась довольна, и ценой, и качеством, и скоростью работы. Меня не мучили, как в прошлом "салоне". Спасибо за проделанную работу. Теперь я довольна своей тату. Руки золотые))) Ещё раз спасибо вам!</div>
                </div>
            </div>

            <div class="clients__item">
                <img class="clients__photo" src="assets/images/clients/3.png" alt="">
                <div class="clients__content">
                    <div class="clients__name">Андрей Артуров </div>
                    <div class="clients__text">Недавно сделал свое первое тату в студии на левом берегу. В салоне очень уютно и чисто, доброжелательный и позитивный администратор Руслан , помог в в выборе эскиза. Воплотил мечту в реальность мастер Михаил, очень качественно, быстро и самое главное не больно, спасибо ему огромное за это! Я очень довольна, что выбрала именно вашу студию, процветания вам и побольше благодарных клиентов!</div>
                </div>
            </div>

            <div class="clients__item">
                <img class="clients__photo" src="assets/images/clients/4.png" alt="">
                <div class="clients__content">
                    <div class="clients__name">Владислав Васильев</div>
                    <div class="clients__text">Делал татуировку у Олега и ни о чем не жалею, каждый день она меня безумно радует) Никита профессионал своего дела ,отзывчивый, добрый , весёлый, делает аккуратно и почти безболезненно, доходчиво объясняет. Мне очень близок его стиль , безумно нравятся его эскизы , решила что буду ходить только к нему за новыми татуировками Спасибо всему коллективу Лидера! У вас просто невероятная атмосфера. Вы шикарные! продолжайте в том же духе ❤</div>
                </div>
            </div>
        </div><!-- /.clients -->

    </div><!-- /.container -->
</section>




</div>












 <!--  Перелистывающийся фон   -->

    <style>
        
html {
    min-height: 100%
    }
body {
    min-height: 100%;
	margin:0;
	padding:0;
	font: 15px Tahoma;
	color:#555;
    }
p {
    margin: 1em 0;
    text-align: center
    }
#top{
	width:100%;
	background: #222;
	text-align:center;
	height:35px;
	line-height:35px;
	}
#top a{color:#00FF00;text-decoration:none;}
.logo{
	width:200px;
	font: 22px/125% Tahoma;
	float:left;
	line-height:35px;
	}
.logo span{font: 12px/125% Tahoma;}
 





.body_slides{
	list-style:none;
	margin:0;
	padding:0;
	z-index:-2; 
	background:#000;}
.body_slides,
.body_slides:after{
    position: fixed;
	width:100%;
	height:100%;
	top:0px;
	left:0px;}
.body_slides:after { 
    content: '';
	background: transparent url(images/pattern.png) repeat top left;}

@-webkit-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
@-moz-keyframes anim_slides {
0% {opacity:0;}
6% {opacity:1;}
24% {opacity:1;}
30% {opacity:0;}
100% {opacity:0;}
}
.body_slides li{
    width:100%;
	height:100%;
	position:absolute;
	top:0;
	left:0;
    background-size:cover;
    background-repeat:none;
	opacity:0;
    -webkit-animation: anim_slides 18s linear infinite 0s;
    -moz-animation: anim_slides 18s linear infinite 0s;
    -o-animation: anim_slides 18s linear infinite 0s;
    -ms-animation: anim_slides 18s linear infinite 0s;
    animation: anim_slides 18s linear infinite 0s;
}
  
.body_slides li:nth-child(1){
background-image: url(assets/images/1.jpg) 
}
.body_slides li:nth-child(2){
-webkit-animation-delay: 6.0s;
-moz-animation-delay: 6.0s;
background-image: url(assets/images/2.jpg) 
}
.body_slides li:nth-child(3){
-webkit-animation-delay: 12.0s;
-moz-animation-delay: 12.0s;
background-image: url(assets/images/3.jpg) 
}

    </style>






<div id="subscribe_form">
      <h1 class="subscribe_label">Подписка на рассылку</h1>
      <form action="subscribe.php" method="post">
         <p>
            <input type="text" name="user_name" id="user_name" placeholder="Введите Ваше имя">
            <input type="text" name="email" id="email" placeholder="Введите Ваш e-mail"/>
         </p>
         <input type="submit" value="Подписаться" name="submit_form"/> 
      </form>
   </div>



   
   



    <?php
   require_once 'components/footer.php';
   ?>
    




  
</body>


<script src="assets/js/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/components/app.js"></script>

</html>