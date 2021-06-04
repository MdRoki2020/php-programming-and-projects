<?php
    $host="localhost";
	$dbUser="loginsystem";
	$dbPwd="AaBbCc2580!!@@";
	$dbName="login_system";
			
	$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
	if($connect==false){
	echo "<font color='red'>Error Established Database Connection</font>";
	}
?>