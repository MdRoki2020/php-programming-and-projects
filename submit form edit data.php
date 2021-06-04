<!DOCTYPE html>
<html>

    <head>
	
	    <title>submit form index</title>
	
	</head>
	<body>
	
	<?php
	
	    require_once("submit form connection.php");
		
		if(isset($_REQUEST["edit_id"])){
			$editID=$_REQUEST["edit_id"];
		

		$selectInfo="SELECT * FROM my_users WHERE id=$editID";
		$runInfo=mysqli_query($connect,$selectInfo);
		
		while($getData= mysqli_fetch_array($runInfo)){
			?>
			
			<form method="post" action="submit form edit data core.php">
		
		    <input type="text" name="fname" value="<?php echo $getData["fname"];?>" placeholder="Enter First Name"/>
	        <input type="text" name="lname" value="<?php echo $getData["lname"];?>" placeholder="Enter Last Name"/>
	        <input type="email" name="email_addr" value="<?php echo $getData["email_addr"];?>" placeholder="Enter Email"/>
	        <input type="password" name="usr_pwd" value="<?php echo $getData["usr_pwd"];?>" placeholder="Enter Password"/>
			<input type="hidden" name="editingID" value="<?php echo $editID; ?>"/>
	        <input type="submit" name="editButton" value="Update Data"/>
		
		    </form>
			
			<?php
		 }
		 }
		 		
	
	?>
	
	</body>

</html>