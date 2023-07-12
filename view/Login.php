<?php
include('../control/LoginValidation.php');


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/stylies.css">
<form action="" method="post">
<title>Login</title>

</head>

<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
			</div>
		</div>
		<hr>
	</header>

	<section>
		<div class="container">

			<div class="loginClass">
				<h1>Login to continue</h1> 
	
				<form action="" class="loginForm" method="POST">
						<br><label>User ID : </label><br><input type="text" class="userId" name="userId" 
						placeholder="Enter your user ID"><?php echo $validateUserid ?>
						<br><label>Password : </label><br><input type="password" name="password" placeholder="Enter your password"><?php echo $validatepass ?>
				<br><br>
				<input type="submit" class="btn submitButton" name="logIn" value="Login"><?php echo " " ?>	
				<br><?php echo $error; ?>	
				</form>
				<div class="loginFooter">
					<button class="btn forgotPass"><a href="forgotPass.php">ForgotPass</a></button>
					<button class="btn back"><a href="Homepage.php">HomePage</a></button>				
				</div>
			</div >
			<div class="loginContent">
				<div class="loginRow1">
					<h2>✔Dynamic Courses</h2>
					<p>All the courses are based on the demand of the companies</p>
				</div>
				<div class="loginRow2">
					<h2>✔Proper Judgement</h2>
					<p>All the assesment are well organised and strickly maintained</p>
				</div>
				<div class="loginRow3">
					<h2>✔Best Job Offers</h2>
					<p>Depending on the course the Job is Offered</p>
				</div>
			</div>
		</div>
	</section>



</body>

</html>	