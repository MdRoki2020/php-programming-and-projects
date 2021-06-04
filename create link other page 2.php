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