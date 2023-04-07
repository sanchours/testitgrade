<?php
$mysql = new mysqli('localhost','root','root','test_itgrade');


$id = $_GET['id'];

$House = mysqli_query($mysql, "SELECT * FROM `houses` WHERE `House_id` = '$id' ");
$House = mysqli_fetch_assoc($House);
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
	<div id="logo" onclick="slowScroll('#top')">
		<a href="index.php"><img  class="mg" src="logo.png"></a>
	</div>
	<div id="about">
	</div>
	<div id="vhod">
		<?php if($_COOKIE['user'] == ''): ?>
			<a href="house.php" class="link">Недвижимость</a>
			<a href="#papup_1" class="link">Вход</a>
		<?php elseif ($_COOKIE['user'] == 'admin') :?>
			<a class="profile_1" href="">Привет, <?=$_COOKIE['user'] ?>!</a>
			<a href="house.php" class="link">Недвижимость</a>
			<a href="create.php">Добовление недвижимости</a>
			<a href="/exit.php">Выйти</a>
		<?php else :($_COOKIE['user']) ?>
			<a class="profile_1" href="">Привет, <?=$_COOKIE['user'] ?>!</a>
			<a href="house.php" class="link">Недвижимость</a>
			<a href="/exit.php">Выйти</a>
		<?php endif; ?>
	</div>
</header>
	<div id="top">
		<h4>Недвижимость</h4>
		<h3></h3>
	</div>
	<div id="main">
		<form class="form-horiz"  action="update_set.php" method="post" enctype="multipart/form-data">
			<div class="item-content">
				<div class="item-left">
					<div class="form-group">
						<img class="img1" src="images/<?= $House['img']?>">
						<div id="input" class="input__wrapper">
							<input name="filename" type="file" id="input__file" class="input input__file" multiple>
							<label for="input__file" class="input__file-button">
								<span class="input__file-icon-wrapper"><img class="input__file-icon" src="./images/add.svg" alt="Выбрать файл" width="25"></span>
								<span class="input__file-button-text">Выберите картинку</span>
							</label>
						</div>
					</div>
				</div>

				<div class="item-rignt">
					<h3>Название</h3>
					<input class="text-field__input1_name" type="text" placeholder="" name="Name" value="<?php echo"{$House['Name']}"; ?>">
					<br>
					<div class="Flex-brknwi-0 cMmmfI"><a class="sc-fFubgz fNiiPs product__review">
							<div class="sc-bqyKva kyLcan">
							</div>
							<div class="item-rignt-content">
								<div class="prices">
									<h3>Цена недвижимости</h3>
									<input class="text-field__input3" type="text" placeholder="" name="price" value="<?php echo"{$House['Price']}"; ?>"><label id="le5" >₽</label>
								</div>
								<div class="item-rignt-content-info">
									<h3>Описание</h3>
									<textarea class="text-field__input1_open" type="text"  placeholder="Ведите текст" name="Description"><?php echo"{$House['Description']}"; ?></textarea>
									<h3>Адрес</h3>
									<textarea class="text-field__input2" type="text"  placeholder="Ведите текст" name="Adress"><?php echo"{$House['Adress']}"; ?></textarea>
									<br><br>
									<h3>Статус</h3><br>
									<p><select name="type" class="text-field__input2">
											<option value="1">Актуальна</option>
											<option value="2">Не актуальна</option>
										</select></p>
									<div class="update">
										<button class="btn2" type="submit" class="btnn">Внести новые данные</button>
										<input type="hidden" placeholder="" name="House_id" value="<?php echo "{$House['House_id']}"; ?>">
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</form>
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
			alert(sertch.val());
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