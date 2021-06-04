
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
		
		echo md5("roki");
	
	?>
	
	    <div class="header">
		
		    <h1>WELCOME TO ROKI'S OFFICIAL</h1>
		    <h1>HOME PAGE</h1>
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
		
		    <P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</P>
		
		</div>
	    <div class="footer">
		
		    <p>&copy; 2021 rokis.info</p>
		
		</div>
	
	</body>

</html>