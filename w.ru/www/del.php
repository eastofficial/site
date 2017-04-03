<?
include_once "db_connect.php";

$id = $_GET["id"];

$query = "DELETE FROM blog WHERE id = '".$id."'";
mysqli_query($connect, $query);
header("Location: admin3.php");
?>