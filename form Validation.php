<!DOCTYPE html>
<html>

    <head>
	
	    <title>Form Validation</title>
	
	</head>
	<body>
	
	    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		
		    <table>
		
		    <tr>
			
			    <td>Name </td>
			    <td><input type="text" name="name" placeholder="Enter Name" required /></td>
			
			</tr>
			<tr>
			
			    <td>Email </td>
			    <td><input type="text" name="email" placeholder="Enter Email" required /></td>
			
			</tr>
			<tr>
			
			    <td>Website </td>
			    <td><input type="text" name="website" placeholder="Enter Website" required /></td>
			
			</tr>
			<tr>
			
			    <td>Comment </td>
			    <td><textarea name="comment" placeholder="Enter Comment" row="5" col="40"></textarea></td>
			
			</tr>
			<tr>
			
			    <td>Gender </td>
			    <td><input type="radio" name="gender" value="male"/>Male
			    <input type="radio" name="gender" value="Female"/>Female
				</td>
			
			</tr>
			<tr>
			
			    <td></td>
			    <td><input type="submit" name="submit" value="submit"/></td>
			
			</tr>
		
		</table>
		
		</form>
		
		<?php
		
		    if($_SERVER["REQUEST_METHOD"]=="POST"){
				$name    =validate($_POST["name"]);
				$email   =validate($_POST["email"]);
				$website =validate($_POST["website"]);
				$comment =validate($_POST["comment"]);
				$gender  =validate($_POST["gender"]);
				
				
				echo "Name: ".$name."<br/>";
				echo "Email: ".$email."<br/>";
				echo "Website: ".$website."<br/>";
				echo "comment: ".$comment."<br/>";
				echo "Gender: ".$gender."<br/>";
			}
			
			function validate($data){
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
		
		?>
	
	</body>

</html>