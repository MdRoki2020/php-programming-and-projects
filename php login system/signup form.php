<!DOCTYPE html>
<html>

    <head>
	
	    <title>signup form</title>
	    <link rel="stylesheet" href="signup style.css">
	</head>
	<body>
	
	
	
	    <div class="signupform">
		<h2>Signup Form</h2>
		
		<?php
	
	    if(isset($_REQUEST["right"])){
			echo "<font color='#ffb400'>Signup Successful</font>";
		}
	
	    ?>
		
		    <form action="signup core.php" method="post">
		
		    <input type="text" name="fname" placeholder="Enter First Name"/>
			<br/>
			<br/>
		    <input type="text" name="lname" placeholder="Enter Last Name"/>
			<br/>
			<br/>
		    <input type="email" name="email_addr" placeholder="Enter Email"/>
			<br/>
			<br/>
		    <input type="password" name="usr_pwd" placeholder="Enter Password"/>
			<br/>
			<br/>
		    <input type="submit" class="signupbtn" value="signup"/>
		
		    </form>
		
		</div>
	
	</body>

</html>