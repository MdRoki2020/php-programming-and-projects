<?php
session_start();
require_once('config.php');
if(!isset($_COOKIE['currentUser'])){
    header("location:login.php");
}
if(isset($_COOKIE['currentUser'])){
    $crntUsr=$_COOKIE['currentUser'];
}
if(isset($_REQUEST['id'])){
     $id=$_REQUEST['id'];
     $decId=base64_decode($id);

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

    <title>edit</title>
    <style>
        body{
            background: #34495E;
            color:white;
        }
        .inputWrapper {
            margin-bottom: 11px;
        }
        input {
            background: #ddd;
            border: none;
            border-radius: 5px;
        }
        .inputBoxWrapper {
            width: 186px;
        }
        .photo input {
            width: 100%;
        }
        .popUpMsz {
            text-align: center;
            color: green;
            font-style: oblique;
            margin-top: 20px;
        }
        a.resister {
            font-size: 13px;
            font-family: cursive;
            text-align:center;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="inputBoxWrapper">
        <?php
        $selectQuery="SELECT * FROM `demo_action_users` WHERE `email`='$crntUsr'";
        $runQuery=mysqli_query($connect,$selectQuery);
        $row=mysqli_fetch_assoc($runQuery);
        ?>
        <h1 class="text-center">Edit Me</h1>

        <form action="privacy core.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row['id']?>"  name="id" required/>
            <div class="inputWrapper fname">
                <label>First Name:</label><br/>
                <input type="text" value="<?php echo $row['fname']?>"  name="fname" required/>
            </div>
            <div class="inputWrapper lname">
                <label>Last Name:</label><br/>
                <input type="text" value="<?php echo $row['lname']?>"  name="lname" required/>
            </div>
            <div class="inputWrapper email">
                <label>Email:</label><br/>
                <input type="email" value="<?php echo $row['email']?>"  name="email" required/>
            </div>
            <div class="inputWrapper photo">
                <label>Photo:</label><br/>
                <input type="file" name="photo"/><br/>
            </div>
            <div class="inputWrapper submit"><br/>
                <input class="btn btn-primary" value="Save Changes" type="submit" name="submit"/>
            </div>
        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
