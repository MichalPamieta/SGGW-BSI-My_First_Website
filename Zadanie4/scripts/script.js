function checkImie(){
	var regImie = new RegExp("^[A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([a-zęóąśłżźćń]){1,49}$");
	var imie = document.getElementById("imie").value;
	var testImie = document.getElementById("testImie");
	var isValid = regImie.test(imie);
	if(isValid)
	{
		testImie.style.color = "green";
		testImie.innerHTML = "V";
	}
	else
	{
		testImie.style.color = "red";
		testImie.innerHTML = "X";
	}
	return isValid;
}
function checkNazwisko(){
	var regNazwisko = new RegExp("^([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([ ]|([[ ]?[[\.,'-][ ]?))?){2,50}$");
	var nazwisko = document.getElementById("nazwisko").value;
	var testNazwisko = document.getElementById("testNazwisko");
	var isValid = regNazwisko.test(nazwisko);
	if(isValid)
	{
		testNazwisko.style.color = "green";
		testNazwisko.innerHTML = "V";
	}
	else
	{
		testNazwisko.style.color = "red";
		testNazwisko.innerHTML = "X";
	}
	return isValid;
}
function checkUlica(){
	var regUlica = new RegExp("^((ul|UL|uL|Ul)[ ]?[\.][ ]?)?([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń0-9]([ ]|([[ ]?[[\.,'-][ ]?))?){3,50}$");
	var ulica = document.getElementById("ulica").value;
	var testUlica = document.getElementById("testUlica");
	var isValid = regUlica.test(ulica);
	if(isValid)
	{
		testUlica.style.color = "green";
		testUlica.innerHTML = "V";
	}
	else
	{
		testUlica.style.color = "red";
		testUlica.innerHTML = "X";
	}
	return isValid;
}
function checkNumerDomu(){
	var regNumerDomu = new RegExp("^\\d{1,3}[A-Za-z]{0,2}$");
	var numerDomu = document.getElementById("numer_domu").value;
	var testNumerDomu = document.getElementById("testNumerDomu");
	var isValid = regNumerDomu.test(numerDomu);
	if(isValid)
	{
		testNumerDomu.style.color = "green";
		testNumerDomu.innerHTML = "V";
	}
	else
	{
		testNumerDomu.style.color = "red";
		testNumerDomu.innerHTML = "X";
	}
	return isValid;
}
function checkNumerMieszkania(){
//	var regNumerMieszkania = new RegExp("^(([1-9]{1})|([1-9]\\d{1,2}))$");
	var regNumerMieszkania = new RegExp("^\\d{1,3}$");
	var numerMieszkania = document.getElementById("numer_mieszkania").value;
	var testNumerMieszkania = document.getElementById("testNumerMieszkania");
	var isValid = regNumerMieszkania.test(numerMieszkania);
	if(isValid)
	{
		testNumerMieszkania.style.color = "green";
		testNumerMieszkania.innerHTML = "V";
	}
	else
	{
		testNumerMieszkania.style.color = "red";
		testNumerMieszkania.innerHTML = "X";
	}
	return isValid;
}
function checkKodPocztowy(){
	var regKodPocztowy = new RegExp("^\\d{2}(([ ][-][ ])|([-]))\\d{3}$");
	var kodPocztowy = document.getElementById("kod_pocztowy").value;
	var testKodPocztowy = document.getElementById("testKodPocztowy");
	var isValid = regKodPocztowy.test(kodPocztowy);
	if(isValid)
	{
		testKodPocztowy.style.color = "green";
		testKodPocztowy.innerHTML = "V";
	}
	else
	{
		testKodPocztowy.style.color = "red";
		testKodPocztowy.innerHTML = "X";
	}
	return isValid;
}
function checkMiasto(){
	var regMiasto = new RegExp("^([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([ ]|([[ ]?[[\.,'-][ ]?))?){2,50}$");
	var miasto = document.getElementById("miasto").value;
	var testMiasto = document.getElementById("testMiasto");
	var isValid = regMiasto.test(miasto);
	if(isValid)
	{
		testMiasto.style.color = "green";
		testMiasto.innerHTML = "V";
	}
	else
	{
		testMiasto.style.color = "red";
		testMiasto.innerHTML = "X";
	}
	return isValid;
}
function checkTelefon(){
	var regTelefon = new RegExp("^(([\+]?\\d{2,4}[ ]?)|([\(]{1}([\+]?\\d{2,4})[\)]{1}[ ]?))?((\\d{9})|(\\d{3}([ -]|([ ]?[-][ ]?))\\d{3}([ -]|([ ]?[-][ ]?))\\d{3}))$");
	var telefon = document.getElementById("telefon").value;
	var testTelefon = document.getElementById("testTelefon");
	var isValid = regTelefon.test(telefon);
	if(isValid)
	{
		testTelefon.style.color = "green";
		testTelefon.innerHTML = "V";
	}
	else
	{
		testTelefon.style.color = "red";
		testTelefon.innerHTML = "X";
	}
	return isValid;
}
function checkHaslo(){
	var regHasloL = new RegExp("\\S{8,24}");
	var regHasloD = new RegExp("([A-ZĘÓĄŚŁŻŹĆŃ])+");
	var regHasloM = new RegExp("([a-zęóąśłżźćń])+");
	var regHasloC = new RegExp("\\d+");
//	var regHasloZ = new RegExp("([!@#$%^&*()\-=_+,./;'\\\[\]<>\?:\"\|\{\}])+");
	var regHasloZ = new RegExp("\\W");
	var haslo = document.getElementById("haslo").value;
	var testHaslo = document.getElementById("testHaslo");
	var dlugosc = document.getElementById("dlugosc");
	var duza_litera = document.getElementById("duza_litera");
	var mala_litera = document.getElementById("mala_litera");
	var cyfra = document.getElementById("cyfra");
	var znak = document.getElementById("znak");
	var isValidL = regHasloL.test(haslo);
	var isValidD = regHasloD.test(haslo);
	var isValidM = regHasloM.test(haslo);
	var isValidC = regHasloC.test(haslo);
	var isValidZ = regHasloZ.test(haslo);
	var isValid = isValidL && isValidD && isValidM && isValidC && isValidZ;
	if(isValidL)
	{
		dlugosc.style.color = "green";
		dlugosc.innerHTML = "V";
	}
	else
	{
		dlugosc.style.color = "red";
		dlugosc.innerHTML = "X";
	}
	if(isValidD)
	{
		duza_litera.style.color = "green";
		duza_litera.innerHTML = "V";
	}
	else
	{
		duza_litera.style.color = "red";
		duza_litera.innerHTML = "X";
	}
	if(isValidM)
	{
		mala_litera.style.color = "green";
		mala_litera.innerHTML = "V";
	}
	else
	{
		mala_litera.style.color = "red";
		mala_litera.innerHTML = "X";
	}
	if(isValidC)
	{
		cyfra.style.color = "green";
		cyfra.innerHTML = "V";
	}
	else
	{
		cyfra.style.color = "red";
		cyfra.innerHTML = "X";
	}
	if(isValidZ)
	{
		znak.style.color = "green";
		znak.innerHTML = "V";
	}
	else
	{
		znak.style.color = "red";
		znak.innerHTML = "X";
	}
	if(isValid)
	{
		testHaslo.style.color = "green";
		testHaslo.innerHTML = "V";
	}
	else
	{
		testHaslo.style.color = "red";
		testHaslo.innerHTML = "X";
	}
	return isValid;
}
function newPass(){
	var dlugosc = document.getElementById("dlugosc");
	var duza_litera = document.getElementById("duza_litera");
	var mala_litera = document.getElementById("mala_litera");
	var cyfra = document.getElementById("cyfra");
	var znak = document.getElementById("znak");
	dlugosc.innerHTML = "";
	duza_litera.innerHTML = "";
	mala_litera.innerHTML = "";
	cyfra.innerHTML = "";
	znak.innerHTML = "";
}
function checkAll(){
	isValid = checkImie() && checkNazwisko() && checkUlica() && checkNumerDomu() && checkNumerMieszkania() && checkKodPocztowy() && checkMiasto() && checkTelefon() && checkHaslo();
	if(isValid)
	{
		alert("Fomularz wypełniono poprawnie.")
	}
	else{
		checkImie();
		checkNazwisko();
		checkUlica();
		checkNumerDomu();
		checkNumerMieszkania();
		checkKodPocztowy();
		checkMiasto();
		checkTelefon();
		checkHaslo()
	}
	return isValid;
}
function validateAndSend(){
	isValid = checkAll();
	if(isValid)
	{
		document.forms[0].submit();
		alert("Próba wysłania formularza powiodła się.")
	}
	else
	{
		checkAll();
		alert("Formularz wypełniono niepoprawnie. Dane zostały błędnie wprowadzone w zaznaczonych polach. Spróbuj ponownie.")
	}
}

