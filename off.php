<?php
	session_start();
	$pin = $_GET['pin'];
	if ($pin === NULL) {
		echo "'pin' variable not specified";
	} else {
		echo exec("gpio write ". $pin ." 1");
	}
?>
