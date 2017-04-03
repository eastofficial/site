<?
	include_once "db_connect.php";

    $login = "";
    $pass = "";

    if ($_POST["enter"]) {
        
    $login = $_POST["login"];
    $pass = $_POST["pass"];
     
    $query = "SELECT * FROM users WHERE login = '".$login."' and password = '".$pass."'";
        $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["login"] == "") {
            return false;
        } else {
            setcookie("login", $row["login"], time()+2600);
            setcookie("status", $row["status"], time()+2600);
            header("Location: admin.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<link rel="stylesheet" type="text/css" href="style/enter.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="content">
		<div class="head">
			<font>Авторизация</font>
		</div>
		<div class="bodyContent">
			<form name="enter" action="enter.php" method="post">
				<input type="text" id="login" name="login" class="loginpass" placeholder="Логин">
				<br>
				<input type="password" id="pass" name="pass" class="loginpass" placeholder="Пароль"><br>
				<font>Забыли пароль? <a href="#">Восстановить!</a></font><br>
				<input type="submit" name="enter" class="enter" value="Войти">
			</form>
		</div>
	</div>
</body>
</html>