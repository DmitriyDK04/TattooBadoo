<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/log_reg/main.css">
    
	
    <title>Document</title>
</head>
<body>



<?php 
    $chars="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";

// Количество символов в пароле

$max=10;

//Определяем кол-во символов в $chars

$size=StrLen($chars)-1;

// Определяем пустую переменную куда будет записываться пароль

$passgen=$checkuser;

// Создаем пароль

while($max--)
$passgen.=$chars[rand(0,$size)];




?>










    <body class="registration">

    <div id="world"></div>




<form class="decor" action="vendor/loginAction.php" method="POST">
<div class="form-left-decoration"></div>
<div class="form-right-decoration"></div>
<div class="circle"></div>
<div class="form-inner">
<h3>Регистрация</h3>
<input type="text" name = "login" required placeholder="Введите логин">
<input type="email" name = "email" required placeholder="Введите e-mail">
<div class="password">
<input type="password" name="password" id="password-input"  value= " <?php echo $passgen?>"   required placeholder="Введите пароль"  >
<a href="#" class="password-control"></a>
</div>
<input type="password" name = "confirmpassword" required placeholder="Подтвердите пароль">
<input type="date" name ="birthday" required>
<a href=registration.php>Сгенерировать пароль</a>
<input type="submit" name="submit_reg" value="Зарегистрироваться">
<input type="submit" name="nazad" value="На главную" onclick="location.href=' http:index.php ' ">
<a href="login.php">Уже зарегистрированы?</a>

 
<br>


</form>
<span style="color:red;  text-align: center;"><?php
if($_SESSION['message']){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?></span>





</div>
<body>
















    







<!-- Скрыть/показать пароль -->

<style type="text/css">
.password {
	width: 100%;
	
	position: relative;
}
#password-input {
	width: 100%;
	
	
}
.password-control {
	position: absolute;
	top: 10px;
	right: -20px;
	display: inline-block;
	width: 20px;
	height: 20px;
	background: url(https://snipp.ru/demo/495/view.svg) 0 0 no-repeat;
}
.password-control.view {
	background: url(https://snipp.ru/demo/495/no-view.svg) 0 0 no-repeat;
}
</style>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script>
$('body').on('click', '.password-control', function(){
	if ($('#password-input').attr('type') == 'password'){
		$(this).addClass('view');
		$('#password-input').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#password-input').attr('type', 'password');
	}
	return false;
});
</script>
<!--  -->









    <span style="color:red;  text-align: center;"><?php
    if($_SESSION['message']){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    
    ?></span>
    </div>


	<script>src="assets/js/reg/app.js"</script>
</body>


</html>