<?php
     
	require_once("config.php");

	$UserEmail=$_REQUEST["userEmail"];
	$UserPassword=$_REQUEST["userPassword"];
	
	
	$matchQuery="SELECT * FROM my_users WHERE email_addr='$UserEmail' AND usr_pwd='$UserPassword'";
	
	$runMatchQuery= mysqli_query($connect,$matchQuery);
	
	$chakeCount= mysqli_num_rows($runMatchQuery);
	
	if($runMatchQuery==true){
		if($chakeCount===1){
		
		setcookie("currentUser",$UserEmail,time()+(86400*7));
		header("location:profile page.php");
	}
	else{
		header("location:login page.php?wrong");
	}
	}

?>