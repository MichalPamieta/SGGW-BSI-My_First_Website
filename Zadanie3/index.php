<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/style.css">
		<title>BSI - Zadanie 3</title>
	</head>
	<body>
		<h3><a href="../index.php">Wróć do strony głównej</a></h3>
		<table>
			<tr>
				<td colspan=4>
					<div>KALKULATOR</div>
				</td>
			</tr>
			<tr>
				<td colspan=4>
					<input type="text" readonly id="result" value=""></output>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" value="/" onclick="next(value)">/</button>
				</td>
				<td>
					<button type="button" value="*" onclick="next(value)">*</button>
				</td>
				<td>
					<button type="button" value="-" onclick="next(value)">-</button>
				</td>
				<td>
					<button type="button" value="+" onclick="next(value)">+</button>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" value="7" onclick="next(value)">7</button>
				</td>
				<td>
					<button type="button" value="8" onclick="next(value)">8</button>
				</td>
				<td>
					<button type="button" value="9" onclick="next(value)">9</button>
				</td>
				<td>
					<button type="button" value="(" onclick="next(value)">(</button>
				</td>
			</tr>			
			<tr>
				<td>
					<button type="button" value="4" onclick="next(value)">4</button>
				</td>
				<td>
					<button type="button" value="5" onclick="next(value)">5</button>
				</td>
				<td>
					<button type="button" value="6" onclick="next(value)">6</button>
				</td>
				<td>
					<button type="button" value=")" onclick="next(value)">)</button>
				</td>
			</tr>
						<tr>
				<td>
					<button type="button" value="1" onclick="next(value)">1</button>
				</td>
				<td>
					<button type="button" value="2" onclick="next(value)">2</button>
				</td>
				<td>
					<button type="button" value="3" onclick="next(value)">3</button>
				</td>
				<td>
					<button type="button" value="<=" onclick="back()"><=</button>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" value="C" onclick="clr()">C</button>
				</td>
				<td>
					<button type="button" value="0" onclick="next(value)">0</button>
				</td>
				<td>
					<button type="button" value="." onclick="next(value)">.</button>
				</td>
				<td>
					<button type="button" value="=" onclick="calculate()">=</button>
				</td>
			</tr>
		</table>
	</body>
	<script src="scripts/script.js"></script>
</html>