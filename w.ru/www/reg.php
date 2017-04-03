<?
	include_once "db_connect.php";

	$query = "SELECT * FROM users ";
	$result = mysqli_query($connect, $query);
	
	while ($row = mysqli_fetch_assoc($result)) {
		//echo $row["login"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<link rel="stylesheet" type="text/css" href="style/reg.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="content">
		<div class="head">
			<font>Регистрация</font>
		</div>
		<div class="bodyContent">
			<form>
				<input type="text" name="login" class="loginpass" placeholder="Логин"><br>
				<input type="password" name="pass" class="loginpass" placeholder="Пароль"><br>
				<input type="password" name="passCopy" class="loginpass" placeholder="Повторить пароль"><br>
				<input type="email" name="email" class="loginpass" placeholder="E-mail"><br>
				<input type="submit" name="reg" class="sub" value="Отправить">
			</form>
		</div>
	</div>
</body>
</html>