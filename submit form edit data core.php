<?php

    require_once("submit form connection.php");
	
	if(isset($_REQUEST["editButton"])){
		$fname=$_REQUEST["fname"];
		$lname=$_REQUEST["lname"];
		$email_addr=$_REQUEST["email_addr"];
		$usr_pwd=$_REQUEST["usr_pwd"];
		$editingID=$_REQUEST["editingID"];
		
		$upquery=" UPDATE my_users SET fname='$fname',lname='$lname',email_addr='$email_addr',usr_pwd='$usr_pwd' WHERE id=$editingID ";
		
		$runquery=mysqli_query($connect,$upquery);
		
		if($runquery==true){
			header("location:submit form index.php?edited");
		}
		
	}
	

?>