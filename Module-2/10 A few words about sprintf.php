<?php

// sprintf স্ট্রিং কে ফরমেট করে সেটা প্রিন্ট না করে রিটার্ন করে,
// রিটার্ন করা ডাটাকে আমরা কোন ভ্যারিয়েবলে জমা করে রাখতে পারি 
// পরবর্তীতে সেই ডাটা ইচ্ছেমত সুবিধা অনুযায়ী ব্যবহার করতে পারি যা printf এ সম্ভব না
$my_statement = sprintf('hi i am %s', 'dihab');
echo $my_statement;
echo "\n";
echo strtoupper($my_statement);
