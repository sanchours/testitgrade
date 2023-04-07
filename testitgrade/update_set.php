<?php
$id = trim($_POST['House_id']);
$Name = trim($_POST['Name']);
$price = trim($_POST['price']);
$type = trim($_POST['type']);
$Adress = trim($_POST['Adress']);
$Description = trim($_POST['Description']);
$img = $_FILES['filename']['name'];


$mysql = new mysqli('localhost','root','root','test_itgrade');
$mysql ->query("UPDATE `houses` SET `Name` = '$Name', `Adress` = '$Adress', `Description` = '$Description', `Price` = '$price', `Type` = '$type', `img` = '$img' WHERE `houses`.`House_id` = $id;");

$mysql -> close();


header("location: /house page.php?id=$id");
?>