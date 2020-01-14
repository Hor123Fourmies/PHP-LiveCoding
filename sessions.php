<?php

// Les sessions
/*
Récupérer des valeurs et les passer sur l'ensemble du site internet (c'est un cookie)
C'est le développeur qui détermine la durée de la session (souvent, elle s'arrête qd l'utilisateur
quitte le site sur lequel il navigue
Ainsi une personne n'a pas besoin de se reloguer entre chaque page
*/
session_start();
$_SESSION ['username'] = "James";
// Accès à une super globale (session) qui permet d'accéder à la valeur d'un tableau
// Création d'un tableau associatif

echo $_SESSION['username'];//affiche James

?>


<a href="sessions2.php">Aller à sessions2</a>

<a href="sessions2.php?username=James">Aller à sessions2</a> // utilisation du GET

/*
*Une session doit être la toute première chose à exécuter. S'il y a qqch avant, la session
*ne s'exécute pas
*/

// Formulaire invisible

<form id="test" method="post" action="sessions2.php">
    <input type="hidden" name="name" value="Bond">
</form>

<a href="#"
   onclick="document.getElementById('test').submit()">Aller à sessions2</a>
