<?php 
$field=[
    $_POST["name"],
    $_POST["force"],
    $_POST["lvl"],
    $_POST["hp"],
    $_POST["deadoralive"]
];
//var_dump($field);
$file=fopen("persos.csv","c+");
//$formcanal="";
foreach ($field as $formcanal){
    fputcsv($file,$field);
}

fclose($file);


