<div class="containerx">
<div class="bodylowk">
<div class="bodytopG">
	<div class="bodytopadjG">
		<p><h1>Advanced Boggle</h1></p>
		<br />
		<span class="subText"><p>The main idea of the game is to create as many words as you can, in 60 seconds, from the
		letters shown in the top letter box. When you are ready to begin, click "I'm Ready!".</p></span>
		<br />
		<div id="formId"></div>
	</div>
</div> 

<ul>
	<li>
		<p><h4>Seconds:</h4></p>
		<p><div id="timer"><h3>0</h3></div></p>
		<p><h4>Score:</h4></p>
		<p><div id="scoreResult"><h3>0</h3></div></p>
	</li>

	<li>
		<p>Letters:</p>
		<p><div id="displayW"><span class="lettersk">letters here</span></div></p>
		<p><input type='text' onkeypress="enterKeyUp(event)" id='wordSent'/></p>
		<p><div id="buttonPlay"><input type='button' class="btn btn-default" id="ready" value="I'm Ready!" onClick='startGame()'></button></div></p>
		<p><input type='button' class="btn btn-default" id ="send" value='Send' onClick='processWord()' disabled></button></p>
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

<!-- Close -->

<script type="text/javascript">

	var i = 0;
	var score = 0;
	var allowEnterKey = 0;
	var wordCountDisplay = 0;
	var randomNumber = (Math.floor(Math.random() * 4)) + 1;
	var wordSelection = "";
	var word = new Array();
	var wordsUsed = new Array();
	var foundWord = 0;
	var alreadyPicked = 0;
	var timerCount = 0;
	var newDiv = "";
	var wordDiv = "words0";

	switch(randomNumber)
	{
			case 1:
			var wordArrayList = ["hardware", "hard", "aware", "ahead", "award", "aware", "heard", "radar", "warhead", "drawer", "reward", "area", "awed", "dare", "dear", "draw", "drew", "haar", "hade", "haed", "hard", "hare", "head", "hear", "herd", "rare", "read", "rear", "rhea"];
			wordSelection = 1;
			break;
			
			case 2:
			var wordArrayList = ["correction", "correct", "concert", "incorrect", "notice", "corner", "necrotic", "erotic", "orient", "cent", "cero", "cine", "cion", "cire", "cite", "coco", "coin", "coir", "cone", "coni", "coon", "coot", "core", "corn", "cote"];
			wordSelection = 2;
			break;
			
			case 3:
			var wordArrayList = ["principle", "inclip", "inlier", "irenic", "linier", "lippen", "lipper", "nipper", "nipple", "pencil", "pincer", "pinier", "pipier", "prince", "ripple", "ceil", "cine", "cire", "clip", "epic", "lice", "lien", "lier", "line", "lipe", "lire", "nice", "pile", "rice"];
			wordSelection = 3;
			break;
			
			case 4:
			var wordArrayList = ["storage", "store", "age", "argots", "ergots", "garote", "gaster", "gaters", "gators", "grates", "greats", "groats", "oaters", "orates", "orgeat", "osetra", "aero", "ager", "ages", "ares", "arse", "arts", "ates", "ears", "east", "eats", "egos","eras", "ergo", "ergs", "eros","erst", "etas", "gaes"];
			wordSelection = 4;
			break;
	}	

	//Start function is called and a scrabble word is thrown in the div
	//when click send processWord() is called
	//

	function enterKeyUp(e){
		if(allowEnterKey == 1){
			if(e.keyCode == 13){
				processWord();
			}	
		}   	
	}

	function setFocus(){
	    document.getElementById("wordSent").focus();
	}

	  //----------//
	 //---START--//
	//----------//

	function startGame(){
		document.getElementById("buttonPlay").innerHTML= "";
		document.getElementById("send").disabled=false;	
		document.getElementById("reload").disabled =false;	

		if (wordSelection == 1 ){
			document.getElementById('displayW').innerHTML = ('darhwaer');				
		}
		if (wordSelection == 2 ){
			document.getElementById('displayW').innerHTML = ('coocrretin');						
		}
		if (wordSelection == 3 ){
			document.getElementById('displayW').innerHTML = ('prplincie');						
		}
		if (wordSelection == 4 ){
			document.getElementById('displayW').innerHTML = ('stgorae');						
		}
		if (timerCount == 0){
			timer();
			timerCount++;
		}
		setFocus();
		allowEnterKey = 1;		
	}

	  //-----------------//
	 //---PROCESS WORD--//
	//-----------------//

	function processWord(){
		word[i] = document.getElementById('wordSent').value;
		document.getElementById('wordSent').value = "";		
		for (var j = 0; j < wordArrayList.length; j++)
		{	
			//if word matches
			if (word[i] == wordArrayList[j])
			{
				//check for repeated words
				for(var x = 0; x < wordsUsed.length; x++)
				{
					if(word[i] == wordsUsed[x])
					{
					   	alreadyPicked++;	
					}
				}
				if(alreadyPicked == 0)
				{
					score++;
					document.getElementById('words'+i).innerHTML = ("<p><font color='green'>" + word[i] + "</font></img></p>"); 
					document.getElementById('scoreResult').innerHTML = ("<h3>" + score + "<h3>");
					foundWord++;					
					wordsUsed.push(word[i]);
					setFocus();
				}
				alreadyPicked = 0;
			}
		}
		if (foundWord == 0)
		{
			document.getElementById('words'+i).innerHTML = ("<p><font color='red'>" + word[i] + "</font></p>"); 
			setFocus();
		}
		foundWord = 0;
		i++;
	}

	  //----------//
	 //---TIMER--//
	//----------//

	function timer(){
		setInterval(function(){
			if (wordCountDisplay > 60){
				document.getElementById('timer').innerHTML = ("<h3>Time is up!</h3>");
				document.getElementById('wordTitle').innerHTML = ("<h3>" + score + "<h3>");
				document.getElementById('buttonPlay').innerHTML = ('<input type="button" class="btn btn-default" id="ready" value="Play again!" onClick="startGame()"></button>');
				return;
			}else{
				document.getElementById('timer').innerHTML = ("<h3>" + wordCountDisplay + "</h3>");
				wordCountDisplay++;
			}
		},1000);
		
		setTimeout(function(){	
		},60000);
	}

</script>
