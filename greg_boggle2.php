<script type="text/javascript">

var i = 0;
var score = 0;
var marS = 0;
var randomNumber = (Math.floor(Math.random() * 4)) + 1;
var wordW = "";
var word = new Array();
var wordUsed = new Array();
var foundw = 0;
var alreadyZ = 0;
var timerZ = 0;
var newDiv = "";
var wordDiv = "words0";


switch(randomNumber)
{
		case 1:
		var wrd1 = ["hardware", "hard", "aware", "ahead", "award", "aware", "heard", "radar", "warhead", "drawer", "reward", "area", "awed", "dare", "dear", "draw", "drew", "haar", "hade", "haed", "hard", "hare", "head", "hear", "herd", "rare", "read", "rear", "rhea"];
		wordW = 1;
		break;
		
		case 2:
		var wrd1 = ["correction", "correct", "concert", "incorrect", "notice", "corner", "necrotic", "erotic", "orient", "cent", "cero", "cine", "cion", "cire", "cite", "coco", "coin", "coir", "cone", "coni", "coon", "coot", "core", "corn", "cote"];
		wordW = 2;
		break;
		
		case 3:
		var wrd1 = ["principle", "inclip", "inlier", "irenic", "linier", "lippen", "lipper", "nipper", "nipple", "pencil", "pincer", "pinier", "pipier", "prince", "ripple", "ceil", "cine", "cire", "clip", "epic", "lice", "lien", "lier", "line", "lipe", "lire", "nice", "pile", "rice"];
		wordW = 3;
		break;
		
		case 4:
		var wrd1 = ["storage", "store", "age", "argots", "ergots", "garote", "gaster", "gaters", "gators", "grates", "greats", "groats", "oaters", "orates", "orgeat", "osetra", "aero", "ager", "ages", "ares", "arse", "arts", "ates", "ears", "east", "eats", "egos","eras", "ergo", "ergs", "eros","erst", "etas", "gaes"];
		wordW = 4;
		break;
}	


function startZ(){

					document.getElementById("buttonPlay").innerHTML= "";
					document.getElementById("send").disabled=false;	
					document.getElementById("reload").disabled =false;	

					    if (wordW == 1 ){
						document.getElementById('displayW').innerHTML = ('darhwaer');				
						}
						if (wordW == 2 ){
						document.getElementById('displayW').innerHTML = ('coocrretin');						
						}
						if (wordW == 3 ){
						document.getElementById('displayW').innerHTML = ('prplincie');						
						}
						if (wordW == 4 ){
						document.getElementById('displayW').innerHTML = ('stgorae');						
						}
					process();

}



function process(){


	if (timerZ == 0){
	timer();
	timerZ++;
	}
	word[i] = document.getElementById('wordSent').value;

	document.getElementById('wordSent').value = "";
	

	for (var j = 0; j < wrd1.length; j++)
	{	
		if (word[i] == wrd1[j])
		{
				for(var x = 0; x < wordUsed.length; x++)
				{
					if(word[i] == wordUsed[x])
					{
					   	alreadyZ++;	
					}

				}
			if(alreadyZ == 0)
			{
					score++;
					document.getElementById('words'+i).innerHTML = ("<p><font color='green'>" + word[i] + "</font></img></p>"); 
					document.getElementById('scoreResult').innerHTML = ("<h3>" + score + "<h3>");
					foundw++;
					alreadyZ = 0;
			}
			alreadyZ = 0;
		}
	}
	if (foundw == 0)
	{
		document.getElementById('words'+i).innerHTML = ("<p><font color='red'>" + word[i] + "</font></p>"); 
	}
	foundw = 0;
	i++;

}

function timer(){
		setInterval(function(){
		if (marS > 60){
		document.getElementById('timer').innerHTML = ("Time is up!");
		document.getElementById('wordTitle').innerHTML = ("<h3>" + score + "<h3>");
		document.getElementById('buttonPlay').innerHTML = ('<input type="button" class="btn btn-default" id="ready" value="Play again!" onClick="startZ()"></button>');
		return;
		}else{
		document.getElementById('timer').innerHTML = ("<h3>" + marS + "</h3>");
		marS++;}
		},1000);
		

		setTimeout(function(){	

		},60000);
}


</script>



<div class="containerx">
<div class="bodylowk">


<div class="bodytopG">
	<div class="bodytopadjG">
		<p><h1>Greg's Advanced Boggle</h1></p>
		<br />
		<span class="subText"><p>The main idea of the game is to create as many words as you can, in 60 seconds, from the
		letters shown in the top letter box. When you are ready to begin, click the button.</p></span>
		<br />
		<div id="formId"></div>
	</div>
</div> 

<ul>
	<li>
		<p><h4>Seconds:</h4></p>
		<p><div id="timer">0</div></p>
		<p><h4>Score:</h4></p>
		<p><div id="scoreResult">0</div></p>
	</li>

	<li>
		<p>Letters:</p>
		<p><div id="displayW"><span class="lettersk">letters here</span></div></p>
		<p><input type='text' id='wordSent'/></p>
		<p><div id="buttonPlay"><input type='button' class="btn btn-default" id="ready" value="I'm ready!" onClick='startZ()'></button></div></p>
		<p><input type='button' class="btn btn-default" id ="send" value='Send' onClick='process()' disabled></button></p>
		<p><input type='button' class="btn btn-default" id="reload" value='Reload' onClick='document.location.reload(true)' disabled></p>
	</li>

	<li>
		<p><h4>Your Words:</h4></p>
		<p><div id="words0"></div></p>
		<p><div id="words1"></div></p>
		<p><div id="words2"></div></p>
		<p><div id="words3"></div></p>
		<p><div id="words4"></div></p>
		<p><div id="words5"></div></p>
		<p><div id="words6"></div></p>
		<p><div id="words7"></div></p>
		<p><div id="words8"></div></p>
		<p><div id="words9"></div></p>
		<p><div id="words10"></div></p>
		<p><div id="words11"></div></p>
		<p><div id="words12"></div></p>
		<p><div id="words13"></div></p>
		<p><div id="words14"></div></p>
	</li>
</ul>


</div>
</div>