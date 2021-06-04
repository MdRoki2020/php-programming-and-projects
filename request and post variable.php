<!DOCTYPE html>
<html>

    <head>
	
	    <title>Value Return</title>
	
	</head>
	<body>
	
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	
	    user name: <input type="text" name="username" placeholder="please enter username"/>
	    <input type="submit" value="submit"/>
	
	</form>
	
	<?php
	
	    if($_SERVER["REQUEST_METHOD"]=="POST"){
			$name=$_REQUEST['username'];
			
			if(empty($name)){
				echo "<span style='color:red'> username must be fillup </span>";
			}
			else{
				echo "<span style='color:green'> you have submitted ".$name. "</span>";
			}
		}
	
	?>
	

	</body>

</html>