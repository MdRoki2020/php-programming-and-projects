
<?php
	
	
    if(!isset($_COOKIE["currentUser"])){
		header("location:index.php");
	}

?>


<!DOCTYPE html>
<html>

    <head>
	
	    <title>index page</title>
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>
	
	<?php
	
	    session_start();
		require_once("config.php");
	
	?>
	
	    <div class="header">
		
		    <h1>PROFILE PAGE</h1>
			<a href="index.php">Home</a>
			<a href="profile page.php">Profile</a>
			<?php
			
			    if(!isset($_COOKIE["currentUser"])){
				echo '<a href="login page.php">Login</a>';
			}
			else{
				echo '<a href="logout core.php">Logout</a>';
			}
			
			?>
		
		</div>
	    <div class="contains">
		
		    <h2>
			
			<?php
			
			    if(isset($_COOKIE["currentUser"])){
					echo "User : ".$_COOKIE["currentUser"];
				}
			
			?>
			
			</h2>
		
		    <P>Hello my name is Md. Roki.I am a dedicated and hardworking Person who believes in honestly And good working relation. though I am new at this sector of job But I have certain qualities which makes me good at this.

            I am graduate of Computer Science from Daffodil International University. My education background help me To perform according to my Silence expectations.

            but i am also too much  expert c programming .

            If you hear me,You will get many service at One time investment. I am very much confident of our Succession together as  I am punctual and creative. I look forward to hear From you soon.

            thank you man !!! </P>
		
		</div>
	    <div class="footer">
		
		    <p>&copy; 2021 rokis.info</p>
		
		</div>
	
	</body>

</html>