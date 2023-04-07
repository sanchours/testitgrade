<?php
setcookie('error1',$error1, time() - 3600);
setcookie('error2',$error2, time() - 3600); 
setcookie('user', $user['login'], time() - 3600,"/");
setcookie('user_id', $user['id'], time() - 3600);

header('location: /');
 ?>