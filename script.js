var circuitOne = 10;
var circuitTwo = 11;

$(document).ready(function() {
	// Switch toggle
	$('.Switch').click(function() {
		$(this).toggleClass('Off').toggleClass('On');
		if ($(this).hasClass('On')) {
			if ($(this).hasClass("one")){
				lightOn(circuitOne);
			} else if ($(this).hasClass("two")){
				lightOn(circuitTwo);
			}
		} else {
			if ($(this).hasClass("one")){
				lightOff(circuitOne);
			} else if ($(this).hasClass("two")){
				lightOff(circuitTwo);
			}
		}
	});
	getPinStates();
	getSwitchStates();
});

function lightOn(circuit) {
	var url = "on.php?pin="+circuit;
	$.ajax({url: url, success: function(result) {
		getPinStates();
		$("#message").html("pin " + circuit + " turned on");
	}});
}

function lightOff(circuit) {
	var url = "off.php?pin="+circuit;
	$.ajax({url: url, success: function(result) {
		getPinStates();
		$("#message").html("pin " + circuit + " turned off");
	}});	
}

function getPinStates() {
	$.ajax({url: "getState.php?pin="+circuitOne, success: function(result) {
		$("#circuitOneState").html(result);
	}});

	$.ajax({url: "getState.php?pin="+circuitTwo, success: function(result) {
		$("#circuitTwoState").html(result);
	}});
}

function getSwitchStates() {
	$.ajax({url: "getState.php?pin="+circuitOne, success: function(result) {
		if (result == "0") {
			$(".one").addClass("On").removeClass("Off");
		} else {
			$(".one").addClass("Off").removeClass("On");
		}
	}});


	$.ajax({url: "getState.php?pin="+circuitTwo, success: function(result) {
		if (result == "0") {
			$(".two").addClass("On").removeClass("Off");
		} else {
			$(".two").addClass("Off").removeClass("On");
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
