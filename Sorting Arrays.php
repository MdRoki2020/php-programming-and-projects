<!DOCTYPE html>
<html>

    <head>
	
	    <title>Value Return</title>
	
	</head>
	<body>
	
	    <?php
		
		    $x=array("Tithee","Usha","Roki","Maugdho");
			$length=count($x);
			sort($x);
			
			echo "With Alphabatic Order:";
			echo "<br/>";
			for($i=0;$i<$length;$i++){
				echo $x[$i];
				echo "<br/>";
			}
			
			echo "<br/>";
			echo "With Sort Order:";
			echo "<br/>";
			
			$x=array("15","5","20","25");
			$length=count($x);
			sort($x);
			
			for($i=0;$i<$length;$i++){
				echo $x[$i];
				echo "<br/>";
			}
			
			echo "<br/>";
			echo "With Reverse Order:";
			echo "<br/>";
			
			$x=array("15","5","20","25");
			$length=count($x);
			rsort($x);
			
			for($i=0;$i<$length;$i++){
				echo $x[$i];
				echo "<br/>";
			}
		?>
	
	</body>

</html>