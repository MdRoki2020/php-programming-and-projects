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

    <title>all students</title>
    <style>
        body{
            background: #34495E;
            color:white;
        }
        a.btn.btn-info {
            padding: 5px 22px;
            margin-bottom: 8px;
        }
        h1.title {
            text-align: center;
            font-family: cursive;
        }
        a.signup {
            font-family: cursive;
            float: right;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<div class="container">
    <h1 class="title">Resister Students</h1>

    <div class="tableWrapper">
        <a class="signup" href="signup.php">SIGNUP</a>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>

            <?php
            $selectQuery="SELECT * FROM `demo_action_users`";
            $runQuery=mysqli_query($connect,$selectQuery);

            while($row=mysqli_fetch_assoc($runQuery)){?>

                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo  $row['lname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['password']?></td>
                    <td><img width="100px" src="user_image/<?php echo $row['photo']?>"/></td>
                    <td> <a class="btn btn-info" href="#">Edit</a><br/><a class="btn btn-danger" href="#">Delete</a></td>
                </tr>

                <?php
            }
            ?>

            </tbody>
        </table>
    </div>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
