<?php 

$file=fopen("maj.txt","r");
$maj=fgets($file);
fclose($file);
echo "<p>Mis à jour le $maj</p>";

/*$count=fopen("count.txt","r+");
//fwrite($count,"1");

fwrite($count,"1");

$str="";
while($str!==false) {
    fseek($count, 0);
    fwrite($count,"$str=+1");
    $str=fgets($count);
    var_dump($str);
}

fclose($count);
*/