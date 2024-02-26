<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="reg.php" method="POST">
		<label for="name">Введите имя:</label><br>
		<input name="name" id="name" type="text" required><br><br>
		<label for="login">Введите логин:</label><br>
		<input name="login" id="login" type="text" required><br><br>
		<label for="pas">Введите пароль:</label><br>
		<input name="pas" id="pas" type="password" required><br><br>
		<input type="submit" value="Зарегистрироваться">
	</form>
</body>
</html>