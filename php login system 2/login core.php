<?php
     
	require_once("config.php");

	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];

    $createAuth=md5(sha1($password.$email));
	
	
	$matchQuery="SELECT * FROM my_users WHERE auth='$createAuth'";
	
	$runMatchQuery= mysqli_query($connect,$matchQuery);
	
	$chakeCount= mysqli_num_rows($runMatchQuery);
	
	if($runMatchQuery==true){
		if($chakeCount===1){
		
		setcookie("currentUser",$createAuth,time()+(86400*7));
		header("location:profile page.php");
	}
	else{
		header("location:login page.php?wrong");
	}
	}

?>