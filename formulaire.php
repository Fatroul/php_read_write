<?php
$file=fopen("persos.csv","r");

//isset(fgetcsv($file))?var_dump(fgetcsv($file)):var_dump("il n'y a plus de persos");
$tab_line="";
$personnages=[];
while($tab_line !== false) {
    $tab_line=fgetcsv($file);
    if($tab_line !== false) {
        array_push($personnages,$tab_line);
    }
}
fclose($file);
//var_dump($personnages);
$html="<p>Voici mes personnages :</p><ul>";
foreach($personnages as $personnage) {
    $html.="<li>$personnage[0]</li>"; 
}
$html.="</ul>";
?>
<!DOCTYPE html>
<html lang=fr>
<head>
<meta charset="utf-8">
<title>Le formulaire</title>
</head>
<body>
<h1>Le formulaire</h1>
<section>
<form action="formulaire.php" method="post">
    <p>
        <label for="name">Le nom du personnage:</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="force">La force du personnage:</label>
        <input type="number" id="force" name="force" min="1" max="333">
    </p>
    <p>
        <label for="lvl">Le niveau du personnage:</label>
        <input type="number" id="lvl" name="lvl" min="1" max="33">
    </p>
    <p>
        <label for="hp">La vie de votre personnage:</label>
        <input type="number" id="hp" name="hp" min="1" max="100">
    </p>
    <p> 
        <p>Votre personnage est-il en vie ?</p>
        <label for="alive">Oui</label>
        <input type="radio" id="alive" name="deadoralive" value="oui">
        <label for="dead">Non</label>
        <input type="radio" id="dead" name="deadoralive" value="non">
    </p>
    <p><input type="submit" value="Soumettre..."></p>
</section>
<section>
    <?=$html?>
</section>
</body>
</html>
