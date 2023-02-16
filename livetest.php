<?php

$tution_fee = 9000;

$percentage = 
$tution_fee > 20000  ? 25 : 
( $tution_fee > 10000 && $tuition_fee < 20000 ? 20 : 
( $tution_fee > 7000 && $tuition_fee  < 10000 ? 15: 0));

echo $percentage == 0 ? 'invalid data': 'commission is $'. $tution_fee*($percentage/100);



?>





 
