<?php

    require_once("config.php");

    $fname=htmlentities($_REQUEST["fname"]);
    $lname=htmlentities($_REQUEST["lname"]);
    $email_addr=htmlentities($_REQUEST["email_addr"]);
    $usr_pwd=htmlentities($_REQUEST["usr_pwd"]);
	
	$insertQuery="INSERT into my_users(fname,lname,email_addr,usr_pwd)VALUES('$fname','$lname','$email_addr','$usr_pwd')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true){
		header("location:signup form.php?right");
	}

?>