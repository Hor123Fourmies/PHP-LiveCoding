<?php

// Les fonctions

/*
function afficherMot()
{
    echo "Mot";
}

afficherMot();
*/

// Paramètres de fonction (ils prennent un dollar)

/*
function afficherMot($param = "test", $param2, $param3)
{
    echo $param;
}
afficherMot();// affiche la valeur par défaut
afficherMot("Un mot");// affiche la valeur spécifique
*/

function afficherMot($param)
{
    if ($param == 5)
    {
        return "test";
    };
}

$retour = afficherMot(5);
echo $retour;

echo "<br><br>";

// Les dates

$today = date("j/m/Y");
echo $today;
// Y en majuscules = 2020
// y en minuscules = 20
// Poss d'utiliser différents types de séparateur / . |
// Consulter la documentation car il y a plein de façons de formater les dates

echo "<br><br>";

// Gestion des fuseaux horaires

date_default_timezone_set("America/New York");
$heure = date("h:i:s");
echo $heure;

echo "<br><br>";


// Timestamp (nombre de millisecondes écoulées depuis...)

$timestamp = mktime(11, 14, 54, 8, 12, 2014);
echo date ('j|m|Y', $timestamp);


// Générer un timestamp en langage naturel

$timestamp = strtotime ("tomorrow");
$timestamp = strtotime ("+3 Months");