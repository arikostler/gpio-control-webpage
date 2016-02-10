$(document).ready(function(){
	getLightState();
	getSwitchState();
});

function lightOn() {
	$.ajax({url: "on.php", success: function(result) {
		getLightState();
	}});
}

function lightOff() {
	$.ajax({url: "off.php", success: function(result) {
		getLightState();
	}});	
}

function getLightState() {
	$.ajax({url: "getState.php", success: function(result) {
		$("#lightState").html(result);
	}});
}

function getSwitchState() {
	$.ajax({url: "getState.php", success: function(result) {
		if (result == "0") {
			$("#myonoffswitch").prop('checked', true);
		} else {
			$("#myonoffswitch").prop('checked', false);			
		}
	}});
}

function toggle(){
	if ($('#myonoffswitch').prop("checked")) {
		lightOff();
	} else {
		lightOn();
	}
}