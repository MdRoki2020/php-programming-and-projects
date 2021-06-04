<?php
require_once("config.php");

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$authPass=md5(sha1($password));
$photo=$_REQUEST['photo'];

$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=rand().".".$photo;

$insertQuery="INSERT INTO `demo_action_users`(`fname`, `lname`, `email`, `password`,`photo`) VALUES ('$fname','$lname','$email','$authPass','$photo_name')";
$runQuery=mysqli_query($connect,$insertQuery);

if($runQuery){
    move_uploaded_file($_FILES['photo']['tmp_name'],'user_image/'.$photo_name);
}

if($runQuery==true){
    header("location:insert.php?right");
}


?>