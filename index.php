<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Sleep</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sleep.css"/>
</head>

<body>
<div class="outerwrapper">
<div class="wrapper">
<!--
Why can't I sleep?

Options:

- I consumed something
	What did you consume?
	1. Tea
	2. Coffee
	3. Energy drink
	4. Chocolate

- I slept too much last night
	When did you last sleep? (Calculates when a suitable time to try to fall asleep is)

- I have an irregular sleep schedule

- Worried 

- Insomnia 

- I just can't fall asleep.

-->
<div id="title">
<h1>Why can't I sleep?</h1>
</div>

<div id="description">
<p>Description</p>
</div>

<form>
<select id="options">
	<option value="default" selected>Choose an option</option>
    <option value="consume">I consumed caffeine</option>
    <option value="sleptTooMuch">I slept too much</option>
    <option value="irregular">I have an irregular sleep schedule</option>
    <option value="mind">I have something on my mind</option>
    <option value="insomnia">I have insomnia</option>
    <option value="justCant">I just can't fall asleep (General Tips)</option>
  </select>
</form>


<div class="solution" id="consume">
  <h2>I consumed caffeine</h2>
  <br>
  <p> What did you eat or drink?<p>
  <br>
  <button id = "tea" onclick = "tea()">Tea</button>
  <button id = "coffee" onclick= "coffee()">Coffee</button>
  <button id = "energy" onclick= "energy()">Energy Drink</button>
  <button id = "chocolate" onclick= "chocolate()">Chocolate</button>
  <p id = "drink"></p>

</div>

<div class="solution" id="sleptTooMuch">
<h2>I slept too much</h2>
<br>
<p>Based on someone's age:
- Children should get at least 10 hours of sleep
- Teenagers should get 9-10 hours of sleep
- Adults should get 7-9 hours of sleep

Exceeding this amount can lead to fatigue and grogginess. 

If you've slept too much, it simply means your day has been pushed back. You'll sleep later than you usually do. 
Make sure not to sleep too much too often, this can lead to a significant change in your sleep schedule.
</p>

<select name="age" id = "age">
    <option value="default" selected = "selected">Choose an age group</option>
    <option value="child">Under 10</option>
    <option value="teen">10-20</option>
    <option value="adult">21-65</option>
    <option value="elder">65+</option>
</select>

<select id="hours" name="hours">
  <option value="default" selected>Choose hours</option>
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
  <option value="default" selected>Choose minutes</option>
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
  <option value="default" selected>Choose minutes</option>
    <option value="am">AM</option>
    <option value="pm">PM</option>
</select>
<button id ="calculate" onclick = "calculate()">calculate</button>

<p id = "time"></p>

</div>

<div class="solution" id="irregular">
<h2>Irregular sleep schedule</h2>
<br>
<p>If you have an irregular sleep schedule, it will be very difficult for you to fall asleep at regular times.
Following our general tips may help, but fixing your sleep schedule should be a priority.
To fix your sleep schedule:</p>
<ul>
<li type="square"><span>Go to bed at the same time every night</span></li>
<li type="square"><span>Force yourself to stay up and sleep at desired regular time</span></li>
<li type="square"><span>If all else fails, seek help from a professional</span></li>
</ul>
</div>

<div class="solution" id="mind">
<h2>Something on my mind</h2>
<br>
<p>If you have a lot in your mind, try writing it out your thoughts on a piece of paper instead of using an electronic device as it can make you more awake. When writing down things, it can get it off your mind as it can remind you in the morning or it is used to empty your mind.</p>
</div>

<div class="solution" id="insomnia">
<h2>Insomnia</h2>
<br>
<p>Drink warm milk before sleeping or foods with tryptophan such as turkey or tuna fish. Tryptophan is an amino acid which helps induce sleep.
  To reduce insomnia in the future, try to avoid consuming caffeine after 2pm, have a sleep and wake up routine to get used to waking up and sleeping at the same time everyday, do stretches or yoga 2 hours before sleeping.</p>
</div>

<div class="solution" id="justCant">
<h2>Just can't sleep?</h2>
<br>
<p> Try using blackout curtains to reduce light entering the room. Turn off all lights in the room to make it as dark as possible. Keep electronics away from you to prevent the need to go on it as it can make you less sleepy. Avoid the colour blue when trying to sleep. Sleeping in a dark room helps release melatonin into your system to make you fall asleep. Some foods that boost melatonin is pineapple, oranges, and sweet corn.</p>
</div>

</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="sleep.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</html>

