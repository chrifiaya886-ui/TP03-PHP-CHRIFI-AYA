<?php
/*
   Auteur : aya chrifi 
   Objectif : Exercices Partie 1 - Bases, Types, Constantes et Chaînes
   Date : 14/10/2026
*/

require 'config.php';
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

echo "<h2>Partie 1 : Variables, constantes, types et chaînes</h2>";


echo "<h3>1.1 Noms de variables</h3>";

/* 
   Justifications :
   - $x : Valide (commence par une lettre)
   - $_x : Valide (commence par un underscore)
   - $2x : Invalide (ne peut pas commencer par un chiffre)
   - $x-y : Invalide (contient un tiret, réservé pour la soustraction)
   - $Prix_HT : Valide (lettres, chiffres et underscore autorisés)
   - $prix ht : Invalide (contient un espace)
   - $état : Valide (les accents sont acceptés en PHP moderne)
*/

// Déclaration des variables valides
$x = 1;
$_x = 2;
$Prix_HT = 60;
$état = 'ok';

echo "La variable \$x est : " . $x . "<br>";
echo "La variable \$_x est : " . $_x . "<br>";
echo "La variable \$Prix_HT est : " . $Prix_HT . "<br>";
echo "La variable \$état est : " . $état . "<br><br>";

// Démonstration de la sensibilité à la casse ($a et $A)
$a = 'test';
$A = 'TEST';

echo "La variable \$a est : " . $a . "<br>";
echo "La variable \$A est : " . $A . "<br>";
echo "Démonstration : \$a et \$A sont deux variables distinctes.<br>";


echo "<h3>1.2 Constantes</h3>";

echo ETABLISSEMENT . " : notes de " . NOTE_MIN . " à " . NOTE_MAX . ", seuil " . SEUIL . "<br>";

var_dump(defined('SEUIL'));
echo "<br>";
var_dump(defined('INCONNUE'));
echo "<br>";


echo "<h3>1.3 Calcul</h3>";

$prix_ht = 60;
$tva = 20; 
$prix_ttc = $prix_ht * (1 + $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";


echo "<h3>1.4 Types et conversions</h3>";

$test = 42;
$test = (string) $test;
var_dump($test); 
echo '<br>';

echo "<h4>Notations de 255 :</h4>";
$nombre = 255;
echo dechex($nombre); echo '<br>'; // Hexadécimal
echo decoct($nombre); echo '<br>'; // Octal
echo decbin($nombre); echo '<br>'; // Binaire


echo "<h3>1.5 Chaînes de caractères</h3>";

$traitees = "égales à";
$ici = 2;

echo '1. Ahmed a dit : "J\'ai réussi"<br>';
echo '2. Voulez-vous supprimer C:\*.*?<br>';
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo '4. Les variables ne seront pas $traitees $ici<br>';
echo "5. Les variables seront $traitees $ici<br>";


$ch = "*Bonjour les développeurs*";
$ch = trim($ch, "*");
echo $ch . "<br>";


for ($i = 0; $i < strlen($ch); $i++) {
    echo $ch[$i] . "<br>";
}

include 'includes/pied_inc.php';
?>