<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Sleep Helper</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sleep.css"/>

<link rel="icon" 
      type="image/png" 
      href="favicon.png">

</head>

<body>
<div class="outerwrapper">
<div class="wrapper">

<div id="title">
<h1>Why Can't I Sleep?</h1>
</div>

<div id="description">
<p>We've all experienced insomnia; you're rolling around in bed, worried, and frustrated. We've designed this to be used when you're fiddling around on your mobile device trying to sleep.</p>
<br>
<div class="text-center">
	<p><i>So what's the cause of your insomnia?</i></p>
</div>
</div>

<form>
<select id="options">
	<option value="default" selected>Choose an option</option>
    <option value="consume">I consumed caffeine</option>
    <option value="sleptTooMuch">I slept for too long</option>
    <option value="irregular">I have an irregular sleep schedule</option>
    <option value="mind">I have something on my mind</option>
    <option value="insomnia">I have insomnia</option>
    <option value="justCant">I just can't fall asleep (General Tips)</option>
  </select>
</form>


<div class="solution" id="consume">
  <br>
  <div class="text-center">
  <p> What did you eat or drink?</p>
  </div
  <br>
  <div id="buttonrow">
  	<button id = "tea" onclick = "tea()">Tea</button>
  	<button id = "coffee" onclick= "coffee()">Coffee</button>
  	<button id = "energy" onclick= "energy()">Energy Drink</button>
  	<button id = "chocolate" onclick= "chocolate()">Chocolate</button>
  </div>
  <p id = "head"></p>
  <p id = "drink"></p>
</div>

<div class="solution" id="sleptTooMuch">
<h2>Sleeping for too long</h2>
<br>
<p>

How long you should sleep for depends on your age:

<ul>
<li type="square"><span>Children: Minimum of 10 hours</span></li>
<li type="square"><span>Teens: 9 - 10 hours</span></li>
<li type="square"><span>Adults: 7 - 9 hours</span></li>
<li type="square"><span>Elderly: 7 hours</span></li>
</ul>

Exceeding this amount can lead to fatigue and grogginess. 

If you've slept for too long, you'll sleep later than usual tonight.
</p>

<div class="text-center">
<select name="age" id = "age">
    <option value="default" selected = "selected">Age Group</option>
    <option value="child">Under 10</option>
    <option value="teen">10-20</option>
    <option value="adult">21-65</option>
    <option value="elder">65+</option>
</select>

<select id="hours" name="hours">
  <option value="default" selected>Hours</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>

<select id="minutes" name="minutes">
  <option value="default" selected>Minutes</option>
    <option value="00">00</option>
    <option value="05">05</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
    <option value="25">25</option>
    <option value="30">30</option>
    <option value="35">35</option>
    <option value="40">40</option>
    <option value="45">45</option>
    <option value="50">50</option>
    <option value="55">55</option>
</select>

<select id="daytime" name="daytime">
    <option value="am" selected>AM</option>
    <option value="pm">PM</option>
</select>
</div>
<div class="text-center">
<button id ="calculate" onclick = "calculate()">Calculate</button>
</div>

<p id = "time"></p>
<br>
<br>

</div>

<div class="solution" id="irregular">
<h2>Fixing an irregular sleep schedule</h2>
<br>
<p>If you have an irregular sleep schedule, it will be very difficult for you to fall asleep at regular times.
Following our general tips may help, but fixing your sleep schedule should be a priority.</p>
<br>
<p>Try the following:</p>
<ul>
<li type="square"><span>Go to bed at the same time every night</span></li>
<li type="square"><span>Force yourself to stay up and sleep at desired regular time</span></li>
<li type="square"><span>If all else fails, seek help from a professional</span></li>
</ul>
</div>

<div class="solution" id="mind">
<h2>Have something on your mind?</h2>
<br>
<p>Whether it is worry or excitement, try writing out your thoughts on a piece of paper instead of using an electronic device as it can make you more awake. When writing down things, it can get it off your mind as it can remind you in the morning or it is used to empty your mind.</p>
</div>

<div class="solution" id="insomnia">
<h2>Insomnia</h2>
<br>
<p>Drink warm milk before sleeping or foods with tryptophan such as turkey or tuna fish. Tryptophan is an amino acid which helps induce sleep.</p>
 <p>To reduce insomnia in the future, try to avoid consuming caffeine after 2pm, have a sleep and wake up routine to get used to waking up and sleeping at the same time everyday, do stretches or yoga 2 hours before sleeping.</p>
</div>

<div class="solution" id="justCant">
<h2>Just can't sleep? Here are some general tips.</h2>

<ul>
<li type="square"><span>Use blackout shades reduce light entering the room, as well as turn all the lights off.</span></li>
<li type="square"><span>Keep electronics away.</span></li>
<li type="square"><span>Eat foods that contain melatonin such as pineapple, oranges, and sweet corn.</span></li>
<li type="square"><span>Get up and relax for half an hour then try falling asleep again.</span></li>
</ul>
</div>

</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="sleep.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</html>

