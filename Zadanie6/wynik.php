<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css">
		<title>BSI - Zadanie 6</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<h3><a href="index.php">Wróć do formularza</a></h3>
		<table>
			<th colspan="2">Wprowadzone (przesłane) dane </th>
			<tr>
				<td>Imię</td>
				<td><?php echo $_POST["imie"]; ?></td>
			</tr>
    		<tr>
		    	<td>Nazwisko</td>
	    		<td><?php echo $_POST["nazwisko"]; ?></td>
			</tr>
            <tr>
		    	<td>Ulica</td>
	    		<td><?php echo $_POST["ulica"]; ?></td>
			</tr>
    		<tr>
		    	<td>Numer domu</td>
	    		<td><?php echo $_POST["numer_domu"]; ?></td>
			</tr>
            <tr>
		    	<td>Numer mieszkania</td>
	    		<td><?php echo $_POST["numer_mieszkania"]; ?></td>
			</tr>
            <tr>
		    	<td>Kod pocztowy</td>
	    		<td><?php echo $_POST["kod_pocztowy"]; ?></td>
			</tr>
            <tr>
		    	<td>Miasto</td>
	    		<td><?php echo $_POST["miasto"]; ?></td>
			</tr>
            <tr>
		    	<td>Województwo</td>
	    		<td><?php echo $_POST["wojewodztwo"]; ?></td>
			</tr>
            <tr>
		    	<td>Prawo jazdy</td>
	    		<td><?php echo (isset($_POST["prawo_jazdy"])) ? "TAK" : "NIE"; ?></td>
			</tr>
            <tr>
		    	<td>Płeć</td>
	    		<td><?php echo $_POST["plec"]; ?></td>
			</tr>
            <tr>
		    	<td>Uwagi</td>
	    		<td><?php echo $_POST["uwagi"]; ?></td>
			</tr>
            <tr>
		    	<td>Telefon</td>
	    		<td><?php echo $_POST["telefon"]; ?></td>
			</tr>
            <tr>
		    	<td>Data urodzenia</td>
	    		<td><?php echo $_POST["data_urodzenia"]; ?></td>
			</tr>
            <tr>
		    	<td>Hasło</td>
	    		<td><?php echo $_POST["haslo"]; ?></td>
			</tr>        
		</table>
	</body>
</html>