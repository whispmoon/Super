<?php

session_start();

$login = "toto";
$mdp = "azerty";

if ($_POST["submit"] == "se connecter") {
    if($_POST["name"] == $login AND $_POST["password"] == $mdp){
        $_SESSION['logged'] = true;
        $_SESSION['name'] = uncfirst($login);
        header('location: index.php');
    }
    else{
        header('location: index.php?error=12');
        
    }
}
else{
    header('location: index.php');
}



?>