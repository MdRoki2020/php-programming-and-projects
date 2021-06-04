<!DOCTYPE html>
<html>

    <head>
	
	    <title>redirect method</title>
	
	</head>
	<body>
	
	    <form method="post" action="redirect method.php">
		
		    <input type="text" name="username"/>
		    <input type="text" name="password"/>
		    <input type="submit" value="submit"/>
		
		</form>
		
		<?php
		
		    $userpas= $_REQUEST["password"];
			
			if($userpas==12345){
				echo header("location: https://web.facebook.com/profile.php?id=100011096582248");
			}
			else{
				echo "Error Password";
			}
		
		?>
	
	</body>

</html>