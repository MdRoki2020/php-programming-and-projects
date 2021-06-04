<?php
require_once("config.php");


$id=$_REQUEST['id'];
$fname= $_REQUEST['fname'];
$lname= $_REQUEST['lname'];
$email= $_REQUEST['email'];
$photo= $_REQUEST['photo'];

$photo=explode(".",$_FILES["photo"]["name"]);
$photo=end($photo);
$photo_name=rand().".".$photo;

$UpdateQuery="UPDATE `demo_action_users` SET `fname`='$fname',`lname`='$lname',`email`='$email',`photo`='$photo_name' WHERE `id`= '$id'";
$runQuery=mysqli_query($connect,$UpdateQuery);

if($runQuery==true){
    move_uploaded_file($_FILES['photo']['tmp_name'],'user_image/'.$photo_name);
}

if($runQuery==true){
    header("location: about me.php");
}

?>
