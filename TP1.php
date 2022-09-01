<?php
$boolean = true;
$valeur1 = 42;
$valeur2 = 12.34;
$mot = 'Hello !';
/*echo '$boolean = ' . $boolean . ' type : ' . gettype($boolean) . "<br>";
echo '$valeur1 = ' . $valeur1 . ' type : ' . gettype($valeur1) . "<br>";
echo '$valeur2 = ' . $valeur2 . ' type : ' . gettype($valeur2) . "<br>";
echo '$mot = ' . $mot . ' type : ' . gettype($mot) . "<br>";*/
var_dump($boolean);
var_dump($valeur1);
var_dump($valeur2);
var_dump($mot);

$X = "PHP7"; //String qui vaut PHP7 (4)
$A = &$X; //String qui vaut PHP7 (4)
$Y = "7 eme version de PHP"; //String qui vaut 7eme version de PHP (21)
$Z = $Y * 10; //Entier qui vaut 70
$X = $Y * $Y; //Entier qui vaut 49