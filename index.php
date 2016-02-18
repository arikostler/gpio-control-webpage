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
	<!--<br><br>
	<div class="Switch Off">
		<div class="Toggle"></div>
		<span class="On">ON</span>
		<span class="Off">OFF</span>
	</div>
	-->
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
</body>
</html>
