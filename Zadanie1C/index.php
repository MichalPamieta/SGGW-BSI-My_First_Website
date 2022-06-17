<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<meta charset="UTF-8"/>
	<head>
		<title>BSI - Zadanie 1C</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<form action="" method="post">
			Imię: <input type="text" name="imie"><br><br>
			Nazwisko: <input type="text" name="nazwisko"><br><br>
			Ulica: <input type="text" name="ulica"><br><br>
			Numer domu: <input type="text" name="numer_domu"><br><br>
			Numer mieszkania: <input type="text" name="numer_mieszkania"><br><br>
			Kod pocztowy: <input type="text" name="kod_pocztowy"><br><br>
			Miasto: <input type="text" name="miasto"><br><br>
			Województwo: <select name="wojewodztwo">
					<option></option>
					<option>dolnośląskie</option>
					<option>kujawsko-pomorskie</option>
					<option>lubelskie</option>
					<option>lubuskie</option>
					<option>łódzkie</option>
					<option>małopolskie</option>
					<option>mazowieckie</option>
					<option>opolskie</option>
					<option>podkarpackie</option>
					<option>podlaskie</option>
					<option>pomorskie</option>
					<option>śląskie</option>
					<option>świętokrzyskie</option>
					<option>warmińsko-mazurskie</option>
					<option>wielkopolskie</option>
					<option>zachodniopomorskie</option>
				</select><br><br>
			Prawo jazdy: <input type="checkbox" name="prawo_jazdy"><br><br>
			Płeć: Kobieta <input type="radio" name="plec" value="kobieta"> Mężczyzna <input type="radio" name="plec" value="mezczyzna"><br><br>
			Uwagi: <br><textarea name="uwagi" rows="10" cols="30" placeholder="Uwagi.."></textarea><br><br>
			Telefon: <input type="tel" name="telefon"><br><br>
			Data urodzenia: <input type="date" name="data_urodzenia"><br><br>
			Hasło:<input type="password" name="haslo"><br><br>
			<!--<input type="button" name="button_next" value="Dalej">-->
			<input type="button" name="button1" value="Potwierdź (OK)">
			<input type="reset" name="button_clear" value="Czyść">
			<input type="submit" name="button_submit" value="Wyślij">
		</form>
	</body>
</html>