<?php

    require_once("connect.php");

    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email_addr=$_REQUEST["email_addr"];
    $usr_pwd=$_REQUEST["usr_pwd"];
	
    $insertQuery="INSERT into my_users(fname,lname,email_addr,usr_pwd)VALUES('$fname','$lname','$email_addr','$usr_pwd')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true){
	    header("location:signup page.php?right");
	}

?>