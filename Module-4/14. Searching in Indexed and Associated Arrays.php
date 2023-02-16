<?php


// in_array() true রিটার্ন করে যদি প্রদত্ত ভ্যালু এরে তে পাওয়া যায়।
// এই ফাংশন শুধু এটা এনসিউর করে যে কোন এলিমেন্ট এরেতে আছে কিনা

$nums = [1,3,4,5,4,2];

echo in_array(13,$nums,true)?  "given value found": "given value not found";
echo "\n";

// array_search() প্রদত্ত ভ্যালু আছে কিনা চেক করে এবং যদি পাওয়া যায় তবে তার পজিশন রিটার্ণ করে
echo "positon of given value is " . array_search(2,$nums);    

echo "\n";
echo key_exists(2,$nums) ? 'exists':'not exist';


?>