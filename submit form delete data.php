<?php

    require_once("submit form connection.php");
	
	$getID=$_REQUEST["id"];
	
	$dltquery="DELETE FROM my_users WHERE id=$getID";
	$runDlquery=mysqli_query($connect,$dltquery);
	
	if($runDlquery==true){
		header("location:submit form index.php?deleted");
	}

?>