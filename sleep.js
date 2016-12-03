
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
            $("#consume").fadeIn(1000);
    		break;
    	case "sleptTooMuch":
    		$("#sleptTooMuch").fadeIn(1000);
    		break;
    	case "irregular":
    		$("#irregular").fadeIn(1000);
    		break;
   		case "mind":
    		$("#mind").fadeIn(1000);
    		break;
    	case "insomnia":
    		$("#insomnia").fadeIn(1000);
    		break;
    	case "justCant":
    		$("#justCant").fadeIn(1000);
    		break;
	}
}

function tea(){
    document.getElementById("head").innerHTML = "For tea:"
    document.getElementById("drink").innerHTML = "Put a spoonful of sugar under your tongue with 5 tsps. brown sugars and 1 salt. Let it dissolve and sleep will be acheived. This is done to balance sugar and caffeine levels";
}

function coffee(){
    document.getElementById("head").innerHTML = "For coffee:"
    document.getElementById("drink").innerHTML = "Try chopping up some garlic and put it in some simmering milk and let it sit for a while so it infuses. Drinking this will relax your body and overcome the effects of coffee for a night's sleep.";
}

function energy(){
    document.getElementById("head").innerHTML = "For energy drink:"
    document.getElementById("drink").innerHTML = "Drink a sleepy/calming tea such as chamomile or lemon balm tea or warm milk. Although tea has caffeine, the calming teas contain L-theanine which produceda relaxing effect that will eventually causes you to fall asleep.";
}

function chocolate(){
    document.getElementById("head").innerHTML = "For chocolate:"
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
    var ageWidth = ages[ages.selectedIndex].value
    console.log(ageWidth);

    var hour = document.getElementById("hours");
    var timeHour = hour[hour.selectedIndex].value
    console.log(timeHour);

    var minute = document.getElementById("minutes");
    var timeminute = minute[minute.selectedIndex].value
    console.log(timeminute);

    var timeofday = document.getElementById("daytime");
    var dayOrNight = timeofday[timeofday.selectedIndex].value
    console.log(dayOrNight);

    if (ageWidth == "child"){
        var wakeUp = parseInt(timeHour) + 10;
       if (wakeUp>=12){
            if (wakeUp != 12)
                wakeUp = wakeUp-12;
            if (dayOrNight == "am")
                dayOrNight = "pm";
            else
                dayOrNight = "am";
        }
        document.getElementById("time").innerHTML = "You should wake up at " + wakeUp +":" + timeminute + dayOrNight;
    }
    else if (ageWidth == "teen"){
        var enddayOrNight = dayOrNight;
        var wakeUp = parseInt(timeHour) + 9;
        if (wakeUp>=12){
            if (wakeUp != 12)
                wakeUp = wakeUp-12;
            if (dayOrNight == "am")
                dayOrNight = "pm";
            else
                dayOrNight = "am";
            
         }


        var endWakeUp = parseInt(timeHour) + 10;
        if (endWakeUp>=12){
            if (endWakeUp != 12)
                endWakeUp = endWakeUp-12;
            if (enddayOrNight == "am")
                enddayOrNight = "pm";
            else
                enddayOrNight = "am";
        }

        document.getElementById("time").innerHTML = "You should wake up between " + wakeUp +":" + timeminute + dayOrNight + " and " + endWakeUp +":" + timeminute + enddayOrNight;
    }
    else if (ageWidth == "adult"){
        var enddayOrNight = dayOrNight;
        var wakeUp = parseInt(timeHour) + 7;
        if (wakeUp>=12){
            if (wakeUp != 12)
                wakeUp = wakeUp-12;
            if (dayOrNight == "am")
                dayOrNight = "pm";
            else
                dayOrNight = "am";
        }

        var endWakeUp = parseInt(timeHour) + 9;
        if (endWakeUp>=12){
            if (endWakeUp != 12)
                endWakeUp = endWakeUp-12;
            if (enddayOrNight == "am")
                enddayOrNight = "pm";
            else
                enddayOrNight = "am";
        }

        document.getElementById("time").innerHTML = "You should wake up between " + wakeUp +":" + timeminute + dayOrNight + " and " + endWakeUp +":" + timeminute + enddayOrNight;
    }
    else if (ageWidth == "elder"){
        var wakeUp = parseInt(timeHour) + 7;
        if (wakeUp>=12){
            if (wakeUp != 12)
                wakeUp = wakeUp-12;
            if (dayOrNight == "am")
                dayOrNight = "pm";
            else
                dayOrNight = "am";
        }
        document.getElementById("time").innerHTML = "You should wake up at " + wakeUp +":" + timeminute + dayOrNight;
    }

}