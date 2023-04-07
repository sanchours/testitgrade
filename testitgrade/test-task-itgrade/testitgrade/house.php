<?php

$id = $_COOKIE['user_id'];

$mysql = new mysqli('localhost','root','root','test_itgrade');
 
$sql1 = mysqli_query($mysql, "SELECT * FROM `urses` WHERE `id` = '$id'");

$result = mysqli_fetch_assoc($sql1);

$sql3 = mysqli_query($mysql, "SELECT * FROM `houses`");


 $mysql -> close();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,inirial-scale=1.0">
	<meta http-equiv="X-UA-Cpmparible" content="ie=edge">
	<title>Тестовое задание</title>
	<link rel="stylesheet" type="text/css" href="stel3.css">
	<link rel="shortcut icon" href="images/2935794.png" type="image/x-icon">
</head>
<body >
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
	<div id="logo"  onclick="slowScroll('#top')">
	<a href="index.php"><img  class="mg" src="logo.png"></a>
	</div>
	<div id="about">
	</div>
	<div id="vhod">
		<?php if($_COOKIE['user'] == ''): ?>
			<a href="#papup_1" class="link">Недвижимость</a>
			<a href="#papup_1" class="link">Вход</a>
		<?php elseif ($_COOKIE['user'] == 'admin') :?>
			<a class="profile_1" href="">Привет, <?=$_COOKIE['user'] ?>!</a>
			<a href="#papup_1" class="link">Недвижимость</a>
			<a href="house.php">Очёты</a>
			<a href="/exit.php">Выйти</a>
		<?php else :($_COOKIE['user']) ?>
			<a class="profile_1" href="profile.php?id=<?=$_COOKIE['user_id'] ?>">Привет, <?=$_COOKIE['user'] ?>!</a>
			<a href="#papup_1" class="link">Недвижимость</a>
			<a href="/exit.php">Выйти</a>
		<?php endif; ?>
	</div>
</header>
	<div id="top">
		<h4>Недвижимость</h4>
		<h3></h3>
	</div>
	<div id="main">
		<div class="search1" onload="onload();">
			<input type="text" name="sertch" class="enter" value="Объект 10" id="src"/>
			<input type="button" value="Поиск" id="kk" />
		</div>
		<div class="search">
			<a data-id="1" class="btn descending">по возрастанию</a>
		</div>
		<div class="search">
			<a data-id="1" class="btn ascending">по убыванию</a>
		</div>
		<div class="intros">
			<?php while ($result3 = mysqli_fetch_array($sql3)):?>
				<div class="block" data-quantity="1">
				    <div class="inside">
						<div class="img-profle">
							<img class="img-house" src="images/<?= $result3['img']?>">
						</div>
                    <div class="description">
						<a class="catalog_detail_page_url" href="updete.php?id=<?= $result['products_id']?>"></a>
						<div class="name"><?php echo"{$result3['Name']}"; ?></div>
						<div class="text1"><?php echo ($result3['Adress']) ?></div>
						<div class="text1"><?php echo ($result3['Description']) ?></div>
                    </div>
                    <div class="price">

						<div class="text"><?php echo ($result3['Price']) ?>₽</div>
                    </div>
                <div class="add">
                	<a data-id="<?php echo"{$result3['House_id']}"; ?>" href="orders.php?id=<?= $result3['House_id']?>" class="btn item_add_to_cart2">Посмотреть</a>
                </div>
                <div class="add">
                    <a data-id="<?php echo"{$result3['House_id']}"; ?>" class="btn item_add_to_cart1">удалить</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
		</div>
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
	<script >

	$(document).ready(function(){
		const link_id = $('a.btn.item_add_to_cart1');

		$.each(link_id, function(){
			$(this).bind('click', function(){
				var $t = $(this);
				$.ajax({
                  method: "POST",
                  url: "delete.php",
                  data: { id: $(this).attr('data-id') },
                  success: [function ( msg ) {

        	$t.closest('.inside').html('<div class="delete">Недвижимость удалена!</div>');
          }]
                });
			});
		});
	});


	</script>
<script >
	$(document).ready(function(){
			$('a.btn.descending').bind('click', function(){
				var $t = $(this);
				$.ajax({
					method: "POST",
					url: "descending.php",
					data: { id: $(this).attr('data-id') },
					success: [function ( msg ) {

						$('.intros').html( msg);
					}]
				});
			});
	});
</script>
<script >
	$(document).ready(function(){
		$('a.btn.ascending').bind('click', function(){
			var $t = $(this);
			$.ajax({
				method: "POST",
				url: "ascending.php",
				data: { id: $(this).attr('data-id') },
				success: [function ( msg ) {

					$('.intros').html( msg);
				}]
			});
		});
	});
</script>

<script >
	$(document).ready(function() {
		var sertch = $('#src');
		var kk = $('#kk');

		kk.click(function() {
			$.ajax({
				method: "POST",
				url: "sertch.php",
				data: { sertch: sertch.val() },
				success: [function ( msg ) {

					$('.intros').html( msg);
				}]
			});

		});
	});
</script>
</body>
</html>