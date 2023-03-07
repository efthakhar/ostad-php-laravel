<?php

$filePath =  __DIR__."/files/file1.txt" ;

$fp = fopen($filePath,'r'); // open a  file and store the pointer in a variable

$line1 = fgets($fp);  // fgets($fp) this function read file untill get new line
$line2 = fgets($fp); 

echo $line1;
echo $line2;



echo "\n==========================\n";
rewind($fp); // taking file pointer to the start of the file
while($line = fgets($fp))
{
    echo $line;
}


echo "\n==========================\n";
$contents = '';
rewind($fp);
while($line = fgets($fp,3))
{
    $contents.=$line;
}
echo $contents;


echo "\n=================================\n";
fseek($fp,10);
echo fgets($fp);

rewind($fp);

// getting all file lines in array
$file_array = file($filePath);
print_r($file_array);


// getting full file data
$file = file_get_contents($filePath);
echo $file;   



fclose($fp);
?>