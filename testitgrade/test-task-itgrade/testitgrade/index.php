<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,inirial-scale=1.0">
	<meta http-equiv="X-UA-Cpmparible" content="ie=edge">
	<title>Тестовое задание</title>
	<link rel="stylesheet" type="text/css" href="stel.css">
	<link rel="shortcut icon" href="images/2935794.png" type="image/x-icon">
</head>
<body>
	<div id="papup_1" class="papup">
		<div id="papup_body">
			<div id="papup_content">
				<a href="#" id="popup_close">X</a>
				<div id="popup_title">Войти</div>
				<form id="form" action="auth.php" method="post">
			<input type="text" class="form-control" name="login"
			id="login" placeholder="Ведите логин"><br>
			<small><?=$_COOKIE['error3'] ?></small><br>
			<input type="password" class="form-control" name="pass"
			id="pass" placeholder="Ведите пароль"><br>
			<small><?=$_COOKIE['error4'] ?></small><br>
			<button class="btn btn-success" name="signup" type="submit">Войти</button>
			<div id="links">У вас нет аккаунта? <a href="#papup_2" class="popap-link">Зарегистрироваться</a></div>
		</form>
			</div>
		</div>
	</div>
	<div id="papup_2" class="papup">
		<div id="papup_body">
			<div id="papup_content">
				<a href="#" id="popup_close">X</a>
				<div id="popup_title">Регистрация</div>
				<form id="form" action="check.php" method="post">
					<input type="text" class="form-control" name="login"
						   id="login" placeholder="Ведите логин"><br>
					<small><?=$_COOKIE['error1'] ?></small><br>
					<input type="password" class="form-control" name="pass"
						   id="pass" placeholder="Ведите пароль"><br>
					<small><?=$_COOKIE['error2'] ?></small><br>
					<button class="btn btn-success" type="submit">Зарегистрироватся</button>
				</form>
			</div>
		</div>
	</div>
	<header id="header">
		 <div id="logo" onclick="slowScroll('#top')">
		 	<img  class="mg" src="logo.png">
		 </div>
		 <div id="about">
		 </div>
		 <div id="vhod">
		 	<?php if($_COOKIE['user'] == ''): ?>
				<a href="house.php" class="popap-link">Недвижимость</a>
		 	<a href="#papup_1" class="popap-link">Вход</a>

		 	<?php elseif ($_COOKIE['user'] == 'admin') :?>
		 	<a class="profile_1" href="">Привет, <?=$_COOKIE['user'] ?>!</a>
				<a href="house.php" class="popap-link">Недвижимость</a>
		 	<a href="creature.php">Добовление недвижимости</a>
		 	<a href="/exit.php">Выйти</a>
		 	<?php else :($_COOKIE['user']) ?>
		 	<a class="profile_1" href="">Привет, <?=$_COOKIE['user'] ?>!</a>
				<a href="house.php" class="popap-link">Недвижимость</a>
		 	<a href="/exit.php">Выйти</a>
		 <?php endif; ?>
		 </div>
	</header>
 <div id="overiew">
 	<h2>Недвижимость</h2>
 	<h4>по всей стране</h4>
  <a class="overiew1" href="house.php"><div class="img">
  	<img src="https://celes.club/uploads/posts/2022-05/1652922236_1-celes-club-p-nedvizhimost-fon-krasivie-1.jpg" alt="">
  	<span>Недвижимость</span>
  </div></a>
</div>
<div id="PD">
	<div class="V1">
		<span class="heading">©ООО «агентство недвижимости», 2023</span>
		<p><a href="index.php">Главная</a> | <a href="#papup_3">Недвижимость</a>
	</div>
	<div class="F1">
		<p>тел. +7 (903) 698-45-95</p>
		<p>Email: sdulinec@mail.ru</p>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		function slowScroll(id){
			$('html, body').animate({
				scrollTop:$(id).offset().top
			},500);
		}
		$(document).on("scroll", function () {
      if($(window).scrollTop() === 0){
      	$("header").removeClass("fixed");
      	$(".mg").attr("src","logo.png");
      } 
      else{
      	$("header").attr("class", "fixed");
    $(".mg").attr("src","logo.png");
      }
       });
	</script>
	<script src="https://unpkg.com/imask"></script>
</body>
</html>