<?

include_once "db_connect.php";

$id = $_GET["id"];
$nameK = $_GET["nameK"];
$nameP = $_GET["nameP"];
$desK = $_GET["desK"];
$desP = $_GET["desP"];

$query = "UPDATE blog SET
            nameK = '".$nameK."',
            nameP = '".$nameP."',
            descriptionK = '".$desK."',
            descriptionP = '".$desP."'
        WHERE id = '".$id."'";

mysqli_query($connect, $query);
header("Location: admin2.php");
?>