<!DOCTYPE html>
<html>

    <head>
	
	    <title>my sql tutorial</title>
	
	</head>
	<body>
	
	    <?php
		
		    $host="localhost";
			$dbUser="freelancerroki";
			$dbPwd="AaBbCc2580!!@@";
			$dbName="freelancerrokitest";
			
			$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
			if($connect==false){
				echo "<font color='re>Error Established Database Connection</font>";
			}
			
			
			$myquery="SELECT fname,lname FROM my_users";
			$run_Query=mysqli_query($connect,$myquery);
			
			
			
			if($run_Query==true){
				while($mydata=mysqli_fetch_array($run_Query)){
				echo $mydata["lname"];
			}
			}
			else{
				echo mysqli_error($connect);
			}
		
		?>
	
	</body>
	
</html>