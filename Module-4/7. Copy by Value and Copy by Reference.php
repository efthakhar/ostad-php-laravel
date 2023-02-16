<?php


$data = ['hero'=>'barbarosa','empire'=>"usmani khilaphat"];

$new_data = $data; 

// উপরের নিয়মে একটা ভ্যারিয়েবল = আরেকটা ভ্যারিয়েবল এসাইন হলে 
// ডানের ভ্যারিয়বলের সব ডাটা কপি হয়ে বামের ভ্যারিয়েবলে জমা হবে,
// অর্থাৎ $data ভ্যারিয়েবল এর মান এর একটা কপি $new_data ভ্যারিয়বলে এসাইন হবে
// এইভাবে এসাইন করার সুবিধা হলো $new_data ভ্যারিয়েবলে কোন চেঞ্জ আসলেও $data ভ্যারিবল এ কোন চেঞ্জ আসবে না

// আমরা প্রথমে $new_data ভ্যারিয়বলে চেঞ্জ করিঃ
$new_data['hero'] = 'Ali pasha';

// এখন $new_data ভ্যারিয়েবল প্রিন্ট করে দেখা যাবে তা চেঞ্জ হয়ে গেছে কিন্তু $data ভ্যারিয়বলে কোন চেঞ্জ আসেনি

print_r($data);
echo "\n";
print_r($new_data);
echo "\n";

// এটাই কপি বাই ভ্যালু হিসেবে পরিচিত। 
// মানে এক ভ্যারিয়বলের মানের কপি অন্য আরেক ভ্যারিয়বলে জমা করা

echo "================================ \n";

// আমরা আরেকটা কাজ করতে পারি । ধরুন আমরা $b নামক ভ্যারিবলে  $a ভ্যারিয়েবলের মান জমা রাখতে চায়
// তবে এটাও চাই যে $b এর মান চেঞ্জ হলে সে যেই ভ্যারিয়েবলের মান এর কপি ধারণ করে সেই 
// ভ্যারিয়েবলেও চেঞ্জ হোক। মানে  $a ও চেঞ্জ হোক। 
// সেক্ষেত্রে আমাদের কে $a ভ্যারিয়েবলের মান কপি জমা না করে তার এড্রেস টাই $b ভ্যারিয়েবলে জমা রাখতে হবে।
// তাহলে $b ভ্যারিয়বলে কোন চেঞ্জ হওয়া মানে আসলে $a ভ্যারিয়বলেও চেঞ্জ হওয়া

$a = ['founder'=>'Usman Gazi','empire'=>'Usmani Khilaphat'];

$b = &$a;

print_r($a);
print_r($b);

$b['founder'] = 'Tughril Beg';
$b['empire']  = 'Seljuk';

print_r($a);
print_r($b);

// এইভাবে ভ্যারিয়বলের এড্রেস জমা করাকে বলে কপি বাই রেফারেন্স

