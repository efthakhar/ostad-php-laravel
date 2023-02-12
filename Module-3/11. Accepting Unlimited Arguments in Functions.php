<?php


function unlimited_parameters($a,$b,...$c) : int
{
    echo "1st argument is $a \n";
    echo "2nd argument is $b \n";
    
    $others_sum = 0;
    for( $i=0; $i<count($c); $i++ )
    {
        $others_sum+=$c[$i];
    }
    echo "sum of all other argument is $others_sum \n";
    return $others_sum;
}

    
//unlimited_parameters(2,3,4,6);


?>