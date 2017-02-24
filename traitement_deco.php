<?php

session_start();
if ($_POST["button"] == "deconnecter") {
    $_SESSION['logged'] = false;
    
    }

header('location: index.php');

?>