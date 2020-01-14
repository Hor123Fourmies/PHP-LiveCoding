<?php

$x=0;

while($x<=5)
{
    echo"test $x";
    $x++;
}

for($a = 0; $a <= 10; $a++)
{
    echo "x = $a <br>";
}

// Tables
$cars = array("Volvo","BMW");
// ou $cars = ["Volvo","BMW"];
echo $cars[0];//Affichera 'Volvo'

$cars[2] = "Toyota";
$cars[] = "Honda";


//Compter le nombre d'enregistrements dans le tableau (length)
echo count($cars);

$length = count($cars);

for ($x=0; $x<$length; $x++)
{
    echo $cars[$x].' ';
}

//Tableaux associatifs
$age = array("Pierre"=>30, "Kevin"=>18);
//Pierre = clé; 30 = valeur de la clé
echo $age['Pierre'];// on demande la valeur qui se rapporte à Pierre (alphanumérique)
echo $age['Pierre']." ".$age['Kevin'];

foreach($age as $key=>$value)
//$key = prenoms
//$value = ages
{
  echo $key."<br>";
  echo $value;
}

// Trier les tableaux
$cars = array("Volvo","BMW", "Toyota", "Honda");
//Tri par ordre alphabétique
sort($cars);
//Tri par ordre inverse de l'alphabet
rsort($cars);
print_r($cars);//Ecriture sous forme de chaîne de caractères; affiche toute la structure du tableau

$age = array("Pierre"=>30, "Alain"=>18);
//Tri par ordre d'âge
asort($age);//a pour associatif //Prend les valeurs et les utilise pour trier le tableau (pas les clés)
print_r($age);
//Tri par ordre inverse de l'âge (décroissant)
arsort($age);

//Tri en fonction des clés (Pierre et Alain)
ksort($age);//k pour key // ordre alphabétique
krsort($age);
