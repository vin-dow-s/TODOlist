<?php
//Exercice 1
$phrase = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.";
echo ucwords(strtolower($phrase)) . '<br>' . '<hr>';

//Exercice 2
echo '<pre style="font-family: courier">';
$personnes = [['Jean', 'Fontaine'], ['Franck', 'Leboeuf'], ['Manu', 'Petit'], ['Ziine', 'Zine']];
foreach ($personnes as $p) {
    printf("%-20s %-20s <br>", $p[0], $p[1]);
}
echo '</pre>';

//Exercice 3
$listeCours = [ '10-Developpement Web côté serveur avec PHP et Symfony', '15-Conduite et gestion de projet', '8-Analyse et Conception', '5-PL_SQL avec Oracle', '6-Developpement en couches avec Java SE', '13-Développement Web côté serveur avec JEE', '19-Développement d\'une application mobile avec Android', '20-Développement Android - Projet', '14-Projet 2 - Application Web', '2-Initiation à la programmation procédurale avec Java', '18-Développement Web côté serveur en ASPX', '9-Développement Web côté client', '21-Développement cross plateforme avec Xamarin', '7-Projet1-ClientServeur-JavaSE', '1-Algorithmique', '11-Integration Graphique', '16-Utiliser les frameworks pour le développement JEE', '12 - CMS - WordPress', '4-SQL avec SQL Server', '3-POO avec Java', '17-Linux et Admin Apache' ];
natsort($listeCours);
echo '<ul>';
foreach ($listeCours as $cours) {
    echo '<li>'.$cours.'</li>';
}
echo '</ul>';

//Exercice 4
$maintenant = time();
$naissance = mktime(13, 05, 00, 11, 17, 1995);
echo 'Nombre de secondes depuis le 17/11/1995 : ' . number_format($maintenant - $naissance, 0, '.', ' ') . '<br><hr>';

//Exercice 5
switch (date('N', mktime(0, 0, 0, 12, 25, 2017))) {
    case 1 : echo 'Lundi'; break;
    case 2 : echo 'Mardi'; break;
    case 3 : echo 'Mercredi'; break;
    case 4 : echo 'Jeudi'; break;
    case 5 : echo 'Vendredi'; break;
    case 6 : echo 'Samedi'; break;
    case 7 : echo 'Dimanche'; break;
}

//Exercice 6
echo '<br><hr><ul>';
for ($i = 2018; $i <= 2037; $i++){
    echo '<li> ' . $i . ' : ';
    switch (date('N', mktime(0, 0, 0, 5, 1, $i))) {
        case 1 :
        case 5 : echo 'Week-end prolongé !'; break;
        case 6 :
        case 7 : echo 'Désolé !'; break;
        default : echo 'En semaine'; break;
    }
    echo '</li>';
}
echo '</ul>';

//Exercice 7
ini_set('date.timezone', 'Europe/Paris');
echo '<hr><ul>';
for ($i = 2018; $i <= 2037; $i++) {
    $paques = easter_date($i);
    $ascention = $paques + 39 * 24 * 60 * 60;
    echo '<li>' . date('d/m/Y', $ascention) . '</li>';
}
echo '</ul>';

//Exercice 8
echo '<hr><table><tr><th colspan="7">';
switch (date('n')) {
    case 1: echo 'Janvier'; break;
    case 2: echo 'Février'; break;
    case 3: echo 'Mars'; break;
    case 4: echo 'Avril'; break;
    case 5: echo 'Mai'; break;
    case 6: echo 'Juin'; break;
    case 7: echo 'Juillet'; break;
    case 8: echo 'Août'; break;
    case 9: echo 'Septembre'; break;
    case 10: echo 'Octobre'; break;
    case 11: echo 'Novembre'; break;
    case 12: echo 'Décembre'; break;
}
echo ' ' . date('Y') . '</th></tr><tr><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th><th>D</th></tr><tr>';
$donnees = mktime(0, 0, 0, date('n'), 1);
for ($i = 1; $i < date('N', $donnees); $i++) {
    echo '<td></td>';
}
for ($i = 1; $i <= date('t'); $i++) {
    echo '<td>' . $i . '</td>';
    if (date('N', $donnees) == 7) {
        echo '</tr><tr>';
    }
    $donnees += 60 * 60 * 24;
}
for ($i = date('N', $donnees); $i <= 7; $i++) {
    echo '<td></td>';
}
echo '</tr></table>';