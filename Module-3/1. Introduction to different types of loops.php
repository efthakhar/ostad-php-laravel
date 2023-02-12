<?php


// for loop

for ($i = 1; $i < 19; $i++) {
    print_star($i);
    echo $i;
    echo PHP_EOL;
}

function print_star($star_number)
{
    for ($i = 1; $i <= $star_number; $i++) {
        echo "*";
    }
}

// while loop
$number = 0;
while ($number < 10) {
    $number+=2;
    echo "$number";
    echo PHP_EOL;
}

// do while loop

$number = 10;

do{
    echo $number;
    echo PHP_EOL;
    $number+=5;
}while($number<30);