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
		<form action="wynik.php" method="post">
			<div><label for="imie">Imię: </label></div>
			<div><input type="text" name="imie" id="imie"></div>
			<div><label for="nazwisko">Nazwisko: </label></div>
			<div><input type="text" name="nazwisko" id="nazwisko"></div>
			<div><label for="ulica">Ulica: </label></div>
			<div><input type="text" name="ulica" id="ulica"></div>		
			<div><label for="numer_domu">Numer domu: </label></div>
			<div><input type="text" name="numer_domu" id="numer_domu"></div>
			<div><label for="numer_mieszkania">Numer mieszkania: </label></div>
			<div><input type="text" name="numer_mieszkania" id="numer_mieszkania"></div>
			<div><label for="kod_pocztowy">Kod pocztowy: </label></div>
			<div><input type="text" name="kod_pocztowy" id="kod_pocztowy"></div>
			<div><label for="miasto">Miasto: </label></div>
			<div><input type="text" name="miasto" id="miasto"></div>
			<div><label for="wojewodztwo"></label></div>
			<div>Województwo: <select name="wojewodztwo" id="wojewodztwo">
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
				</select></div>
			<div><label for="prawo_jazdy">Prawo jazdy: </label></div>
			<div><input type="checkbox" name="prawo_jazdy" id="prawo_jazdy"></div>
			<div><div>Płeć: </div>
			<label for="plec">Kobieta </label></div>
			<div><input type="radio" name="plec" value="Kobieta" id="plec"></div>
			<label for="plec">Mężczyzna </label></div>
			<div><input type="radio" name="plec" value="Mężczyzna" id="plec"></div>
			<label for="plec">Nie chcę podawać </label></div>
			<div><input type="radio" name="plec" value="Nie podano" id="plec" checked></div>
			<div><label for="uwagi">Uwagi: </label></div>
			<div><textarea name="uwagi" rows="10" cols="30" placeholder="Uwagi.." id="uwagi"></textarea></div>
			<div><label for="telefon">Telefon: </label></div>
			<div><input type="tel" name="telefon" id="telefon"></div>
			<div><label for="data_urodzenia">Data urodzenia: </label></div>	
			<div><input type="date" name="data_urodzenia" id="data_urodzenia"></div>
			<div><label for="haslo">Hasło: </label></div>
			<div><input type="password" name="haslo" id="haslo"></div>
			<!--<div><label for='button_next"></label></div>
			<div><input type="button" name="button_next" value="Dalej" id="button_next"></div>-->
			<div><label for="button1"></label></div>
			<div><input type="button" name="button1" value="Potwierdź (OK)" id="button1"></div>
			<div><label for="button_clear"></label></div>
			<div><input type="reset" name="button_clear" value="Czyść" id="button_clear"></div>		
			<div><label for="button_submit"></label></div>	
			<div><input type="submit" name="button_submit" value="Wyślij" id="button_submit"></div>
		</form>
	</body>
</html>