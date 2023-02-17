<?php

$var = "Chittagong";
$st = "here we are everyone in $var";

echo $st;
echo "\n";
// Double quated string can parse variables and string leterals
// SIngle quated string can not parse variables and sring leterals

// Another way of writing string is Heredoc and Nulldoc

$ancestors = "Great Souls";

$names = <<<EOD
We  can beat any empire. 
We 
  the Successors of $ancestors
Never obery to Evils  
EOD;

echo $names;


$newdoc = <<<'EOD'

Bengal people are
             successors of $ancestors

EOD;

echo $newdoc;


/*
হেয়ারডক আর নিউডক এর কমন বৈশিষ্ট্য -> মাল্টিপল লাইন যাস্ট লাইন ব্রেক দিয়ে করা যায়

এর বাইরে 
       হেয়ারডক = ডাবল কোটেড স্ট্রিং 
       নিউডোক  = সিংগেল কোটেড স্ট্রিং 
       


*/