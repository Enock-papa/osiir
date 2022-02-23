<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$ID = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($connect, "UPDATE `nat` SET `status`='Declined' WHERE `ID`=$ID");

//redirecting to the display page (index.php in our case)
header("Location:status.php");
?>

