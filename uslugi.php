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
    
    <script>document.getElementsByTagName("html")[0].className += " js";</script>

    <link rel="stylesheet" href="assets/css/o_nas/main.css">   
    <link rel="stylesheet" href="assets/css/uslugi/style.css">    
    <link rel="stylesheet" href="assets/css/uslugi/impersive.css">  
    <link rel="stylesheet" href="assets/css/uslugi/block_price.css"> 
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


<section class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/uslugi/1.jpg"   class="about-section spad">

<?php
   require_once 'components/header.php';
   ?>
   <script></script>






            
   <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h2  class="intro__suptitle" >Наши цены:</h2>
                <h1 class="intro__title">Мы предоставляем весть спектр </br>проффесиональных услуг по приемлемым ценам!</h1>
                

                
            </div>
        </div>

    



   
      
</section>

<section class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/uslugi/2.jpg"   class="about-section spad">
        
<section  class="breadcrumb-section">
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
            
    <div class="immerse-section-tr padding-top-md js-immerse-section-tr">
      <div class="immerse-section-tr__media js-immerse-section-tr__media">
        <div class="container max-width-sm">
          <!-- asset visible on small devices -->
          <figure class="immerse-section-tr__figure immerse-section-tr__figure--3-4 hide@sm js-immerse-section-tr__figure">
            <video src="assets/video/immersive-section-transition-video-1.mp4" autoplay loop muted playsInline></video>
          </figure>
          
          <!-- asset visible on bigger devices -->
          <figure class="immerse-section-tr__figure immerse-section-tr__figure--16-9 display@sm js-immerse-section-tr__figure">
            <video src="assets/video/immersive-section-transition-video-2.mp4" autoplay loop muted playsInline></video>
          </figure>
        </div>
      </div>

      <section class="immerse-section-tr__content bg-transparent padding-y-xl margin-top-lg js-immerse-section-tr__content" data-theme="dark-1">
        <!-- your content here -->
        <div class="container max-width-adaptive-sm">
          <article class="text-component line-height-lg v-space-md">
           
        




          <section class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/uslugi/2.jpg"   class="about-section spad">
          
  
















<div class="container">




      
<section  class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-texta">
                                <h2 class="q">Ознакомьтесь со всмем спектром наших услуг</h2>
                                
                                    <span  class="q">Перед вами примерная табица цен:</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table-tab">
                        <ul class="nav nav-tabs" role="tablist">
                        
                           
                           
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table class = "tab">
                                        <thead>
                                            <tr>
                                                
                                                <th>
                                                    <strong>Минимальная стоимость татуировки</strong>
                                                    <span>от 1500₽</span>
                                                </th>
                                                <th>
                                                    <strong>Небольшие работы до 10х10см</strong>
                                                    <span>от 1500₽ до 5000₽</span>
                                                </th>
                                                <th>
                                                    <strong>Средняя работа 15х15см</strong>
                                                    <span>от 6000₽ до 9000₽</span>
                                                </th>
                                                <th>
                                                    <strong>До формата А4 (5-7ч)</strong>
                                                    <span>от 9000₽</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td class="break hover-bg">
                                                    <h3>Качество в любом стиле и масштабе</h3>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h3>Безопасность</h3>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h3>Сервис и комфорт</h3>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h3>Скорость</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td class="hover-bg">
                                                    <h3>Скорость исполнения</h3>
                                                    
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Анестезия (гель)</h3>
                                                   
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Сертифицированное современное оборудование</h3>
                                                    
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Индивидуальный подход к каждому клиенту</h3>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td class="hover-bg">
                                                    <h3>Грамотно проконсультируем по всем вопросам</h3>
                                                    
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Поможем в выборе идеи</h3>
                                                   
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Подскажем, как достичь идеальной татуировки!</h3>
                                                    
                                                </td>
                                                <td class="hover-bg">
                                                    <h3>Подготовим уникальный эскиз</h3h5>
                                                    
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

          
            </section>

            </section>


          </article>
        </div>




       <!-- Расчёт стоимости татуировки------------------------------------------------------------------------------------------------ -->
    <section       class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/uslugi/4.jpg"       class="schedule-table-section spad">


