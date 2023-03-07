<?php

// session_name('ostad');

session_start([
    'cookie_lifetime' => 15
]);


// $_SESSION['name'] = $_GET['name'] ;

// $_SESSION['name'] = 'Ostad Pro' ;



//session_destroy();

$_SESSION['counter'] = $_SESSION['counter']??0;

$_SESSION['counter']++;

echo $_SESSION['counter'];
echo "<br> Session data are stored in ".session_save_path();

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';  


?>