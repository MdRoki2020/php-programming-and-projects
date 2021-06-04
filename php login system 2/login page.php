<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
  body{
    background:#000;
  }     
.loginBox {
  background: aliceblue;
  width: 350px;
  margin: auto;
  margin-top: 250px;
  border: 2px solid #ff5200;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
}
.loginBox input {
  padding: 10px 75px;
  text-align: center;
  margin-left: 25px;
  background: aliceblue;
  border: 3px solid #ffb400;
  border-radius: 5px;
}
.loginBox h1 {
  text-align: center;
  color: #ff5200;
  margin-bottom: 25px;
}
.submit {
    padding: 10px 134px !important;
    background: #ceaaaa75 !important;
    color:#6e6363;
}
.popUpMsz {
    width: 230px;
    margin: auto;
    margin-bottom: 10px;
}
.pragraph {
    width: 172px;
    color: #ff5200;
    margin: auto;
}
        
        
        </style>
    </head>
    <body>
        <div class="loginBox">
            <h1>Login</h1>
            <div class="popUpMsz">
            <?php
            if(isset($_REQUEST["wrong"])){
            echo "<font color='red'>Do Not Mass Email Or Password !!</font>";
            }
            ?>
            </div>
            <form action="login core.php" method="post">
            <input type="email" name="email" placeholder="Enter Your Email" required/><br/><br/>
            <input type="password" name="password" placeholder="Enter Your Password" required/><br/><br/>
            <input class="submit" type="submit" value="submit"/><br/><br/>
            </form>
            <div class="pragraph">Hvn't An Acoount? <a href="signup page.php">Signin</a></div><br/><br/>

        </div>
    </body>
</html>