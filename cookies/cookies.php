<?php
 // cookies.php
 if (isset($_COOKIE['cookie_teste'])) {
 echo 'Você JÁ passou por aqui!';
 } else {
 echo 'Você NUNCA passou por aqui.';
 setcookie('cookie_teste', 'Algum valor...', time() + 3600);
 }
?>