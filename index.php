<html>

<body>
	<head>
		<title>Limited Coin &#8750</title>
		<link rel="icon" href="">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<div class="y">
		<h1>Limited Coin &#8750</h1>
	</div>
	
	<div id="chart"></div>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<div>
		<h2 id="v"/>
		<h2 id="l"/>
		<h2 id="o"/>
	</div>
	
	<div class="x">
 		<a href="#password" id="d">&#8750</a>
	</div>
	
	<button id="you" onclick="yeet()">
		Load
	</button>
	
	<div id="s">
		<input id="12" type="password" name="password" placeholder="Password"/>
	</div>

	<div id="q">
		<p>Vincent</p> <button id="3">+</button> <button id="71">-</button>
		<p>Leon</p> <button id="8">+</button> <button id="72">-</button>
		<p>Olivia</p> <button id="7">+</button> <button id="73">-</button>
	</div>
	<form action="<?php $my = fopen("file.txt", "w"); fwrite($my, $_POST["num"]); fclose($my); ?>" method="post">
	<input type="text" id="67" name="num" style="visibility: hidden"/>
		<input type="submit"></input>
	</form>


</body>

</html>

<style type="text/css">
	h1{
		font-family: monospace;
		background-color: #ddddff;
		padding: 6px;
		padding-left: 5%;


	}

	h2{
		font-family: monospace;
	}

	body{
		margin: 0;
	}

	a{
  		color: white;
  		font-size: 30px;
  		text-decoration: none;
	}

	div.x{
		float: right;
		margin-right: 40px;
		padding: 30px;
  		border-radius: 100px;
  		background-color: gold;
  		border: white solid 4px;
  		border-style:  dotted;
  		width: 30px;
  		height: 30px;
	}

	div#s{
		visibility: hidden;
		margin: 50px;
	}

	input{
		border: gold solid 10px;
		border-radius: 100px;
	}

	p{
		font-family: monospace;
		width: 0px;
		font-size: 30px;
		margin-left: 40px;
	}

	button{
		float: right;
		margin-right: 40%;
	}

	div#q{
		border: gold solid 10px;
		border-radius: 100px;
		height: 300px;
		visibility: hidden;
	}

	button{
		border: gold solid 10px;
		border-radius: 100px;
	}	
	
	.87{
	visibility: hidden;
	}	
	
</style>

<script type="text/javascript">

	
	
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

m = Math.floor((Math.random() * 10));
o = Math.floor((Math.random() * 10));
l = Math.floor((Math.random() * 10));
a = Math.floor((Math.random() * 10));
i = Math.floor((Math.random() * 10));
f = Math.floor((Math.random() * 10));
n = Math.floor((Math.random() * 10));
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Cost'],
  ['Monday', m],
  ['Tuesday', o],
  ['Wednesday', l],
  ['Thursday', a],
  ['Friday', i],
  ['Saturday', f],
  ['Sunday', n]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Cost', 'width':1000, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.LineChart(document.getElementById('chart'));
  chart.draw(data, options);
}
var mo =[];
const url = "file.txt"
fetch(url)
   .then( r => r.text() )
   .then( t => pro(t) )
function pro(money){
	mo = money.split(" ", 3);	
}



document.getElementById("d").onclick = function() {password()};

function password(){
	document.getElementById("s").style.visibility = "inherit";
}

document.getElementById("12").onblur = function() {check()};

function check(){
	const password = document.querySelector('input').value;
	if (password == 69420) {
		document.getElementById("q").style.visibility = "inherit";
	}
}

document.getElementById("3").onclick = function() {addv()};

document.getElementById("8").onclick = function() {addl()};

document.getElementById("7").onclick = function() {addo()};

document.getElementById("71").onclick = function() {subv()};

document.getElementById("72").onclick = function() {subl()};

document.getElementById("73").onclick = function() {subo()};

function addv(){
		mo[0]++
		document.getElementById("v").innerHTML = "Vincent: " + mo[0];
		yonk();
}
function addl(){
		mo[1]++
		document.getElementById("l").innerHTML = "Leon: " + mo[1];
		yonk();
}
function addo(){
		mo[2]++
		document.getElementById("o").innerHTML = "Olivia: " + mo[2];
		yonk();
	}
function subv(){
		mo[0]--
		document.getElementById("v").innerHTML = "Vincent: " + mo[0];
		yonk();
}
function subl(){
		mo[1]--
		document.getElementById("l").innerHTML = "Leon: " + mo[1];
		yonk();
}
function subo(){
		mo[2]--
		document.getElementById("o").innerHTML = "Olivia: " + mo[2];
		yonk();
	}

function yeet(){
document.getElementById("v").innerHTML = "Vincent: "+mo[0];
document.getElementById("l").innerHTML = "Leon: "+mo[1];
document.getElementById("o").innerHTML = "Olivia: "+mo[2];
document.getElementById("you").style.visibility = "hidden"
}

function yonk(){
	document.getElementById("67").value = mo[0]+" "+mo[1]+" "+mo[2];
}
           
        
 

</script>
