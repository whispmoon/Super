<?php
session_start();

if (isset($_GET) AND ($_GET['id'])>=0) {

	unset($_SESSION['supers'][$_GET['id']]);
	header('Location: index.php?success=1');
}

else {
	header('Location: index.php?error=3');
}



?>