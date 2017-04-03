<?
include_once "db_connect.php";

$page = $_GET["page"];

if (isset($_COOKIE["login"])) {

    $name = $_GET["name"];
    $text = $_GET["text"];
    $id = $_GET["id"];
    

    $query = "SELECT COUNT(id) FROM comments";
    $counter = mysqli_query($connect, $query);
    $counter = mysqli_fetch_array($counter);
    $now = $counter[0] + 1;

    $query = "INSERT INTO comments VALUES ('".$now."','".$id."','".$name."','".$text."')";
    mysqli_query($connect, $query);

    header("Location: ".$page."");
} else {
    header("Location: ".$page."");
}
?>