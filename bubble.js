

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
window.onload=function(){
		document.getElementById('displayW').innerHTML = ("<font size='2'>(word here)</font>");
		document.getElementById('scoreResult').innerHTML = ("Score : ");
		document.getElementById('timer').innerHTML = ("Seconds: <br />");


};




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
	
					document.getElementById('buttonPlay').innerHTML = "";
					document.getElementById('formId').innerHTML = ("<input type='text' id='wordSent'/><br /><br />" +  "<input type='button' value='Send another word!' onClick='process();'/><br /><br />" + "<input type='button' value='Reload' onClick='document.location.reload(true)'>"); 
										   
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
					document.getElementById('words'+i).innerHTML = ("<p><font color='#114e16'>" + word[i] + "</font></p>"); 
					document.getElementById('scoreResult').innerHTML = ("<b>Score : " + score + "</b>");
					foundw++;
					alreadyZ = 0;
			}
			alreadyZ = 0;
		}
	}
	if (foundw == 0)
	{
		document.getElementById('words'+i).innerHTML = ("<p><font color='black'>" + word[i] + "</font></p>"); 
	}
	foundw = 0;
	i++;

}

function timer(){
		setInterval(function(){
		if (marS > 60){
		document.getElementById('timer').innerHTML = ("Time is up!");
		document.getElementById('wordTitle').innerHTML = ("Score : " + score);
		document.getElementById('buttonPlay').innerHTML = ('<input type="button" value="Play Again!" onClick="document.location.reload(true)" />');
		document.getElementById('formId').innerHTML = (""); 
		return;
		}else{
		document.getElementById('timer').innerHTML = ("Seconds: <br />" + marS);
		marS++;}
		},1000);
		

		setTimeout(function(){	

		},60000);
}

