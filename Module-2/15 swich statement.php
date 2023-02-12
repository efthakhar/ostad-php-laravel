<?php


$color = 'blue';

switch ($color) {
    case 'red':
        echo "color is red";
        break;
    case 'green':
        echo 'color is green';
        break;
    case 'gr':
    case 'blue':
        echo 'not my favourite';
        break;
    default:
        echo 'no color matched';
}
