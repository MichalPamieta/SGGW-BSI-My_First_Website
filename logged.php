<?php
session_start();
if(!isset($_SESSION['userName'])){
	header('Location: ../login.php');
	exit;
}
echo "<button onclick=\"document.location='../logout.php'\" style=\"position:absolute; top:10px; right:10px;\">WYLOGUJ</button>";
?>