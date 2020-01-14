<?php

// Afficher du texte

echo "Hello World !";
echo "<a href='http://www.google.fr'>google</a>
<span>machin chose</span>";
echo "<div>Message</div>";

/*
 * Commentaires sur plusieurs lignes
 */

# Possibilité d'écrire aussi des commentaires


// Pas élégant

ECHO "test";

// Variables (pas d'espace entre le dollar et le nom de la variable)

$maVariable = "test";
echo $maVariable;

$maVariableNumerique = 652;

$maVariableNumVirgule = 652.4;

// Concaténation

$monPrenom = "Hortense";
echo "Mon prénom est ".$monPrenom." etc...";
// Avec des guillemets simples, la variable ne sera pas interpétée; avec des guillemets simples,
// on est obligé de faire une concaténation, avec le '.'
// Avec des guillemets doubles, tout est interprété
echo "Mon prenom est $monPrenom";
echo 'Mon prenom est $monPrenom = '.$monPrenom.' etc...';
echo "Mon prénom est {$monPrenom} etc...";

// Portée des variables

// Ici, la portée de la variable est globale

$a = 1;
$b = 2;

/*
// ne fonctionne pas
function machin ()
{
    echo $a;
}

machin();
*/


// fonctionne
function truc ()
{
    global $b;
    echo $b;
}

truc();


// Dc mieux vaut définir les variables dans les fonctions


// Les conditions (pareil qu'en JS)

$a = 1;

if ($a === 1)
{
    // Ma condition
    echo "ok";
}

$a = 2;

if ($a === 1)
{
    // Ma condition
    echo "a === 1";
}

elseif ($a === 3)
{
    echo "a = 3";
}
else
{
    echo "a vaut 2";
}


switch ($a)
{
    case "1":
        //a = 1
        break;
    case "2":
        //a = 2
        break;
}


// Les opérateurs de conditions (pareil qu'en JS)
$a = 3;

// Plus élégant
if($a!=2)
{

}
// ou
if($a<>2)
{

}
