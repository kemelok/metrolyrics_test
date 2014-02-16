
$(document).ready (function($) {
	$("#myform").submit(function(e){
		hasIssue = false;
		
		nameval = $("#name").val();
		messagelength = $("#message").val().length;

		if(nameval == '' ) {
			hasIssue = true;
			$("#nameErr").show();
			
		} else {
			$("#nameErr").hide();
		}

		if(messagelength < 10 ) {
			hasIssue = true;
			$("#messageErr").show();
			
		} else {
			$("#messageErr").hide();
		}

		return !hasIssue;
		
	});
	
});