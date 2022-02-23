<!DOCTYPE html>
<html>
<head>
	<title>https:/students details</title>
	<style type="text/css">
		h1{
			text-align: center;
			background-color: darkblue;
			color: white;
			padding-top: px;
				font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;

		}
		.name{
			margin-left: 300px;
			margin-top: 60px;
		}
		.addi{
			margin-left: 60%;
			margin-top: -220px;
		}
		input{
			padding-right: 110px;
			padding-top: 10px;
			font-size: 20px;
			font-family: 	font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;;
			background-color: ;

		}
		label{
			color: black;
			font-size: px;
			
				font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;

		}
		body{
			background-color: ;
		}
		#sub{
			margin-top: 30px;
			
		}
		#sub:hover{
			cursor: pointer;
		}
		h4{
			background-color: orange;
			margin-top: -21.4px;
		}
		h5{
		background-color: darkblue;
		font-size: 20px;
		font-style: italic;
		color: white;
		margin-top: 100px;

	}
	h6{
		background-color: orange;
		margin-top:  -33.5px;
	}
	select{
		font-size: 20px;
		background-color: darkgrey;
		color: indigo;
		margin-top: 8px;
	}

	</style>
</head>

<body>
	
	<h1>SECTION A: PERSONAL DETAILS.</h1>
	<h4>.</h4>
		<form action="insert.php" method="POST">
			<div class="name">
			<label for="surname">SURNAME</label><br>
			<input type="text" required="required" name="Surname"><br>
			<label for="names">OTHER NAMES</label><br>
			<input type="text" required="required" name="Name"><br>
			<label for="regno">REGNO</label><br>
			<input type="text" required="required" name="regno"><br>
			<label for="idno">ID NO</label><br>
			<input type="number" maxlength="10" minlength="10" required="required" name="idno"><br>
		</div>
		<div class="addi">
			<label for="address">POSTAL ADDRESS</label><br>
			<input type="text" required="required" name="address"><br>
			<label for="telno">TELNO</label><br>
			<input type="number" required name="telno"><br>
			<label for="email">EMAIL</label><br>
			<input type="text" required name="email"><br>
			GENDER
			<select name="Gender">
			
			<option value="Male">Male</option>
			<option value="Female">Female</option>
				<option value="Other">Other</option>
			
		</select><br>
		<input type="submit" id="sub" name="submit" value="Submit">
	</div>

		</form>
		<h5><marquee>Rongo University a Goldmine of Knowledge.</marquee></h5>
	<h6>.</h6>

</body>
</html>