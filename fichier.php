<?php 

/*$file=fopen("count.txt","c+");
$line=fgets($file);
var_dump($line);

$count=($line)?$line+1:1;
var_dump($count);
fseek($file,0);
fwrite($file,$count);
fclose($file);*/

$persos=[["Gilles",15,100],["Raymond",13,100],["Jacques",20,100]];

$file=fopen("persos.csv","c+");

foreach ($persos as $perso) {
fputcsv($file,$perso);
}
fclose($file);
