<?php

date_default_timezone_set('Asia/Dhaka');

/*
   time stamp to date convertion
*/

// unix time থেকে নির্দিষ্ট ফরমেটে Date বের করা
echo "\n======= date() ========\n";
// date()

echo date('d/m/Y')."\n"; // সেকেণ্ড আরগুমেন্ট নাল হলে কারেন্ট timestum এর সাপেক্ষে ডেট বের করে
echo date('d/m/Y',time()+(86400*2))."\n"; // two day later


echo date('d-m-Y')."\n";    
echo date('dS M,Y')."\n"; 
echo date('dS F,Y')."\n";  
echo date('dS F,Y H:i:s A')."\n";  
echo date('dS F,Y h:i:s A')."\n";

// Finding the day number of current day of this year
echo date('z')."\n";
// Finding the number of day of current month
echo date('t')."\n"; 

?>