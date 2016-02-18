<?php
	session_start();
	$pin = $_GET['pin'];
	if ($pin === NULL) {
		echo "'pin' variable not specified. Please enter a pin number to check";
	} else {
		echo exec("gpio read ".$pin);
	}
?>
