<?php
require_once("config.php");

if(isset($_REQUEST['id'])){
    $id=base64_decode($_REQUEST['id']);

    $deleteQuery=mysqli_query($connect,"DELETE FROM `demo_action_users` WHERE `id`=$id");

    if($deleteQuery==true){
        header("location:index.php");
    }
}

?>
