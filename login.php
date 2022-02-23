
<?php
require_once("connect.php");

if (isset($_POST['LogIn'])) {

	$name = mysqli_real_escape_string($connect,$_POST['username']);
	$password= mysqli_real_escape_string($connect,$_POST['password']);


	if($name !="" && $password != ""){

		$sql= "select count(*) as cntUser FROM login WHERE username='".$name."'
		and password='".$password."'";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($result);

		$count = $row['cntUser'];

		if ($count > 0) {

			$_SESSION['username'] = $name;
			header("Location: hpage.php");
			
		}
		else{
			echo '<script>alert("invalid credentials")</script>';
		}
	}
	# code...
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style type="text/css">
		.page{
			margin-top: 3%;
			margin-bottom: 10%;
			margin-right: 25%;
			margin-left: 33%;
			background-color: lightgrey;
			padding-bottom: 10%;
			padding-left: 5%;
			padding-top: 7%;
			border-color: black;
			position: fixed;
		}
		 
		input{
			padding-right: 110px;
			padding-top: 13px;
			margin-top: 13px;
			font-size: 20px;
			padding-left: 10px;
			margin-right: 20px;
			background-color: ;


		}
		button{
			margin-top: 18px;
			margin-right: 15px; 
			background-color: black;
			color: white;
			padding-right: 20px;
			padding-left: 20px;
			font-size: 15px;margin-left: 50px;
			
			padding-top: 10px;
			padding-bottom: 10px;
		}
		button:hover{
			cursor: pointer;
			font-size: 13px;
		}
		.li{
			margin-top: -115px;
			margin-left: -70px;
			background-color:transparent; ;
			padding-right: px;
			padding-top:10px;
			padding-bottom: 5px;
		}
		h1{
			font-size: 25px;
			color: white;
			text-align: center;
		}
		
		#name{
			margin-top: 40px;
		}
		#submit{
			cursor: pointer;
		}
		body{
			background-color: white;
		}
		img{
			width: 35px;
			margin-left: 30px;
		}
		

		@media only screen and (max-width:900px){
			body{
				background-color: ;
			}

		}
		h2{
			background-color: darkblue;
			text-align: center;
			color: white;
			font-size: 25px;
			margin-top: 60px;
		}
		h4{
			background-color: orange;
			margin-top: -22px;
			color: orange;
		}
		a{
			font-style: ;
			color: rgba(102,102,255);
			font-size: 18px;
			font-weight: bold;
			font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
			
		}
		a:hover{
			font-size: 15px;
		}
		.back{
			font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
			text-decoration: none;
			color: white;
			

		}
		
		

	</style>
</head>
<body>
	<h2>USER LOGIN</h2>
	<h4>.</h4>
	<div class="page">
		<div class="li">
		<h1></h1>
	</div>
	<form  method="POST">
	
	<input  type="text" id="name" class="inputname" required="required" name="username" placeholder="username"><br>


		
	
	<input type="password" required="required" class="inputpass" name="password" id="password" placeholder="Enterpassword" required="required"><br>
	<input type="checkbox" id="showp" onclick="myFunction()" name="showpass">ShowPassword<br>
	<input type="submit" id="submit" name="LogIn" value="Log In">
	
	<div>
		<p>OR <a href="std.php">Check Status</a>
	</div>
</form>
</div>

<script type="text/javascript">
	function myFunction(){
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		}
		else{
			x.type = "password";
		}
	}

</script>

</body>
</html>