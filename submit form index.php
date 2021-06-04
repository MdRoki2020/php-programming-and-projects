<!DOCTYPE html>
<html>

    <head>
	
	    <title>submit form index</title>
	
	</head>
	<body>
	
	    <?php
		
		if(isset($_REQUEST["action"])){
			if($_REQUEST["action"]=="true"){
				echo "<font color='green'>Data Inserted</font>";
			}
			else{
				echo "<font color='Red'>Data Not Inserted</font>";
			}
			
		}
		
		?>
	
	    <form method="post" action="submit form core file.php">
		
		<input type="text" name="fname" placeholder="Enter First Name"/>
	    <input type="text" name="lname" placeholder="Enter Last Name"/>
	    <input type="email" name="email_addr" placeholder="Enter Email"/>
	    <input type="password" name="usr_pwd" placeholder="Enter Password"/>
	    <input type="submit" name="submitButton" value="savedata"/>
		
		</form>
		
		<br/>
		<br/>
		
		<?php
		
		    if(isset($_REQUEST["deleted"])){
				echo "data has been deleted";
			} elseif(isset($_REQUEST["edited"])){
				echo "Data Has Been Edited";
			}
		
		?>
		
		<table border="1px">
		
		    <tr>
			
			    <td><b>DB ID</b></td>
			    <td><b>First Name</b></td>
			    <td><b>Last Name</b></td>
			    <td><b>Email</b></td>
			    <td><b>Password</b></td>
			    <td><b>Action</b></td>
			
			</tr>
			
			<?php
			
			    require_once("submit form connection.php");
				
				
				$showDataQuery="SELECT*FROM my_users";
				$runDataQuery=mysqli_query($connect,$showDataQuery);
				
				if($runDataQuery==true){
					while($myData=mysqli_fetch_array($runDataQuery)){ ?>
			<tr>
			
			    <td><?php echo $myData["id"];?></td>
			    <td><?php echo $myData["fname"];?></td>
			    <td><?php echo $myData["lname"];?></td>
			    <td><?php echo $myData["email_addr"];?></td>
			    <td><?php echo $myData["usr_pwd"];?></td>
			    <td><a href="submit form edit data.php?edit_id=<?php echo $myData["id"];?>">Edit</a> | <a href="submit form delete data.php?id=<?php 
				echo $myData["id"]; ?>">Delete</a></td>
			
			</tr>
			<?php
					}
				}
			
			?>
			
			
		
		</table>
	
	</body>

</html>