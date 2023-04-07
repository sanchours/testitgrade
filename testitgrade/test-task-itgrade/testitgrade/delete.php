<?php

$id = $_POST['id'];

if ($id === NULL) {
	$id = $_GET['id'];
}

$mysql = new mysqli('localhost','root','root','test_itgrade');
 $mysql ->query("DELETE FROM `houses` WHERE `houses`.`House_id` = '$id'");

 $mysql -> close();



 header('location: /house.php');
 ?>