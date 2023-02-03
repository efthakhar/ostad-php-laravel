<?php

/*
most common 4 number systems:
- binary (combination of only 0 and 1, base is 2)
- decimal ( the number system which we use everyday life, base is 10)
- octal ( 8 base number system, start with 0 )
- hexadecimal ( 16 base number system, start with 0x )

*/    

$a = 1234; // decimal number
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
printf("deciaml %d = decimal %d\n" ,$a,$a); // %d print in decimal format

$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
printf("Decimal %d = octal %o  \n" ,$a,$a); // %o print in octal format

$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
printf("Decimal %d = hexadecimal %x  \n" ,$a,$a);; // %x print in hexadecimal format

$a = 0b11111111; // binary number (equivalent to 255 decimal)
printf("Decimal %d = binary %b  \n" ,$a,$a); // %b print in binary format




?>