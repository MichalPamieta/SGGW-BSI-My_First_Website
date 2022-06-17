<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css">
		<title>BSI - Zadanie 4</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<form action="" method="get">
			<div><label for="imie">Imię: </label><span id="testImie"></span></div>
			<div>Liczba znaków to: min. 2; max. 50</div>
			<div><input type="text" name="imie" id="imie" placeholder="Jan" onblur="checkImie()" required></div>
			</div>
			<div>
				<div><label for="nazwisko">Nazwisko: </label><span id="testNazwisko"> </span></div>		
				<div>Liczba znaków to: min. 2; max. 50</div>
				<div><input type="text" name="nazwisko" id="nazwisko" placeholder="Nowak" onblur="checkNazwisko()" required></div>				
			</div>
			<div><label for="ulica">Ulica: </label><span id="testUlica"> </span></div>		
			<div>Liczba znaków to: min. 3; max. 50</div>
			<div><input type="text" name="ulica" id="ulica" placeholder="Nowoursynowska" onblur="checkUlica()" required></div>				
			</div>
			<div>
				<div><label for="numer_domu">Numer domu: </label><span id="testNumerDomu"> </span></div>
				<div>Liczba znaków to: min. 1; max. 3</div>
				<div><input type="text" name="numer_domu" id="numer_domu" placeholder="159" onblur="checkNumerDomu()" required></div>
			</div>
			<div>
				<div><label for="numer_mieszkania">Numer mieszkania: </label><span id="testNumerMieszkania"> </span></div>
				<div>Liczba znaków to: min. 1; max. 3</div>
				<div>Wartość minimalna: 1; jeżeli brak - wpisać 0</div>
			<!-- <div><input type="text" name="numer_mieszkania" id="numer_mieszkania" placeholder="34" onblur="checkNumerMieszkania()"></div> -->
				<div><input type="number" name="numer_mieszkania" id="numer_mieszkania" placeholder="34" onblur="checkNumerMieszkania()"></div>
			</div>
			<div>
				<div><label for="kod_pocztowy">Kod pocztowy: </label><span id="testKodPocztowy"> </span></div>
				<div>Format: xx-xxx</div>
				<div><input type="text" name="kod_pocztowy" id="kod_pocztowy" placeholder="02-776" onblur="checkKodPocztowy()" required></div>
			</div>
			<div>
				<div><label for="miasto">Miasto: </label><span id="testMiasto"> </span></div>
				<div>Liczba znaków to: min. 2; max. 50</div>
				<div><input type="text" name="miasto" id="miasto" placeholder="Warszawa" onblur="checkMiasto()" required></div>
			</div>
			<div>
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
			</div>
			<div>
				<div><label for="prawo_jazdy">Prawo jazdy: </label></div>
				<div><input type="checkbox" name="prawo_jazdy" id="prawo_jazdy"></div>			
			</div>
			<div>
				<div>Płeć: </div>
				<div><label for="plec">Kobieta </label></div>
				<div><input type="radio" name="plec" value="kobieta" id="plec"></div>
				<div><label for="plec">Mężczyzna </label></div>
				<div><input type="radio" name="plec" value="mezczyzna" id="plec"></div>			
			</div>
			<div>
				<div><label for="uwagi">Uwagi: </label></div>
			<!-- dopisać dynamicznie zmieniający się limit znaków; ?zabezpieczyć przez np. SQL injection? -->
				<div><textarea name="uwagi" rows="10" cols="30" placeholder="Uwagi.." id="uwagi"></textarea></div>
			</div>
			<div>
				<div><label for="telefon">Telefon: </label><span id="testTelefon"> </span></div>
				<div>Format: xxx xxx xxx</div>
				<div><input type="tel" name="telefon" id="telefon" placeholder="xxx xxx xxx" onblur="checkTelefon()" required></div>
			</div>
			<div>
				<div><label for="data_urodzenia">Data urodzenia: </label></div>	
				<div><input type="date" name="data_urodzenia" id="data_urodzenia" required></div>
			</div>
			<div>
				<div><label for="haslo">Hasło: </label><span id="testHaslo"> </span></div>
			<!-- dorobić znikające pole -->
				<div>Hasło musi zawierać: </div>
				<div><span id="dlugosc"></span> Liczba znaków z zakresu: min. 8 i max. 24 </div>
				<div><span id="duza_litera"></span> Co najmniej jedna duża litera </div>
				<div><span id="mala_litera"></span> Co najmniej jedna mała litera </div>
				<div><span id="cyfra"></span> Co najmniej jedna cyfra </div>
				<div><span id="znak"></span> Co najmniej jeden znak specjalny </div>
				<div><input type="password" name="haslo" id="haslo" placeholder="*********" onclick="newPass()" onblur="checkHaslo()" required></div>
			</div>
			<!--<div><label for='button_next"></label></div>
			<div><input type="button" name="button_next" value="Dalej" id="button_next"></div>-->
			<div><label for="button1"></label></div>
			<div><input type="button" name="button1" value="TEST" id="button1" onclick="checkAll()"></div>
			<div><label for="button_clear"></label></div>
			<div><input type="reset" name="button_clear" value="Czyść" id="button_clear"></div>		
			<div><label for="button_submit"></label></div>	
			<div><input type="button" name="button_submit" value="Wyślij" id="button_submit" onclick="validateAndSend()"></div>			
		</form>
	</body>
	<script src="scripts/script.js"></script>
</html>