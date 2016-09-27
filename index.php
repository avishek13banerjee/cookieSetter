<?php 
setcookie('USER_TOKEN', '001A1', time() + 3600 * 24); // setting cookies with expiration date for 24h
echo('Cookie Set to: 001A1');
?>
