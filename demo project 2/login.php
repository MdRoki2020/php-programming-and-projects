<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login</title>
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
        .popUpMsz {
            text-align: center;
            color: red;
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
        <h1 class="text-center">Login</h1>
        <div class="popUpMsz">
            <?php
            if(isset($_REQUEST['wrong'])){
                echo "Wrong Email Or Password";
            }
            ?>
        </div>
        <form action="login core.php" method="post" enctype="multipart/form-data">

            <div class="inputWrapper email">
                <label>Email:</label><br/>
                <input type="email" placeholder="Enter Email" name="email" required/>
            </div>
            <div class="inputWrapper password">
                <label>Password:</label><br/>
                <input type="password" placeholder="Enter Password" name="password" required/>
            </div>
            <div class="inputWrapper submit"><br/>
                <input class="btn btn-primary" value="Login" type="submit" name="submit"/>
            </div>
            <a href="signup.php" class="resister">Signup</a>
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
