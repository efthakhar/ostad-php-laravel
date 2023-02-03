<?php

//variable swapping in printf function
printf( 'second placeholder is %2$s and first placeholder is %1$s ' , 'বাংলা','দেশ'); // must use single quote in variable swapping

echo "\n";

// reusing one variable in multiple placeholder
printf('I am a %1$s and my friend asif  also  a %1$s', 'student');
echo "\n";

// defining how many number will be printed after decimal point in float number
printf('2 digits after decimal point of number %1$f is %1$.2f ',23.4562 );
printf('3 digits after decimal point of number %1$f is %1$.3f ',23.4562 );
echo "\n";

// প্রদত্ত নাম্বার এর আগে প্রয়োজনীয় সংখ্যাক ০ বসিয়ে ইচ্ছেমত ডিজিটের নাম্বারে রূপান্তর করা
printf( '5 digit format %05d ' , 23 );
echo "\n";
printf( '3 digit format %03d ' , 23 );
echo "\n";

//দশমিকের আগে পড়ে ফরম্যাট করা
printf('%08.3f',34.25); // দশমিক সহ টোটাল ৮ ঘর , দশমিকের পড়ে ৩ ঘর দশমিকের আগে (৮-(৩+১)) = ৪ ঘর

?>