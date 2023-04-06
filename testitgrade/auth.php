<?php 

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);


$mysql = new mysqli('localhost','root','root','test_itgrade');

$result = $mysql ->query("SELECT * FROM `urses` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result ->fetch_assoc();
if($login === ""){

	$error3 = "Пустое поле";
	header('location: /#papup_1');
	setcookie('error3',$error3, time() + 6200);
	$error4 = "Пустое поле пароля";
	setcookie('error4',$error4, time() + 6200);
	exit();
	
}elseif(count($user) == 0){

	$error3 = "Такой пользователь не найден";
	header('location: /#papup_1');
	setcookie('error3',$error3, time() + 6200);
	$error4 = "Вы вели неверный пароль";
	setcookie('error4',$error4, time() + 6200);
	exit();
	
}

setcookie('error3',$error3, time() - 3600);
setcookie('error4',$error4, time() - 3600);
setcookie('user', $user['login'], time() + 3600,"/");
setcookie('user_id', $user['id'], time() + 3600);

 $mysql -> close();

 header('location: /');


 ?>