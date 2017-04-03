<?

include_once "db_connect.php";

$nameK = $_GET["nameK"];
$nameP = $_GET["nameP"];
$desK = $_GET["desK"];
$desP = $_GET["desP"];

$query = "SELECT COUNT(id) FROM blog";
$counter = mysqli_query($connect, $query);
$counter = mysqli_fetch_array($counter);
$now = $counter[0] + 1;

$d = getdate();
$time = "'".$d["mday"].".".$d["mon"].".".$d["year"]." "
    .$d["hours"].":".$d["minutes"].":".$d["seconds"]."'";
//$time = 5;

$query = "INSERT INTO blog VALUES (".$now.", '".$nameK."','".$nameP."',
                                    '".$desK."', '".$desP."', ".$time.")";
mysqli_query($connect, $query);
header("Location: admin.php");
?>