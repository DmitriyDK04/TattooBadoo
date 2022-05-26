
<body>
<header class="">
    <div class="container">
        <div class="header">
            <nav class="navbar">
            
              
                


                <header class="header" id="header">
       
       <div class="container">
           <div class="header__inner">
               <div class="header__logo" ><a class="nav__link" href="index.php">TatooBadoo</a></div>
   
               <nav class="nav" id="nav">
               
                   <a class="nav__link" href="o_nas.php" >О студии</a>
                   <a class="nav__link" href="masters.php" >Мастера</a>
                   <a class="nav__link" href="uslugi.php" >Услуги</a>
                   <a class="nav__link" href="gallery.php" >Галерея</a>
                   <a class="nav__link" href="otziv.php" >Отзывы</a>
                   <a class="nav__link" href="contact.php" >Контакты</a>
                   <?php
                if ($_SESSION['users']){?>
                <a class="nav__link" href="account.php">Личный кабинет</a>
            
                <a class="nav__link" href="vendor/exit.php">Выйти</a>
                <?php } else { ?>
                <a class="nav__link" href="login.php">Авторизация</a>
                    <a class="nav__link" href="registration.php">Регистрация</a>
                <?php } ?>
                
                  
                   
               </nav>
               <button class="nav-toggle" id="nav_toggle" type="button">
                <span class="nav-toggle__item">Menu</span>
            </button>
              
           </div>
       </div>
   </header>














                


            </nav>
        </div>
    </div>
</header>
</body>