// Zamiast tworzyć x funkcji z osobną walidacją dla każdego pola, to moglibyśmy dodać input hidden z wyrażeniem regularnym (jako parametr) i przekazywać go razem z wartością danego pola do jednej, uniwersalnej i sparametryzowanej funkcji.
// DWA RÓŻNE WYRAŻENIA REGULARNE DO OKREŚLANIA DANYCH OSOBOWYCH:
// 1) (pole imię) wersja najprostsza, dokładna i rygorystyczna, ALE mało uniwersalna /^[A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([a-zęóąśłżźćń]){1,49}$/
// 2) (pole nazwisko) wersja trudniejsza, bardziej ogólna i przystosowana do trudniejszych danych (może być stosowane również w polu imię lub gdyby oba pola były ze sobą połączone - jedno wspólne pole imiona i nazwisko) /^([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([ ]|([[ ]?[[\.,'-][ ]?))?){2,50}$/
// regex imię - /^[A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([a-zęóąśłżźćń]){1,49}$/
// regex nazwisko - /^([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([ ]|([[ ]?[[\.,'-][ ]?))?){2,50}$/
// regex ulica - /^((ul|UL|uL|Ul)[ ]?[\.][ ]?)?([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń0-9]([ ]|([[ ]?[[\.,'-][ ]?))?){3,50}$/
// regex numer domu - /^\d{1,3}[A-Za-z]{0,2}$/
// regex numer mieszkania - /^\d{1,3}$/
// regex kod pocztowy - /^\d{2}[-]\d{3}$/
// regex miasto - /^([A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń]([ ]|([[ ]?[[\.,'-][ ]?))?){2,50}$/
// regex numer telefonu - /^(([\+]?\d{2,4}[ ]?)|([\(]{1}([\+]?\d{2,4})[\)]{1}[ ]?))?((\d{9})|(\d{3}([ -]|([ ]?[-][ ]?))\d{3}([ -]|([ ]?[-][ ]?))\d{3}))$/
// regex hasło (długość 8-24; co najmniej jedna duża litera; co najmniej jedna mała litera; co najmniej jedna cyfra; co najmniej jeden znak specjalny (nie-spacja)) - do walidacji hasła też istnieje kilka sposobów np.
// 1) wyrażenie regularne z tzw. lookaround tj. /^(?=.*[a-zęóąśłżźćń])(?=.*[A-ZĘÓĄŚŁŻŹĆŃ])(?=.*\d)(?=.*[!@#$%^&*()\-=_+,./;'\\\[\]<>\?:\"\|\{\}])[A-ZĘÓĄŚŁŻŹĆŃa-zęóąśłżźćń\d!@#$%^&*()\-=_+,./;'\\\[\]<>\?:\"\|\{\}]{8,24}$/
// opcjonalnie wersja "skrócona": /^(?=.*[\węóąśłżźćńĘÓĄŚŁŻŹĆŃ])(?=.*\d)(?=.*[!@#$%^&*()\-=_+,./;'\\\[\]<>\?:\"\|\{\}])(.|\S){8,24}$/
// 2) wyszukiwać błędne hasła zamiast prawidłoych i przy sprawdzeniu warunku użyć zaprzeczenia (ponieważ nie ma operatora logicznego & (AND) można skorzystać z | (OR) i praw de Morgana, aby sprawdzić powyższe warunki): /^(.{0,7}|.{25,}|[^0-9]*|[^(A-ZĘÓĄŚŁŻŹĆŃ)]*|[^(a-zęóąśłżźćń)]*|[!@#$%^&*\(\)\-=_+,./;'\\\[\]<>\?:\"\|\{\}]*|[a-zęóąśłżźćńA-ZĘÓĄŚŁŻŹĆŃ0-9]*)$/
// 3) jednak najlepszym sposobem będzie rozbicie jednego wyrażenia regularnego na mniejsze etapy, ponieważ chcemy sprawdzić kilka warunków osobno (i można sprawdzić "siłę" stworzonego hasła)
/*
dane testowe do pola imię:
+TRUE (przechodzą walidację):
Al
Ędward
michał
łukasz
Michał
Łukasz
Marcin
Pamięta
qwertyuiopasdfghjklzxcvbnmqwer
Qwertyuiopasdfghjklzxcvbnmqwer
-FALSE (nie przechodzą walidacji):
     (same spacje)
A
te  st
ĄŚĆĘÓŁŻŹŃęółśążźćń
1234
Al Capone
Joanna d'Arc
jakub julia aga arek
Jakub Julia AGA areK
jakub,Juliaaga. Arek
Jakub julia .Aga, Arek
P4m13t4
6Pamięta
Pamięta6
6Pamięta6
Pamię  ta
Pa!uck...
NOwak
KowaLski
TEST
nowak-kowalski
nowak - kowalski
Nowak-Kowalski
Nowak - Kowalski
Martin Luther King, Jr.
Janusz Korwin-Mikke
te st
McGregor
mcGREGOR
ĄŚĆĘÓŁŻŹŃęółśążźćń
qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjklzxcvbnm
Qwertyuiopasdfghjklzxcvbnmqwertyuiopasdfghjklzxcvbnm
*/
/*
dane testowe do pola nazwisko:
+TRUE (przechodzą walidację):
Al
Al Capone
Joanna d'Arc
Ącki
michał
łukasz
Michał
Łukasz
Marcin
jakub julia aga arek
Jakub Julia AGA areK
jakub,Juliaaga. Arek
Jakub julia .Aga, Arek
Pamięta
NOwak
KowaLski
TEST
qwertyuiopasdfghjklzxcvbnmqwer
Qwertyuiopasdfghjklzxcvbnmqwer
nowak-kowalski
nowak - kowalski
Nowak-Kowalski
Nowak - Kowalski
Ędward Ącki
Martin Luther King, Jr.
Janusz Korwin-Mikke
te st
McGregor
mcGREGOR
ĄŚĆĘÓŁŻŹŃęółśążźćń
-FALSE (nie przechodzą walidacji):
     (same spacje)
A
te  st
ĄŚĆĘÓŁŻŹŃęółśążźćń
1234
P4m13t4
6Pamięta
Pamięta6
6Pamięta6
Pamię  ta
Pa!uck...
qwertyuiopasdfghjklzxcvbnmqwert
Qwertyuiopasdfghjklzxcvbnmqwert
*/
/*
dane testowe do pola ulica (wszystkie przeszły):
Jakaś tam
Jana Pawła II
Jana Matejski
Inżynierska
testowa
poLna
Konstytucji 3 maja
ul Nowoursynowska
ul. Warszawska
test - owa
Ul abc
uL .dfgd
UL .b
UL.b
*/
/*
dane testowe do pola numer domu:
przeszły:
6
40
116D
6a
40bb
nie przeszły:
1234556654
ACV1234
12!23
*/
/*
dane testowe do pola numer mieszkania:
przeszły:
6
40
nie przeszły:
116D
6a
40bb
1234556654
ACV1234
12!23
*/
/*
dane testowe do pola kod pocztowy:
przeszły:
00-000
00 - 000
nie przeszły:
000-00
00a-b00
00 -000
*/
/*
dane testowe do pola numer telefonu:
true:
123456789
12345678901
123456789012
1234567890123
123 456 789
123-456-789
+48 123456789
(48) 123 456 789
(+48) 123 456 789
0048123456789
0048 123456789
(48) 123 456 789
(+48) 123 456 789
123 - 456 - 789
false:
(+0048) 
+(+48)123456789
((48))123456789
++48 123456789
++0048 123456789
123  456789
123a456b789c
123 a 456b 789 c
1234567890
12345678901234
123456789012345
1234567890123456
12345678901234567
123456789012345678
1234567890123456789
*/
/*
dane testowe do pola hasło:
passed:
P@ssw0ńćrDĘĄ
ĄĘP@w0rćńD!@#$%^&*()-=_+,./;'\[]<>?:"|{}
failed:
test
TEST
testtest
TESTTEST
TeStTeSt
TEstTEst
test1test2
1TESTTEST
TeStTeSt2
TEst@TEst
\.,></\?';\|":\[\]\{\}\!@#\$%\^&*\(\)-=_+
1234567890
*/