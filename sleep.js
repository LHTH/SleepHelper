
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

function tea(){
    document.getElementById("drink").innerHTML = "Put a spoonful of sugar under your tongue with 5 brown sugars and 1 salt. Let it dissolve and sleep will be acheived. This is done to balance sugar and caffeine levels";
}

function coffee(){
    document.getElementById("drink").innerHTML = "Try chopping up some garlic and put it in some simmering milk and let it sit for a while so it infuses. Drinking this will relax your body and overcome the effects of coffee for a night's sleep.";
}

function energy(){
    document.getElementById("drink").innerHTML = "Drink a sleepy/calming tea such as chamomile or lemon balm tea or warm milk. Although tea has caffeine, the calming teas contain L-theanine which produceda relaxing effect that will eventually causes you to fall asleep.";
}

function chocolate(){
    document.getElementById("drink").innerHTML = "Chocolate contains a little bit of caffeine but also contains theobromine which increases heart rate. If you want chocolate and also want to fall asleep, have some white chocolate. It has less caffeine and theobromine while dark chocolate has the most.";
}

options.onchange = function() {
	hideAll();
	var selection = $('#options option:selected').val();
	console.log(selection);
	showSolution(selection);
 }