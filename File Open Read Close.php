<!DOCTYPE html>
<html>

    <head>
	
	    <title>Value Return</title>
	
	</head>
	<body>
	
	<?php
	    
		$ourfile=fopen("text.txt","r") or die("file not found");
	    echo fread($ourfile,filesize("text.txt"));
		fclose($ourfile);
	
	?>
	
	</body>

</html>