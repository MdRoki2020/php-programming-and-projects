<?php

$name="user";
$value="roki";

setcookie($name,$value,time()+20);


echo "Receive Cookie__";
echo "<hr/>";


echo $_COOKIE["user"];
echo "<br/>";


if(isset($_COOKIE[$name])){
	echo "Cookie Found";
}
else{
	echo "Cookie Not Found";
}

?>