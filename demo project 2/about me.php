<?php
session_start();
require_once('config.php');

if(!isset($_COOKIE['currentUser'])){
    header("location:login.php");
}
if(isset($_COOKIE['currentUser'])){
    $crntUsr=$_COOKIE['currentUser'];
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

    <title>About Me</title>
    <style>
        body{
            background: #34495E;
            color:white;
        }
        .btnWrapper {
            width: 541px;
            text-align: center;
            margin: auto;
        }
        a {
            width: 88px;
            margin: auto;
        }

    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mb-5">About Me</h1>
    <?php
    $selectQuery="SELECT * FROM `demo_action_users` WHERE `email`='$crntUsr'";
    $runQuery=mysqli_query($connect,$selectQuery);
    $row=mysqli_fetch_assoc($runQuery);
    ?>
    <div class="tableWrapper m-auto">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Photo</th>
                        <td><img class="image" width="100px" src="user_image/<?php echo $row['photo']?>"/></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td><?php echo $row['id']?></td>
                    </tr>
                    <tr>
                        <th>Fname</th>
                        <td><?php echo $row['fname']?></td>
                    </tr>
                    <tr>
                        <th>Lname</th>
                        <td><?php echo $row['lname']?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['email']?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?php echo $row['password']?></td>
                    </tr>
                    <tr>
                        <th>Signup Date</th>
                        <td><?php echo $row['submit_time']?></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-3"><a class="btn btn-info btn" href="privacy.php?id=<?php echo base64_encode($row['id'])?>">Edit Me</a><br/><br/><br/><a class="btn btn-primary btn" href="profile.php">Profile</a></div>

        </div>

    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

