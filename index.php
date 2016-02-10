<html>
<head>
	<title>Albert GPIO Control</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
	<p>
		Pin State: <span id="lightState"></span>
	</p>
	<br><br>
	<button onclick='lightOn()'>LIGHT ON</button>
	<br>
	<br>
	<button onclick='lightOff()'>LIGHT OFF</button>
	<br>
	<br>
	<div class="onoffswitch" onclick="toggle()">
	    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
	    <label class="onoffswitch-label" for="myonoffswitch">
	        <span class="onoffswitch-inner"></span>
	        <span class="onoffswitch-switch"></span>
	    </label>
	</div>
</body>
</html>
