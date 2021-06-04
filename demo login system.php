<!Doctype html>
<html>

    <head>
	
	    <title>demo login system</title>
	
	</head>
	<body>
	
	    <form method="post" action="demo login system.php">
		
		    <input type="text" name="username"/>
		    <input type="text" name="password"/>
		    <input type="submit" value="submit"/>
		
		</form>
		
		<?php
		    echo "<h1>Database Info</h1>";
			echo "<hr>";
		    $dbUserEmail="mroki815@gmail.com";
			$dbPassword="AaBbCc2580!!@@";
		
		
		    echo "<h1>User Info</h1>";
			echo "<hr>";
		    $useremail=$_REQUEST["username"];
		    $userpassword=$_REQUEST["password"];
			
			
			echo "<h1>RESULT</h1>";
			echo "<hr>";
			if($dbPassword==$userpassword){
				echo "<font color='green'>You Are Logged In</font>";
			}
			else{
				echo "<font color='Red'>Username Or Password Incorrect</font>";
			}
			
		
		?>
	
	</body>

</html>