<?php

 $cookie_name = 'USER_TOKEN';

 if(isset($_COOKIE[$cookie_name])) { // checks if cookies exists

   $cookie_value = $_COOKIE[$cookie_name];

   if(strcmp('001A1', $cookie_value) == 0) { // validates cookies
     //setcookie($cookie_name, '', time() - 3600); // removes old cookies
     //echo('cookie value is'.$cookie_value);
     header('Location:digitalid://test/'.$cookie_value); //redirects data to your app
     //header('Location:digitalid://test/001a1');
   }

 }

?>
