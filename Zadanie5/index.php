<?php
require("../logged.php");
?>
<?xml version="1.0" encoding="utf-8"?>
<?xml-stylesheet type="text/xsl" href="faktura.xslt"?>
	<Faktura xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
		<Dane>
			<Sprzedawca>
				<Imie>Michał</Imie>
				<Nazwisko>Pamięta</Nazwisko>
				<NIP>123 45 67 890</NIP>
			</Sprzedawca>
			<Nabywca>
				<Imie>Michał</Imie>
				<Nazwisko>Kruk</Nazwisko>
				<NIP>098 76 54 321</NIP>
			</Nabywca>
		</Dane>
		<Towary>
			<Produkt>
				<Pozycja>1. </Pozycja>
				<Nazwa> Produkt 1 </Nazwa>
				<Ilosc> 1 </Ilosc>
				<Cena> 100 </Cena>
			</Produkt>
			<Produkt>
				<Pozycja>2. </Pozycja>
				<Nazwa> Produkt 2 </Nazwa>
				<Ilosc> 2 </Ilosc>
				<Cena> 150 </Cena>
			</Produkt>
			<Produkt>
				<Pozycja>3. </Pozycja>
				<Nazwa> Produkt 3 </Nazwa>
				<Ilosc> 3 </Ilosc>
				<Cena> 200 </Cena>
			</Produkt>
		</Towary>
	<Faktura>