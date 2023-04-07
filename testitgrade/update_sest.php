<?php
$id = trim($_POST['products_id']); 
$Name = trim($_POST['Name']);
$price = trim($_POST['price']);
$Description = trim($_POST['Description']);
$Description_open = trim($_POST['Description_open']);
$img = $_FILES['filename']['name'];


$mysql = new mysqli('localhost','root','root','bullet');
 $mysql ->query("UPDATE `products` SET `price` = '$price', `Name` = '$Name', `Description` = '$Description',`Description_open`='$Description_open', `img` = '$img' WHERE `products`.`products_id` = '$id'");

 $mysql -> close();

 header("location: /updete.php?id=$id");
 ?>ff