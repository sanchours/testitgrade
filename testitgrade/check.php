<?php 

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);

$mysql = new mysqli('localhost','root','root','test_itgrade');

$result = $mysql ->query("SELECT * FROM `urses` WHERE `login` = '$login' ");
$user = $result ->fetch_assoc();


if (empty($login)) {
	 $error1 = 'Вы вели пустой логин';	
	setcookie('error1',$error1, time() + 3600);         
	 header('location: /#papup_2');
	 exit();
} 
elseif ( mb_strlen($login) < 3 || mb_strlen($login) > 20  ) {
	$error1 = 'Вы вели неверный логин он должен быть от 5 до 20 символов';	
	setcookie('error1',$error1, time() + 3600);         
	 header('location: /#papup_2');
	 exit();
}

elseif ($user != 0) {
	$error1 = 'Тайкой пользователь уже существует';	
	setcookie('error1',$error1, time() + 3600);         
	 header('location: /#papup_2');
	 exit();
}
else if (empty($pass)) {

	$error2 = "Вы вели пустой пароль";
	header('location: /#papup_2');
	setcookie('error2',$error2, time() + 3600);
	exit();
}  else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {


	$error2 = "Недопустимая длина паролья (от 2 до 6 символов)";
	header('location: /#papup_2');
	setcookie('error2',$error2, time() + 3600);
	exit();
} 
// else if (preg_match("#^[aA-zZ0-9\-_]+$#",$pass)) {

// 	$error1 = "запрещеные символы";
// 	header('location: /');
// 	setcookie('error2',$error2, time() + 3600);
// 	exit();
// };
setcookie('error1',$error1, time() - 3600);
setcookie('error2',$error2, time() - 3600);


 $mysql = new mysqli('localhost','root','root','test_itgrade');
 $mysql ->query("INSERT INTO `urses`(`login`,`password`) VALUES('$login','$pass')");

 $mysql -> close();

 header('location: /');
 ?>