<?php

echo "===== date to timestamp ====== \n";

date_default_timezone_set('Asia/Dhaka');
echo time()."\n";
echo mktime(11,11,0,3,7,2023);
    
$date_of_birth = mktime(0,0,0,7,2,1999);
$current_day =   mktime(0,0,0,3,7,2023);

$total_day_of_my_life = ($current_day - $date_of_birth)/(24*60*60);

echo "\n total day of my life $total_day_of_my_life \n";

?>