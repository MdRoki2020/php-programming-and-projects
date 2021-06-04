<?php
session_start();
require_once('config.php');

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$encriptedPass=sha1(md5($password));

$selectQuery="SELECT * FROM demo_action_users WHERE email='$email' AND password='$encriptedPass'";
$runQuery=mysqli_query($connect,$selectQuery);

$chakeCount= mysqli_num_rows($runQuery);

if($runQuery==true){
if($chakeCount===1){
    setcookie("currentUser",$email,time()+(86400*7));
    header("location:profile.php");

}else{
    header('location:login.php?wrong');
}
}
?>