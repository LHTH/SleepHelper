
hideAll();
/*
var selection = $('#options option:selected').val();
*/
function hideAll(){
	$(".solution").css("display", "none");
}

function showSolution(selection){
	switch(selection){
    	case "consume":
    		$("#consume").css("display", "inline");
    		break;
    	case "sleptTooMuch":
    		$("#sleptTooMuch").css("display", "inline");
    		break;
    	case "irregular":
    		$("#irregular").css("display", "inline");
    		break;
   		case "mind":
    		$("#mind").css("display", "inline");
    		break;
    	case "insomnia":
    		$("#insomnia").css("display", "inline");
    		break;
    	case "justCant":
    		$("#justCant").css("display", "inline");
    		break;
	}
}

options.onchange = function() {
	hideAll();
	var selection = $('#options option:selected').val();
	console.log(selection);
	showSolution(selection);
 }