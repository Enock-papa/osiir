<?php
require_once('connectys.php');

if (isset($_POST['submit'])) {
$regno=$_POST['regno'];
$school=$_POST['school'];
$dept=$_POST['dept'];
$prog=$_POST['prog'];
$yos=$_POST['yos'];
$ayear=$_POST['ayear'];
$sem=$_POST['sem'];

$insert="INSERT INTO deferment(regno,school,dept,prog,yos,ayear,sem)

VALUES('$regno','$school','$dept','$prog','$yos','$ayear','$sem')";
	
	if (mysqli_query($connect,$insert)) {

		echo '<script>';
		echo 'window.alert("Details inserted succesfully");';
		echo 'window.location.href="non.php"';


		echo '</script>';
		# code...
	}
	else{
		echo "failed to insert data";
	}
}

  ?>