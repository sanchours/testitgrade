<?php
$mysql = new mysqli('localhost','root','root','test_itgrade');
 
$sql3 = mysqli_query($mysql, 'SELECT * FROM `houses` ORDER BY `houses`.`Price` ASC');

$result3 = mysqli_fetch_array($sql3);

?>
<div id="intros"><?php while ($result3 = mysqli_fetch_array($sql3)):?><div class="block" data-quantity="1"><div class="inside"><div class="img-profle"><img class="img-house" src="images/<?= $result3['img']?>"></div><div class="description"><a class="catalog_detail_page_url" href="updete.php?id=<?= $result['products_id']?>"></a><div class="name"><?php echo"{$result3['Name']}"; ?></div><div class="text1"><?php echo ($result3['Adress']) ?></div><div class="text1"><?php echo ($result3['Description']) ?></div></div><div class="price"><div class="text"><?php echo ($result3['Price']) ?>₽</div></div><div class="add"><a data-id="<?php echo"{$result3['House_id']}"; ?>" href="orders.php?id=<?= $result3['House_id']?>" class="btn item_add_to_cart2">Посмотреть</a></div><div class="add"><a data-id="<?php echo"{$result3['House_id']}"; ?>" class="btn item_add_to_cart1">удалить</a></div></div></div><?php endwhile; ?></div>