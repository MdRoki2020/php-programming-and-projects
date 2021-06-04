<?php

    $host="localhost";
	$dbUser="freelancerroki";
	$dbPwd="AaBbCc2580!!@@";
	$dbName="freelancerrokitest";
			
	$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);
			
	if($connect==false){
	echo "<font color='re>Error Established Database Connection</font>";
	}

?>