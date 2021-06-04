<!DOCTYPE html>
<html>
    <head>
        <title>signup page</title>
        <style>
  
  body {
    background: #000;
}
.signinBox {
    background: aliceblue;
    width: 350px;
    margin: auto;
    border-top-left-radius: 50px;
    border-bottom-right-radius: 50px;
}       
.title h1 {
    text-align: center;
    color: #ff5200;
    margin-top: 100px;
    padding: 21px 0px 0px 0px;
}
input {
    display: block;
    text-align: center;
    margin: auto;
    padding: 10px 75px;
    border: 3px solid #ffb400;
    background: aliceblue;
    border-radius: 5px;
}
.paragraph {
    color: #ff5200;
    text-align: center;
}
.submit {
    padding: 10px 134px !important;
    background: #ceaaaa75 !important;
    color:#6e6363;
}
.popUpMsz {
    width: 164px;
    margin: auto;
    margin-bottom: 10px;
}

        </style>
    </head>
    <body>
        <div class="signinBox">
        <div class="title"><h1>signup page</h1></div>
        <div class="popUpMsz">
        <?php
        if(isset($_REQUEST["right"])){
            echo "<font color='green'>Data Insert Successfull !!</font>";
        }
        ?>
        </div>
        <form action="signup core.php" method="post">
        <input type="text" name="fname" placeholder="Enter Your First Name" required/><br/><br/>
        <input type="text" name="lname" placeholder="Enter Your Last Name" required/><br/><br/>
        <input type="email" name="email" placeholder="Enter Your Email" required/><br/><br/>
        <input type="password" name="password" placeholder="Enter Your password" required/><br/><br/>
        <input class="submit" type="submit" value="submit"/><br/><br/>
        <div class="paragraph">Already H've An Account? <a href="login page.php">Login</a></div><br/><br/>
        </form>
        </div>
    </body>
</html>