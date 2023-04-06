<?php 
$Name = trim($_POST['Name']);
$price = trim($_POST['price']);
$type = trim($_POST['type']);
$Adress = trim($_POST['Adress']);
$Description = trim($_POST['Description']);
$img = $_FILES['filename']['name'];



move_uploaded_file($_FILES['filename']['tmp_name'], trim('imges\ ').$_FILES['filename']['name']);

// $filename2 = $_FILES['img']['name'];
// setcookie("filename2", $filename2, time() + 3600);

$mysql = new mysqli('localhost','root','root','test_itgrade');
 $mysql ->query("INSERT INTO `houses`( `Name`, `Adress`, `Description`, `Price`, `Type`, `img`) VALUES ('$Name','$Adress','$Description','$price','$type','$img')");

 $mysql -> close();


    header('location: /creature.php');

 ?>