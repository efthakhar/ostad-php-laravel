<?php


$n = [1,2,3,4,5];

function square($n){
    return $n*$n;
}

$sn = array_map('square',$n); 
// অ্যারের প্রতিটা উপাদানের উপর কাজ করে
// প্রতিটা উপাদানের বিপরীতে নতুন কিছু রিটার্ন করে   
// নতুন অ্যারে তৈরি করে
print_r($sn);
print_r($n);

function even($n){
    return $n%2==0;
}

$even_nums = array_filter($n,'even');
// অ্যারের প্রতিটা উপাদানের উপর কাজ করে
// প্রতিটা উপাদানের  বিপরীতে কন্ডীশন চেক করে। কন্ডিশন ট্রু হলেই  নতুন কিছু রিটার্ন করে   
// নতুন অ্যারে তৈরি করে
print_r($even_nums);


?>