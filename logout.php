<?php

session_start();

//Supprimer les données de la session/les valeurs du tableau associatif
session_unset();


// Détruire la session
session_destroy();
