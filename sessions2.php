<?php

session_start();
echo $_SESSION['username']." ";
// La valeur persiste d'une page à une autre

echo $_POST['name'];