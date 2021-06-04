<?php

    require_once("data insert config.php");

    $user_name=$_REQUEST["user_name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
	
	$insertQuery="INSERT INTO my_users(user_name,email,password) VALUES ('$user_name','$email','$password')";
	
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true){
		echo "successfully insert";
	}else{
		echo "not inserted";
	}

?>