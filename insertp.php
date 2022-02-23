<?php 

require_once('connecty.php');

if (isset($_POST['submit'])) {
	$regno=$_POST['regno'];
	$differ=$_POST['differ'];
	$code=$_POST['code'];
	$title=$_POST['title'];
	$reason=$_POST['reason'];
	

	$insert= "INSERT INTO nat(regno,differ,code,title,reason)
	VALUES('$regno','$differ','$code','$title','$reason')";


	if (mysqli_query($connect,$insert)) {

		echo '<script>';

		 echo 'alert("Details entered succesfully");';
		 echo 'window.location.href="ho.php"';


		echo '</script>';

		
		# code...
	}
	else{

		echo '<script>';
		echo 'alert("Failed. The Registration number already exist");';
		echo 'window.location.href="non.php"';

		echo '</script>';


	}

	# code...
}
 ?>