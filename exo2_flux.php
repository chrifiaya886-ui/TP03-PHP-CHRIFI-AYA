<?php
/*
   Auteur : Aya chrifi 
   Objectif : Exercices Partie 2 - Structures de contrôle et boucles
   Date : 14/10/2026
*/

require 'config.php';
require_once 'includes/fonctions_inc.php';

include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

echo "<h2>Partie 2 : Structures de contrôle et boucles</h2>";

// 2.1 Test de mention()
echo "<h3>2.1 Test de mention()</h3>";
foreach ([17, 14, 12, 10, 9] as $n) {
    echo "$n : " . mention($n) . '<br>';
}

// 2.2 Mois courant avec switch
echo "<h3>2.2 Mois courant avec switch</h3>";
$numeroDeMois = (int)date("m");
switch ($numeroDeMois) {
    case 1:  $mois = 'Janvier';  break;
    case 2:  $mois = 'Février';  break;
    case 3:  $mois = 'Mars';     break;
    case 4:  $mois = 'Avril';    break;
    case 5:  $mois = 'Mai';      break;
    case 6:  $mois = 'Juin';     break;
    case 7:  $mois = 'Juillet';  break;
    case 8:  $mois = 'Août';     break;
    case 9:  $mois = 'Septembre'; break;
    case 10: $mois = 'Octobre';  break;
    case 11: $mois = 'Novembre'; break;
    case 12: $mois = 'Décembre'; break;
    default: $mois = 'Mois inconnu';
}
echo "Nous sommes au mois de $mois<br>";

// 2.3 Boucles
echo "<h3>2.3 Boucles</h3>";

echo "<h4>1. Triangle :</h4>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo "<h4>2. while avec 10 en gras :</h4>";
$k = 0;
while ($k <= 20) {
    if ($k == 10) {
        echo '<strong>' . $k . '</strong>';
    } else {
        echo $k;
    }
    echo '<br>';
    $k += 2;
}

echo "<h4>3. continue :</h4>";
for ($i = 0; $i <= 10; ++$i) {
    if ($i % 2) {
        continue;
    }
    echo $i . '<br>';
}

echo "<h4>4. break et break 2 :</h4>";
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }
}

echo "<h4>5. do-while :</h4>";
$k = 0;
do {
    echo ($k == 10) ? "<strong>$k</strong>" : $k;
    echo '<br>';
    $k += 2;
} while ($k <= 20);

include 'includes/pied_inc.php';
?>