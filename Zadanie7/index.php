<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css">
		<title>BSI - Zadanie 7</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<h4><a href="index.php">Zresetuj widok strony</a></h4>
<!--
Problem przekazywania wartości można rozwiązać na 2 sposoby: 1. input type submit + input type hidden z id ("normalnie wysłać formularz z ukrytą zawartością") lub 2. button type submit z value id. Usuwanie i edycja są zrealizowane "klasycznie (sposób 1. - input)", zaś dodawanie jest wykonywane metodą 2. z button (którą osobiście uważam za lepszą i bardziej uniwersalną, bo taki przycisk może być submit lub np. zwykłym buttonem z wydarzeniem onClick wywołującym jakąś funkcję dla wartości przycisku - bez zbędnego hidden). Poza tym button jest lepszy od zwykłego inputa, ponieważ ma więcej opcji personalizacji i dostosowania do naszych potrzeb - np. dodać obrazek zamiast zwykłego przycisku.
-->
<?php
//łączenie z serwerem SQL i bazą danych
	echo "<p class='sql_connection'>Nawiązywanie połączenia z serwerem MySQL</p>";
	$connection = @mysql_connect("sql208.epizy.com", "epiz_28079692", "7QJR9fYfV9r")
	or die("<p class='sql_connection'> PORAŻKA.<br />Błąd: ".mysql_error()."</p>");
	echo "<p class='sql_connection'> SUKCES!</br>";
	echo "<p class='sql_connection'>Nawiązywanie połączenia z bazą danych</p>";
	$db = @mysql_select_db("epiz_28079692_BazaBSI", $connection)
	or die("<p class='sql_connection'> PORAŻKA.<br />Błąd: ".mysql_error()."</p>");
	echo "<p class='sql_connection'> SUKCES!</br>";
	//ustawienie kodowania na utf-8, żeby zarówno wyświetlane dane na stronie po stronie klienta, jak i przchowywane na serwerze w bazie danych zawierały poprawne, wszystkie znaki
	mysql_set_charset("utf8", $connection);
	
//strona
	//usuwanie rekordu
	if(isset($_POST["delete"]))
	{
		$sql="delete from Users where id ='$_POST[hidden]'";
		$wynik=mysql_query($sql);
		header("Location: index.php");
	}
	//zapisanie zmian rekordu
	elseif(isset($_POST["save"]))
	{
		$sql="update Users set imie='$_POST[imie]', nazwisko='$_POST[nazwisko]', wiek='$_POST[wiek]' where id ='$_POST[hidden]'";
		$wynik=mysql_query($sql);
		header("Location: index.php");
	}
	//anulowanie zmian rekordu (trochę przerost formy nad treścią, ponieważ wystarczyłby zwykły button, który jako onclick resetował / odświeżał stronę), ale jest zrobiony dla "spójności" kodu
	elseif(isset($_POST["cancel"]))
	{
		header("Location: index.php");
	}
	//sprawdzanie czy dodajemy nowy rekord i ewentualne dodanie go
	//warunek alternatywny (skrócony, wystarczający) $_POST["zmiana"]=="dodaj"; opcjonalnie można zrezygnować z warunku isset($_POST["zmiana"]) && 
	elseif(isset($_POST["zmiana"]))
	{
		if($_POST["zmiana"]=="dodaj")
		{
			$imie=$_POST["imie"];
			$nazwisko=$_POST["nazwisko"];
			$wiek=$_POST["wiek"];
			$sql="insert into Users(imie, nazwisko, wiek) values('$imie','$nazwisko',$wiek)";
			$wynik=mysql_query($sql);
			header("Location: index.php");
		}
	}
	//wyświetlanie strony
	else
	{
		echo "<table>
			<thead>
			<tr>
			<th> Id </th>
			<th> Imię </th>
			<th> Nazwisko </th>
			<th> Wiek </th>
			<th> Usuwanie </th>
			<th> Edycja </th>
			</tr>
			</thead>
			<tbody>";
		$sql="SELECT * FROM Users";
		$wynik=mysql_query($sql);
		//sprawdzenie czy rekord jest edytowany i w zależności od tego generowanie strony tylko z przyciskami edytuj lub z przyciskiem anuluj w odpowiedniej kolumnie
		if(isset($_POST["edit"]))
		{
			while($rekord=mysql_fetch_array($wynik))
			{
				echo "<tr>
					<form id='dane' method='post' action='index.php'>";
				if($_POST["hidden"]==$rekord["id"])
				{
					echo "<td colspan='2'><input type ='text' name='imie' value='".$rekord['imie']."' placeholder='".$rekord['imie']."' maxlength='50' autocomplete='off' required autofocus></td>
						<td><input type ='text' name='nazwisko' value='".$rekord['nazwisko']."' placeholder='".$rekord['nazwisko']."' maxlength='50' autocomplete='off' required></td>
						<td><input type ='number' name='wiek' value='".$rekord['wiek']."' placeholder='".$rekord['wiek']."' min='1' max='999' autocomplete='off' required></td>
						<td class='przycisk'> <input type='submit' name='save' class='button save' value='ZAPISZ'></td>		
						<td class='przycisk'> <input type='submit' name='cancel' class='button cancel' value='ANULUJ'></td>			
						<input type='hidden' name='hidden' value='".$rekord['id']."'>";
				}
				else
				{
					echo "<td> ".$rekord['id']."</td>
						<td> ".$rekord['imie']." </td>
						<td> ".$rekord['nazwisko']." </td>
						<td> ".$rekord['wiek']." </td>
						<td class='przycisk'> <input type='submit' name='delete' class='button delete' value='USUŃ'></td>		
						<td class='przycisk'> <input type='submit' name='edit' class='button edit' value='EDYTUJ'></td>			
						<input type='hidden' name='hidden' value='".$rekord['id']."'>";
				}
				echo "</form>
					</tr>";
			}
		}
		else
		{
			while($rekord=mysql_fetch_array($wynik))
			{
				echo "<tr>
					<form id='dane' method='post' action='index.php'>
					<td> ".$rekord['id']."</td>
					<td> ".$rekord['imie']." </td>
					<td> ".$rekord['nazwisko']." </td>
					<td> ".$rekord['wiek']." </td>
					<td class='przycisk'> <input type='submit' name='delete' class='button delete' value='USUŃ'></td>		
					<td class='przycisk'> <input type='submit' name='edit' class='button edit' value='EDYTUJ'></td>			
					<input type='hidden' name='hidden' value='".$rekord['id']."'>
					</form>
					</tr>";
			}
		}
		echo "</tbody>
			<tfoot>
			<tr>
				<th colspan='6'> Dodawanie </th>
			</tr>
			<tr>
			<form id='dodaj' method='post' action='index.php'>
			<td colspan='2'>
				<label for='imie'> Imię: <br></label>
				<input type='text' id='imie' name='imie' placeholder='Imię' maxlength='50' autocomplete='off' required>
			</td>
			<td colspan='2'>
				<label for='nazwisko'> Nazwisko: <br></label>
				<input type='text' id='nazwisko' name='nazwisko' placeholder='Nazwisko' maxlength='50' autocomplete='off' required>
			</td>
			<td>
			<label for='wiek'> Wiek: <br></label>
				<input type='number' id='wiek' name='wiek' placeholder='Wiek' min='1' max='999' autocomplete='off' required>
			</td>
			</form>
			<td class='przycisk'>
				<button type='submit' form='dodaj' name='zmiana' value='dodaj' class='button add'> DODAJ </button>
			</td>
			</tr>
			</tfoot>
			</table>";
	}
	mysql_close($connection);
?>
	</body>
</html>