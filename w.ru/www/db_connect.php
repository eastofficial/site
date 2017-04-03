<?
	$login = "u560963320_admin";
	$password = "rus1510";
	$host = "localhost";
	$dbName = "u560963320_root";

	$connect = mysqli_connect($host, $login, $password) or die("ERROR connect!");
	$db = mysqli_select_db($connect, $dbName);
?>