<main class="calc-wrapper">
        <div class="container">
            <form id="form">
                <div class="heading">
                    <h1 class="heading-title">Расчёт стоимости татуировки</h1>
                    <p class="heading-desc">Примерная цена: 1см = 1 500 рублей</p>
                </div>

                <!-- Размер -->
                <div class="calc-section">
                    <label class="checkbox-wrapper title-bold section-title .section-title--vertical-center">
                        <span class="title__inline">Размер татуировки:</span>
                        <input type="number" min="0" max="200" value="10" id="square-input" class="title__inline input-short" />
                        <span class="title__inline">см</span>
                    </label>
                    <input type="range" id="square-range" class="range-input" min="0" max="200" value="50" step="1" />
                </div>
                <!-- // Размер -->

                <!-- Мобильная адаптивность -->
                <div class="calc-section">
                    <h4 class="checkbox-wrapper title-bold section-title">Тип татуировки</h4>
                    <label class="radio-wrapper" data-name="mobile">
                        <input type="radio" class="radio" name="type" value="1" />
                        <div class="title-lite">Реализм</div>
                    </label>
                    <label class="radio-wrapper" data-name="mobile">
                        <input type="radio" class="radio" name="type" value="1.3" checked />
                        <div class="title-lite">
                            Графика
                            <span class="note">+30% к стоимости</span>
                        </div>
                    </label>
                    <label class="radio-wrapper" data-name="mobile">
                        <input type="radio" class="radio" name="type" value="1.5" />
                        <div class="title-lite">
                        Цвет
                            <span class="note"></span>
                        </div>
                    </label>
                    <label class="radio-wrapper" data-name="mobile">
                        <input type="radio" class="radio" name="type" value="1.1" />
                        <div class="title-lite">
                        Орнаментальная

                            <span class="note">+10% к стоимости</span>
                        </div>
                    </label>
                    <label class="radio-wrapper" data-name="mobile">
                        <input type="radio" class="radio" name="type" value="1.2" />
                        <div class="title-lite">
                        Органика
                            <span class="note">+20% к стоимости</span>
                        </div>
                    </label>
                </div>
                <!-- // Мобильная адаптивность -->

                

                <!-- Количество татуировок -->
                <div class="calc-section">
                    <label class="checkbox-wrapper title-bold section-title"> Количество татуировок </label>
                    <div class="rooms-wrapper">
                    

                        <label class="rooms-label">
                            <input class="rooms-radio-real" type="radio" name="rooms" value="1" checked/>
                            <span class="rooms-radio-fake">1</span>
                        </label>

                        <label class="rooms-label">
                            <input class="rooms-radio-real" type="radio" name="rooms" value="2" />
                            <span class="rooms-radio-fake">2</span>
                        </label>

                        <label class="rooms-label">
                            <input class="rooms-radio-real" type="radio" name="rooms" value="3" />
                            <span class="rooms-radio-fake">3</span>
                        </label>

                        <label class="rooms-label">
                            <input class="rooms-radio-real" type="radio" name="rooms" value="4" />
                            <span class="rooms-radio-fake">4</span>
                        </label>

                        <label class="rooms-label">
                            <input class="rooms-radio-real" type="radio" name="rooms" value="5" />
                            <span class="rooms-radio-fake">5</span>
                        </label>
                    </div>
                </div>
                <!-- // Количество татуировок -->

                <!-- Дополнительные опции -->
                <div class="calc-section">
                    <label class="checkbox-wrapper title-bold section-title"> Дополнительные опции </label>
                    <label class="radio-wrapper">
                        <input type="checkbox" class="radio" name="ceiling" value="900" />
                        <div class="title-lite">
                            Удаление
                            <span class="note">С использованием лазерных технологий</span>
                        </div>
                    </label>
                    <label class="radio-wrapper">
                        <input type="checkbox" class="radio" name="walls" value="1.1" />
                        <div class="title-lite">
                            Пирсинг
                            <span class="note">При использовании двух услуг(татуирока + пирсинг) скидка на всё 10%</span>
                        </div>
                    </label>
                    <label class="radio-wrapper">
                        <input type="checkbox" class="radio" name="floor" value="1.1" />
                        <div class="title-lite">
                            Коррекция работы после заживления
                            <span class="note">+15% к стоимости</span>
                        </div>
                    </label>
                </div>
                <!-- // Дополнительные опции -->

                <!-- Стоимость татуировки -->
                <div class="calc-price">
                    <div class="calc-price-title">Стоимость татуировки:</div>
                    <div class="calc-price-value">
                        <span id="total-price">0</span>
                        рублей
                    </div>
                </div>
                <!-- // Стоимость татуировки -->
            </form>
        </div>
    </main>



    </section>



    <section       class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="assets/images/uslugi/6.jpg"       class="schedule-table-section spad">


    <section  class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-text">
                                <h2>Топ самых популярных услуг</h2>
                                <div class="bt-option">
                                    
                                    <span>Ознакомьтесь с предложениями поближе!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




	<div class="cd-pricing-container cd-has-margins">
		

		<ul class="cd-pricing-list cd-bounce-invert">
			<li>
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>Сведение татуировки</h2>

							<div class="cd-price">
								
								<span class="cd-value">От 1000</span>
                                <span class="cd-currency">₽</span>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li>Качество в любом стиле</li>
								<li>Безопасность</li>
								<li>Сервис и комфорт</li>
								<li>Скорость</li>
								
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="https://s-sd.ru">Select</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Basic</h2>

							<div class="cd-price">
								<span class="cd-currency">₽</span>
								<span class="cd-value">320</span>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>256MB</em> Memory</li>
								<li><em>1</em> User</li>
								<li><em>1</em> Website</li>
								<li><em>1</em> Domain</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="https://s-sd.ru">Select</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>

			<li class="cd-popular">
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>Татуировки</h2>
							<div class="cd-price">
								
								<span class="cd-value"> От 1500</span>
                                <span class="cd-currency">₽</span>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li>Качество в любом стиле</li>
								<li>Безопасность</li>
								<li>Сервис и комфорт</li>
								<li>Анестезия (гель)</li>
								<li>Квалификации мастера</li>
								<li>Скорость исполнения</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="https://s-sd.ru">Select</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Popular</h2>

							<div class="cd-price">
								<span class="cd-currency">$</span>
								<span class="cd-value">630</span>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>512MB</em> Memory</li>
								<li><em>3</em> Users</li>
								<li><em>5</em> Websites</li>
								<li><em>7</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="https://s-sd.ru">Select</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>

			<li>
				<ul class="cd-pricing-wrapper">
					<li data-type="monthly" class="is-visible">
						<header class="cd-pricing-header">
							<h2>Пирсинг</h2>

							<div class="cd-price">
								
								<span class="cd-value">От 799</span>
                                <span class="cd-currency">$</span>
								
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li>Качество в любом стиле</li>
								<li>Безопасность</li>
								<li>Сервис и комфорт</li>
								<li>Скорость</li>
								
							</ul>
						</div> <!-- .cd-pricing-body -->

						<footer class="cd-pricing-footer">
							<a class="cd-select" href="https://s-sd.ru">Select</a>
						</footer>  <!-- .cd-pricing-footer -->
					</li>

					<li data-type="yearly" class="is-hidden">
						<header class="cd-pricing-header">
							<h2>Premier</h2>

							<div class="cd-price">
								<span class="cd-currency">$</span>
								<span class="cd-value">950</span>
								<span class="cd-duration">yr</span>
							</div>
						</header> <!-- .cd-pricing-header -->

						<div class="cd-pricing-body">
							<ul class="cd-pricing-features">
								<li><em>1024MB</em> Memory</li>
								<li><em>5</em> Users</li>
								<li><em>10</em> Websites</li>
								<li><em>10</em> Domains</li>
								<li><em>Unlimited</em> Bandwidth</li>
								<li><em>24/7</em> Support</li>
							</ul>
						</div> <!-- .cd-pricing-body -->

						
					</li>
				</ul> <!-- .cd-pricing-wrapper -->
			</li>
		</ul> <!-- .cd-pricing-list -->
	</div> <!-- .cd-pricing-container -->	


















    

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>


























        <?php
   require_once 'components/footer.php';
   ?>
    
















   
   






  
</body>


<script src="assets/js/uslugi/app.js"></script>
<script src="assets/js/uslugi/impersive.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/components/app.js"></script>
<script src="assets/js/components/libs/parallax.min.js"></script>


</html>