<?php 

$file=fopen("myfile.txt","r");

fwrite($file,"bienvenue en picardie le 07/04/2020".PHP_EOL);


$str="";
while($str!==false) {
    $str=fgets($file);
    var_dump($str);
}



fclose($file);