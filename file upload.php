<!DOCTYPE html>
<html>

    <head>
	
	    <title>Value Return</title>
	
	</head>
	<body>
	
	<form method="post" action="" enctype="multipart/form-data">
	
	    <input type="file" name="image"/>
		<input type="submit" value="submit"/>
	
	</form>
	
	<?php
	
	    if(isset ($_FILES['image'])){
			$filename=$_FILES['image']['name'];
			$filetmp=$_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp,"image/".$filename);
			echo "Image uploaded Successfully";
		}
	
	?>
	
	</body>

</html>