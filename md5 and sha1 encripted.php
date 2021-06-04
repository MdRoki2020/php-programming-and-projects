<?php
    $md5Encripted=md5("roki");
	$sha1Encripted=sha1($md5Encripted);
	echo $sha1Encripted;
?>