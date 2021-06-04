<?php

    require_once("submit form connection.php");
	
	if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email_addr"]) && $_REQUEST["usr_pwd"]){
		
	$fname=$_REQUEST["fname"];
	$lname=$_REQUEST["lname"];
	$email_addr=$_REQUEST["email_addr"];
	$usr_pwd=$_REQUEST["usr_pwd"];
	
	
    $insertQuery= "INSERT INTO my_users(fname,lname,email_addr,usr_pwd) VALUES('$fname','$lname','$email_addr','$usr_pwd')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	
	if($runQuery==true){
		header("location:submit form index.php?action=true");
	}
	else{
		header("location:submit form index.php?action=false");
	}
	
	}


?>