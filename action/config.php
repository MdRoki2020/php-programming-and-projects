<?php

$host="localhost";
$dbUser="action_user";
$dbPwd="AaBbCc2580!!@@";
$dbName="demo_action";

$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);

if($connect==false){
    echo "<font color='red'>Error Established Database Connection</font>";
}

?>
