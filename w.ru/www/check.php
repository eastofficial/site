<?
	include_once "db_connect.php";

    session_start();

	// Проверка на пустоту
	if ($_POST["login"] == "") {
		echo "emptyLog";
		return false;
	}

	if ($_POST["password"] == "") {
		echo "emptyPass";
		return false;
	}
	// ---------------------------------------

	// Проверка на длинну
	if (strlen($_POST["login"]) < 6) {
		echo "loginSmall";
		return false;
	}

	if (strlen($_POST["password"]) < 6) {
		echo "passSmall";
		return false;
	}
	// ---------------------------------------

	$query = "SELECT login, status FROM users WHERE login = '".$_POST["login"]."' and password = '".$_POST["password"]."'";
	$result = mysqli_query($connect, $query);
	
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row["login"] == "") {
			echo "no1337";
			return false;
		} else {
			echo $row["login"]." ".$row["status"];
		}
	}

	// $query = "INSERT INTO users VALUES (
	// 										'".$_POST["login"]."',
	// 										'".$_POST["password"]."',
	// 										'""',
	// 									)";
	// $result = mysqli_query($connect, $query);
?>