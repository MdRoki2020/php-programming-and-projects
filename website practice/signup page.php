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

        .signupBox {
        margin-top: 150px;
        }

        .signupBox h3 {
        margin-bottom: 25px;
        font-weight: bold;
        }

        .signupBox input {
        background: #dadad07a;
        border:none;
		padding: 5px 30px;
        }
		input {
		border-radius: 5px;
		transition:.4s;
        }
		input:hover {
        transform: scale(1.1);
        }
		a {
        color: blue;
        }
		
		</style>
	
	</head>
	<body>
	
	    <header class="header text-center">
	
	    <h1>Welcome</h1>
		
	
	    </header>
	
	    <div class="row text-center">
		
		    <div class="col-lg-12 signupBox">
			    
				<form action="signup core.php" method="post">
				
				    <h3>Signup Form</h3>
					<?php
					
					if(isset($_REQUEST["right"])){
						echo "<font color='green'>Registration Successfull</font>";
					}
					
					?>
					<br/><span>First Name :</span><br/>
			        <input type="text" name="fname" placeholder="Enter First Name"/>
				    <br/>
				    <br/>
				    <span>Last Name :</span><br/>
				    <input type="text" name="lname" placeholder="Enter Last Name"/>
				    <br/>
				    <br/>
				    <span>Email :</span><br/>
				    <input type="email" name="email_addr" placeholder="Enter Email"/>
				    <br/>
				    <br/>
				    <span>Password :</span><br/>
				    <input type="password" name="usr_pwd" placeholder="Enter password"/>
				    <br/>
				    <br/>
				    <input type="submit" value="submit" />
					<p>Alrady H've An Accound? <a href="login.php">Login</a></p>
				
				</form>
			
			</div>
		
		</div>
	
	
	
	<!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>

</html>