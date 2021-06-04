<!DOCTYPE html>
<html>

    <head>
	
	    <title>uploaded file</title>
	
	</head>
	<body>
	
	<pre>
	<?php
	    
		$submitted_details=$_FILES["profilepicture"];
		
		$fileName= $submitted_details["name"];
		echo "<br/>";
		$fileType= $submitted_details["type"];
		echo "<br/>";
		$fileSize =$submitted_details["size"];
		echo "<br/>";
		$fileTmp=$submitted_details["tmp_name"];
		
        echo $fileName;
		echo "<br/>";
		$convertSize= $fileSize/1024;
		
		if($convertSize>1024){
			echo $convertSize/1024 ." MB";
		}
		else{
			echo "File size: ".floor($convertSize)." KB";
		}
		
		echo "<br/>";
		echo "File Type: ".$fileType;
		echo "<br/>";
		echo "Temp Name: ".$fileTmp;
		
		move_uploaded_file($fileTmp,"image/$fileName");
		echo "<br/>";
		echo "<img src='image/$fileName'/>"
		
		
	?>
	</pre>
	
	    <form enctype="multipart/form-data" method="POST" action="freelancer nasim file uploaded.php">
		
		    <input type="file" name="profilepicture"/>
		    <input type="submit" value="submit"/>
		
		</form>
		
	
	</body>

</html>