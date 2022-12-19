$(document).ready(function() {
	$("#card").show();
	$("#cash").hide();

	
	$("#button1").click(function(){		
		$("#card").show();
		$("#cash").hide();
	
	});
	$("#button2").click(function(){
		$("#card").hide();
		$("#cash").show();
	});
	
});