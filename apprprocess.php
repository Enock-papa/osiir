<?php
//including the database connection file
require_once ('connect.php');

//getting id of the data from url
$id = $_GET['ID'];
//echo $id;
$regno = $_POST['regno'];
$reason = $_POST['reason'];



//echo "$reason";


$sql = "INSERT INTO nat(`ID`, `regno`, `reason`, `status`) 

VALUES ('$ID','$regno','$reason','Pending')";

$result = mysqli_query($connect, $sql);

//redirecting to the display page (index.php in our case)

?>

