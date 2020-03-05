<?php
require_once '../config/db.php';

if (!isset($_SESSION['email'], $_SESSION['level']) || $_SESSION['level'] != 1){
	header('Location: ../index.php');
}

echo "Hai, ". $_SESSION['email'];
echo '<a href="logout.php" title="logout">Logout</a>';

?>