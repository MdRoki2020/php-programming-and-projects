<!DOCTYPE html>
<html>

    <head>
	
	    <title>signup page</title>
		<!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
		<style>
		
		body {
        background: #c7c7c7;
        }

        html {
        scroll-behavior: smooth;
        }
		
		.loginForm {
        width: 550px;
        text-align: center;
        margin: auto;
        margin-top: 160px;
        background: linear-gradient(#4aaa87,#6591b7f5);
        border-top-left-radius: 30%;
        border-bottom-right-radius: 30%;
		transition: .5s;
        }
		.loginForm:hover {
        transform: scale(1.1);
        }

        .signupBox h3 {
        margin-bottom: 25px;
        font-weight: bold;
        }

        .signupBox input {
        background: #dadad07a;
        border: none;
		padding: 5px 30px;
        }
		input {
        transition: .4s;
		border-radius: 5px;
        }

        input:hover {
        transform: scale(1.1);
        }
		input.loginBtn {
        margin-bottom: 15px;
        }
		a {
        color: greenyellow;
        }
		
		</style>
	
	</head>
	<body>
	
	    <header class="header text-center">
	
	    <h1>Login Here</h1>
	
	</header>
	
	    <div class="loginForm">
		
		    <div class="signupBox">
			    
				<form action="login core.php" method="post">
				
				    <h3>Login Form</h3>
					
					<?php
					
					if(isset($_REQUEST["wrong"])){
						echo "<font color='red'>User Email Or Password Invalid</font>";
					}
					
					?>
					
					<br/><span>Email :</span><br/>
			        <input type="email" name="email_addr" placeholder="Enter Email"/>
				    <br/>
				    <br/>
				    <span>Password :</span><br/>
				    <input type="password" name="usr_pwd" placeholder="Enter password"/>
				    <br/>
				    <br/>
				    <input class="loginBtn" type="submit" value="submit" />
					<p>D'nt Have An Accound <a href="signup page.php">Signup</a></p>
				
				</form>
			
			</div>
		
		</div>
	
	
	
	<!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>

</html>