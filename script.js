$(document).ready(function() {
	// Switch toggle
	$('.Switch').click(function() {
		$(this).toggleClass('Off').toggleClass('On');
		if ($(this).hasClass('On')) {
			lightOn();
		} else {
			lightOff();
		}
	});
	getPinState(10);
	getSwitchState();
});

function lightOn() {
	$.ajax({url: "on.php", success: function(result) {
		getPinState();
	}});
}

function lightOff() {
	$.ajax({url: "off.php", success: function(result) {
		getPinState();
	}});	
}

function getPinState(pinNumber) {
	$.ajax({url: "getState.php", success: function(result) {
		$("#lightState").html(result);
	}});
}

function getSwitchState() {
	$.ajax({url: "getState.php", success: function(result) {
		if (result == "0") {
			$(".Switch").addClass("On").removeClass("Off");
		} else {
			$(".Switch").addClass("Off").removeClass("On");
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