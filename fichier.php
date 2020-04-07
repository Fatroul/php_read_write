<?php 

$file=fopen("count.txt","c+");
$line=fgets($file);
var_dump($line);

$count=($line)?$line+1:1;
fseek($file,0);
fwrite($file,$count);