<?php
require_once("config.php");
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
            background: url(image/index_background.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            color:white;
        }
        .container.tableWrapper h2 {
            text-align: center;
            margin-top: 135px;
        }
        a.resester {
            letter-spacing: 3px;
            text-decoration: none;
            float: right;
        }
        a.btn.btn-info {
            padding: 7px 21px;
        }
    </style>
    <title>index</title>
</head>
<body>
<div class="container tableWrapper">
    <h2>All Resister Student</h2>

    <table class="table table-bordered tableStyle">
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
        $runQuery=mysqli_query($connect,"SELECT * FROM demo_action_users");
        while ($row= mysqli_fetch_assoc($runQuery)){ ?>

        <tr>
            <th><?php echo $row['id']?></th>
            <th><?php echo $row['fname']?></th>
            <th><?php echo $row['lname']?></th>
            <th><?php echo $row['email']?></th>
            <th><?php echo $row['password']?></th>
            <th><img class="img-fluid " src="user_image/<?php echo $row['photo']?>" alt="profile photo" width="100px"/></th>
            <th><a href="update.php?id=<?php echo base64_encode($row['id']) ?>" class="btn btn-info" >Edit</a> <br/><br/> <a href="delete core.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-danger">Delete</a></th>
        </tr>

        </tbody>
        <?php
        }
        ?>
    </table>
    <a class="resester" href="insert.php">Resister</a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>