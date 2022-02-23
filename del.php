
<?php


include_once 'connecty.php';
$sql = "DELETE FROM personal WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
	 header("location: view.php");
} else {
    echo "Error encountered while deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);


?>