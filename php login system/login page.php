<?php

    require_once("config.php");

    if(isset($_COOKIE["currentUser"])){
		header("location:profile page.php");
	}

?>

<!DOCTYPE html>
<html>

    <head>
	
	    <title>index page</title>
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>
	
	    <div class="loginBox">
		    <h2>Login Website</h2>
			
			<?php
			
			if(isset($_REQUEST["wrong"])){
				echo "<font color='red'>Invalid Email Or Password</font>";
			}
			
			?>
			
			<form action="login core.php" method="post">
			
		    <input type="email" name="userEmail" placeholder="Please Enter Email"/>
			<br/>
			<br/>
		    <input type="password" name="userPassword" placeholder="Please Enter Password"/>
			<br/>
			<br/>
		    <input class="loginButton" type="submit" name="submitBtn" value="LOGIN"/>
			
			</form>
			
		
		</div>
	
	</body>

</html>