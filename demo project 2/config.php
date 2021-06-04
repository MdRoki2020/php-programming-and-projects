<?php
$host='localhost';
$dbUser='test_project_users';
$dbPassword='AaBbCc2580!!@@';
$dbName='demo_action';

$connect=mysqli_connect($host,$dbUser,$dbPassword,$dbName);

if($connect==false){
    echo "Error Database Connection";
}
?>
