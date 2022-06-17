<!DOCTYPE html>
<html>
	<head>
		<title>BSI - Logowanie</title>
		<meta charset="UTF-8"/>
	</head>
	<style type="text/css">
		body {
			text-align: justify;
			font-size: 25px;
			background-color: rgb(24,24,24);
			color: rgb(255,128,0);
			display: block;
			text-align: center;
		}
        table {
            margin-left: auto;
            margin-right: auto;
        }
        td {
            padding: 5px;
        }
	</style>
	<body>
		<form action="index.php" method="post">
            <table>
				<tr>
					<th colspan="2"><h2>Logowanie</h2></th>
				</tr>
				<tr>
					<td>
						<label for="userName">Nazwa użytkownika: </label>
                    </td>
                    <td>
						<input type="text" name="userName" id="userName" value="asd" placeholder="asd" autofocus required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="userPassword">Hasło: </label>
					</td>
                    <td>
                        <input type="password" name="userPassword" id="userPassword" value="asd" placeholer="asd" required>
					</td>
				</tr>
				<tr>
                    <td colspan="2">
                        <input type="submit" name="sendNameAndPassword" value="ZALOGUJ">
					</td>
				</tr>
			<p>Dane do logowania:<br>
			Login: asd<br>
			Hasło: asd</p>
		</form>
	</body>
</html>