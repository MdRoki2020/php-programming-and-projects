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
        input[type="file"] {
            background: pink;
            width: 100%;
        }
    </style>
    <title>signup form</title>
</head>
<body>
<div class="signup_box_wrapper container">
    <h2>Signup</h2>
    <div class="popUpMsz">
        <?php
        if(isset($_REQUEST['right'])){
            echo "Data Insert Successfully";
        }
        ?>
    </div>


    <form action="insert core.php" method="post" enctype="multipart/form-data">
        <span>First Name: </span><br/>
        <input type="text" placeholder="Please Enter First Name" name="fname" required/><br/>
        <span>Last Name: </span><br/>
        <input type="text" placeholder="Please Enter Last Name" name="lname" required/><br/>
        <span>Email: </span><br/>
        <input type="email" placeholder="Please Enter Email Name" name="email" required/><br/>
        <span>Password: </span><br/>
        <input type="password" placeholder="Please Enter password" name="password" required/><br/>
        <span>Photo: </span><br/>
        <input type="file" name="photo" required/><br/>
        <input type="submit" class="submit_btn btn btn-primary" value="Data Insert"/>
    </form>
    <a class="resesterStudent" href="index.php">All Resister Students</a>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>