<?php

// echo "formulaire envoyé";
// Quand le formulaire est envoyé/soumis

echo $_GET ['fname'];//se rapporte à 'name' dans le formulaire; l'id n'est pas pris en compte
// ou echo $_REQUEST ['fname']; pour les 2 méthodes d'envoi des formulaires
// ou echo $_POST ['fname'];

print_r($_REQUEST);


/*
if($_GET['page'] == "test")
{
    echo "page test";
}

if($_GET['page'] == "home")
{
    echo "Bienvenue";
}
*/

// Quand un formulaire est envoyé avec POST, c'est invisible pour l'utilisateur,
// les paramètres n'apparaissent pas en favori (comme pour un log in, par exemple)
// ou dans l'url.

$fname = $_POST['fname'];