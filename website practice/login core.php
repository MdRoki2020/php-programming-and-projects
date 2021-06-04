<?php

    require_once("connect.php");

    $UserEmail=$_REQUEST["email_addr"];
    $UserPassword=$_REQUEST["usr_pwd"];
	
	
	$matchQuery="SELECT * FROM my_users WHERE email_addr='$UserEmail' AND usr_pwd='$UserPassword'";
	$runMatchQuery= mysqli_query($connect,$matchQuery);
	
	
	$chakeCount= mysqli_num_rows($runMatchQuery);
	
	if($runMatchQuery==true){
		if($chakeCount===1){
		
		setcookie("currentUser",$email_addr,time()+(86400*7));
		header("location:home.php");
	}
	else{
		header("location:login.php?wrong");
	}
	}

?>