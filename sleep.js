
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

 function calculate(){
    var ages = document.getElementById("age");
    var s = ages[ages.selectedIndex].value
    console.log(s);

    var hour = document.getElementById("hours");
    var w = hour[hour.selectedIndex].value
    console.log(w);

    var minute = document.getElementById("minutes");
    var a = minute[minute.selectedIndex].value
    console.log(a);

    var timeofday = document.getElementById("daytime");
    var d = timeofday[timeofday.selectedIndex].value
    console.log(d);

    if (s == "child"){
        var t = parseInt(w) + 10;
       if (t>=12){
            if (t != 12)
                t = t-12;
            if (d == "am")
                d = "pm";
            else
                d = "am";
        }
        document.getElementById("time").innerHTML = "You should wake up at " + t +":" + a + d;
    }
    else if (s == "teen"){
        var d1 = d;
        var t = parseInt(w) + 9;
        if (t>=12){
            if (t != 12)
                t = t-12;
            if (d == "am")
                d = "pm";
            else
                d = "am";
            
         }


        var t1 = parseInt(w) + 10;
        if (t1>=12){
            if (t1 != 12)
                t1 = t1-12;
            if (d1 == "am")
                d1 = "pm";
            else
                d1 = "am";
        }

        document.getElementById("time").innerHTML = "You should wake up between " + t +":" + a + d + " and " + t1 +":" + a + d1;
    }
    else if (s == "adult"){
        var d1 = d;
        var t = parseInt(w) + 7;
        if (t>=12){
            if (t != 12)
                t = t-12;
            if (d == "am")
                d = "pm";
            else
                d = "am";
        }

        var t1 = parseInt(w) + 9;
        if (t1>=12){
            if (t1 != 12)
                t1 = t1-12;
            if (d1 == "am")
                d1 = "pm";
            else
                d1 = "am";
        }

        document.getElementById("time").innerHTML = "You should wake up between " + t +":" + a + d + " and " + t1 +":" + a + d1;
    }
    else if (s == "elder"){
        var t = parseInt(w) + 7;
        if (t>=12){
            if (t != 12)
                t = t-12;
            if (d == "am")
                d = "pm";
            else
                d = "am";
        }
        document.getElementById("time").innerHTML = "You should wake up at " + t +":" + a + d;
    }

}