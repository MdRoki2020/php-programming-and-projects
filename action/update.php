<?php
require_once ("config.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background: url(image/signup_background.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            color:white;
        }
        .signup_box_wrapper.container input {
            padding: 3px 37px;
            margin-bottom: 28px;
            text-align: center;
            border: 2px solid #ffb400;
        }
        .signup_box_wrapper.container {
            width: 288px;
        }
        .signup_box_wrapper.container h2 {
            text-align: center;
            margin-top: 100px;
            font-family: fangsong;
        }
        input.submit_btn {
            width: 100%;
        }
        .popUpMsz {
            font-weight: 700;
            text-align: center;
            color: deepskyblue;
        }
        a.resesterStudent {
            float: right;
            text-decoration: none;
            color: maroon;
        }
        a.resesterStudent:hover {
            text-decoration: none;
        }
        input.photo {
            width: 100%;
            background: white;
        }
    </style>
    <title>update form</title>
</head>
<body>
<div class="signup_box_wrapper container">
    <h2>Update Info</h2>
    <?php
    if(isset($_REQUEST['id'])){
        $id=base64_decode($_REQUEST['id']);
    }
    $selectQuery=mysqli_query($connect,"SELECT * FROM `demo_action_users` WHERE `id`=$id");
    while($row=mysqli_fetch_assoc($selectQuery)){?>

        <form action="update core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row['id']?>" name="id"/><br/>
            <span>First Name: </span><br/>
            <input type="text" value="<?php echo $row['fname']?>" name="fname"/><br/>
            <span>Last Name: </span><br/>
            <input type="text" value="<?php echo $row['lname']?>" name="lname"/><br/>
            <span>Email: </span><br/>
            <input type="email" value="<?php echo $row['email']?>" name="email"/><br/>
            <input type="file" name="photo" class="photo"/>
            <input type="submit" class="submit_btn btn btn-primary" value="Update Info" name="update"/>
        </form>

    <?php
    }


    ?>

    <a class="resesterStudent" href="index.php">Register Students</a>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


















<!Doctype html>
<html>
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>insert data</title>

  </head>
<body>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
