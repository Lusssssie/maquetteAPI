/*en construction*/
var object = "moon";

$('span.buttonUp').click(function(){	
	if(object == "moon"){
		$("body").removeClass("moon");
		$("body").addClass("mars");
		object="mars";
		trigger();
	}else{
		$("body").removeClass("mars");
		$("body").addClass("moon");
		object="moon";		
	}

})

$('span.buttonDown').click(function(){	
	if(object == "moon"){
		$("body").removeClass("moon");
		$("body").addClass("mars");
		object="mars";
	}else{
		$("body").removeClass("mars");
		$("body").addClass("moon");
		object="moon";		
	}

})