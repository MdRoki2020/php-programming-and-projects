<?php

    $host="localhost";
	$dbUser="my_users";
	$dbPwd="AaBbCc2580!!@@";
	$dbName="database_test";
			
	$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
	if($connect==false){
	echo "<font color='red'>Error Established Database Connection</font>";
	}

?>