<?php
//Exercice 1
$dupont[] = "Marcel";
$dupont[] = "Marseille";
$dupont[] = 46;
$michounne[] = "Jean";
$michounne[] = "Bordeaux";
$michounne[] = 50;
$franck[] = "Thierry";
$franck[] = "Lille";
$franck[] = 16;

$personnes["Dupont"] = $dupont;
$personnes["Michounne"] = $michounne;
$personnes["Franck"] = $franck;

echo '<pre>';
print_r($personnes);
echo '</pre>';



//Exercice 2
$personnes2 = ["Dupont" => ["Prénom" => "Marcel", "Ville" => "Marseille", "Age" => 46],
            "Michounne" => ["Prénom" => "Jean", "Ville" => "Bordeaux", "Age" => 50],
            "Franck" => ["Prénom" => "Thierry", "Ville" => "Lille", "Age" => 16]];
echo '<pre>';
print_r($personnes2);
echo '</pre>';



//Exercice 3
//require 'tp2exercice1.php';
echo '<ul>';
foreach ($personnes as $nom => $valeurs) {
    echo '<li>Element ' . $nom . '<ul>';
    for ($i = 0; $i < count($valeurs); $i++) {
        echo '<li>élément ' . $i . ' : ' . $valeurs[$i] . ' </li>';
    }
    echo '</ul></li>';
}
echo '</ul>';

//require 'tp2exercice2.php';
echo '<ul>';
foreach ($personnes2 as $nom => $valeurs) {
    echo "<li> Element $nom <ul>";
    foreach ($valeurs as $clé => $valeur) {
        echo "<li>$clé : $valeur</li>";
    }
    echo "</ul></li>";
}
echo '</ul>';



//Exercice 4
$email = ["jean@free.fr", "thierry@orange.fr", "franck@free.fr", "bob@wanadoo.fr", "superfrancky@sfr.fr", "super258@orange.fr"];
foreach ($email as $operateur) {
    $d = explode('@', $operateur)[1];
    if (isset($domaines[$d])) {
        $domaines[$d]++;
    }
    else {
        $domaines[$d] = 1;
    }
}
echo '<pre>';
print_r($domaines);
echo '</pre>';



//Exercice 5
for ($i = 1; $i <= 63; $i++) {
    $tableau1[] = $i;
}
$tableau2[] = 0;
foreach ($tableau1 as $valeur)
    $tableau2[] = $valeur / 10;
foreach ($tableau2 as $reel)
    $tableau3[(string) $reel] = sin($reel);
echo '<table style="border-collapse:collapse"><tr><th style="border:1px solid black">x</th><th style="border:1px solid black">sin(x)</th></tr>';
foreach ($tableau3 as $x => $sinx) {
    echo '<tr><td style="border:1px solid black">' . $x . '</td><td style="border:1px solid black">' . $sinx . '</td></tr>';
}
echo '</table>';