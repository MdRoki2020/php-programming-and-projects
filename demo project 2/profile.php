<?php
session_start();
require_once('config.php');
if(!isset($_COOKIE['currentUser'])){
    header("location:login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>profile</title>
    <style>
        body{
            background: #34495E;
            color:white;
        }
        .proPhoto {
            width: 110px;
            margin: auto;
            margin-top: 30px;
        }
        .btn2 {
            padding: 6px 22px;
        }
        .btnWrapper {
            overflow: hidden;
            width: 305px;
            text-align: center;
            margin: auto;
            margin-top: 30px;
        }

    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">My Profile</h1>
    <?php
    if(isset($_COOKIE['currentUser'])){
       $crntUsr=$_COOKIE['currentUser'];
    }

    $matchQuery="SELECT * FROM `demo_action_users` WHERE `email`='$crntUsr'";
    $runQuery=mysqli_query($connect,$matchQuery);
    $row=mysqli_fetch_assoc($runQuery);

    ?>
    <div class="proPhoto">
        <img class="img-fluid" src="user_image/<?php echo $row['photo']?>"/>
    </div>

    <div class="btnWrapper">
        <a href="about me.php" class="btn btn-primary text-white btn1">About Me</a> <a href="privacy.php" class="btn btn-primary text-white btn2">privacy</a> <a href="logout.php" class="btn btn-primary text-white btn2">Logout</a>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
