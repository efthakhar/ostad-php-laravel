<?php

$fileName = __DIR__.'/files/file2.txt';

$fp = fopen($fileName,'a'); // opneing file with write mode

// w mode => file opended as black file, previous data erased 
// a mode => file writing start at the end of the previous content // apend mode

fwrite($fp,"hello dihab\nI am okay now");

// rewind($fp);

echo is_writable($fileName)."\n"; // check if the file writeable
echo is_readable($fileName)."\n"; // check if the file readable

//fwrite($fp,'heroooooo   ');


?>