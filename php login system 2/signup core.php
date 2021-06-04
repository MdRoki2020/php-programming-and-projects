<?php

    require_once("config.php");

    $fname=htmlentities($_REQUEST["fname"]);
    $lname=htmlentities($_REQUEST["lname"]);
    $email=htmlentities($_REQUEST["email"]);
    $password=htmlentities($_REQUEST["password"]);
    $encryptedPwd=md5(sha1($password));
    $authToken=md5(sha1($password.$email));

	
	$insertQuery="INSERT into my_users(fname,lname,email,password,auth)VALUES('$fname','$lname','$email','$encryptedPwd','$authToken')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true){
		header("location:signup page.php?right");
	}
    else{
        echo "data do not insert";
    }

?>