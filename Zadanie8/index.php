<?php
require("../logged.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="../jquery.js"></script>
		<script src="../bootstrap-5.0.0-dist/js/bootstrap.min.js"></script>
		<script src="scripts/script.js"></script>
		<title>BSI - Zadanie 8</title>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".tglcalc").click(function(){
					$(".calc").animate({
						width: 'toggle'
					});
				});
			});
		</script>
	</head>
	<body>
		<div><h3><a href="../index.php">Wróć do strony głównej</a></h3></div>
		<div class="container position-absolute start-0">
			<div class="row tglcalc">
			<div class="col-9 d-flex justify-content-center" style="transform: rotate(90deg); transform-origin: bottom left;">
				<button type="button" class="btn btn-outline-dark btn-lg" style="width: 100%;"><div>KALKULATOR</div></button>
			</div>
			</div>
		<div class="row calc">
		<div class="col-4"></div>
		<div class="col-8">
		<!-- tabela mogłaby być przerobiona na divy z klasą row + col, ale wykorzystuję kalkulator z poprzedniego zadania -->
		<table style="width: 100%;">
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
					<button type="button" value="/" onclick="next(value)" class="btn btn-outline-primary">/</button>
				</td>
				<td>
					<button type="button" value="*" onclick="next(value)" class="btn btn-outline-primary">*</button>
				</td>
				<td>
					<button type="button" value="-" onclick="next(value)" class="btn btn-outline-primary">-</button>
				</td>
				<td>
					<button type="button" value="+" onclick="next(value)" class="btn btn-outline-primary">+</button>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" value="7" onclick="next(value)" class="btn btn-outline-warning">7</button>
				</td>
				<td>
					<button type="button" value="8" onclick="next(value)" class="btn btn-outline-warning">8</button>
				</td>
				<td>
					<button type="button" value="9" onclick="next(value)" class="btn btn-outline-warning">9</button>
				</td>
				<td>
					<button type="button" value="(" onclick="next(value)" class="btn btn-outline-primary">(</button>
				</td>
			</tr>			
			<tr>
				<td>
					<button type="button" value="4" onclick="next(value)" class="btn btn-outline-warning">4</button>
				</td>
				<td>
					<button type="button" value="5" onclick="next(value)" class="btn btn-outline-warning">5</button>
				</td>
				<td>
					<button type="button" value="6" onclick="next(value)" class="btn btn-outline-warning">6</button>
				</td>
				<td>
					<button type="button" value=")" onclick="next(value)" class="btn btn-outline-primary">)</button>
				</td>
			</tr>
						<tr>
				<td>
					<button type="button" value="1" onclick="next(value)" class="btn btn-outline-warning">1</button>
				</td>
				<td>
					<button type="button" value="2" onclick="next(value)" class="btn btn-outline-warning">2</button>
				</td>
				<td>
					<button type="button" value="3" onclick="next(value)" class="btn btn-outline-warning">3</button>
				</td>
				<td>
					<button type="button" value="<=" onclick="back()" class="btn btn-outline-danger"><=</button>
				</td>
			</tr>
			<tr>
				<td>
					<button type="button" value="C" onclick="clr()" class="btn btn-outline-danger">C</button>
				</td>
				<td>
					<button type="button" value="0" onclick="next(value)" class="btn btn-outline-warning">0</button>
				</td>
				<td>
					<button type="button" value="." onclick="next(value)" class="btn btn-outline-primary">.</button>
				</td>
				<td>
					<button type="button" value="=" onclick="calculate()" class="btn btn-outline-success">=</button>
				</td>
			</tr>
		</table>
		</div>
		</div>
		</div>
	</body>
</html>