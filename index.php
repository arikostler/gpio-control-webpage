<html>
<head>
	<title>Albert GPIO Control</title>
	<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
	<?php
		session_start();
	?>
	<p>
		Circuit ONE State: <span id="circuitOneState"></span>
		<br>
		Circuit TWO State: <span id="circuitTwoState"></span>
		<br>
		Message: <span id="message"></span>
	</p>
	<table class="table table-striped">
		<tr>
			<td>Circuit ONE</td>
			<td>
				<div class="Switch Off one">
					<div class="Toggle"></div>
					<span class="On">ON</span>
					<span class="Off">OFF</span>
				</div>
			</td>
		</tr>
		<tr>
			<td>Circuit TWO</td>
			<td>
				<div class="Switch Off two">
					<div class="Toggle"></div>
					<span class="On">ON</span>
					<span class="Off">OFF</span>
				</div>
			</td>				
		</tr>
	</table>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
