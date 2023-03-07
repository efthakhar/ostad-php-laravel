<?php


// if we want to save something on user browser we can use cookie

//setcookie('hero','great baybars',time()+10);
setcookie('hero','great baybars');

echo $_COOKIE['hero']?? 'not found';
    


?>