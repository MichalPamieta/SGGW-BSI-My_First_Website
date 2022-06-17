<?php
$userName="asd";
$userPassword="asd";

session_start();
if(isset($_SESSION['userName']))
{
	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>BSI - Projekt</title>
		<meta charset='UTF-8'/>
	</head>
	<style>
		ul {
			list-style-type: none;
		}
		.newTask {
			margin-top: 20px;
		}
	</style>
	<body>
		<h1>Michał Pamięta</h1>
		<p>To jest strona Michała Pamięta.</p>
		<button onclick=\"document.location='logout.php'\">WYLOGUJ</button>
		<h3>ZADANIA:</h3>
		<ul>
			<li>
				<a href='Zadanie1A/index.php'>Zadanie 1A</a>
			</li>
			<li>
				<a href='Zadanie1B/index.php'>Zadanie 1B</a>
			</li>
			<li>
				<a href='Zadanie1C/index.php'>Zadanie 1C</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie2A/index.php'>Zadanie 2A</a>
			</li>
			<li>
				<a href='Zadanie2B/index.php'>Zadanie 2B</a>
			</li>
			<li>
				<a href='Zadanie2C/index.php'>Zadanie 2C</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie3/index.php'>Zadanie 3</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie4/index.php'>Zadanie 4</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie5/index.xml'>Zadanie 5</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie6/index.php'>Zadanie 6</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie7/index.php'>Zadanie 7</a>
			</li>
			<li class='newTask'>
				<a href='Zadanie8/index.php'>Zadanie 8</a>
			</li>
		</ul>
	</body>
	</html>";
}
else
{
	if($_POST['userName']==$userName && $_POST['userPassword']==$userPassword)
	{
		$_SESSION['userName']=$userName;
		header("Location: index.php");
	}
	else
	{
		header("Location: login.php");
	}
}
?>