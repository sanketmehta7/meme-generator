
		var defcolor = "rgb(255, 221, 85)";
		function colorme (indexC,me) {

			if(indexC==1){
				defcolor = "rgb(166, 191, 84)";
				document.getElementById('demoCanvas').className = "cn1";
			}
			if(indexC==2){
				defcolor = "rgb(172, 225, 227)";
				document.getElementById('demoCanvas').className = "cn2";
			}
			if(indexC==3){
				defcolor = "rgb(255, 160, 138)";
				document.getElementById('demoCanvas').className = "cn3";
			}
			if(indexC==4){
				defcolor = "rgb(255, 221, 85)";
				document.getElementById('demoCanvas').className = "cn4";
			}
		}
		function wordwrap( str, width, brk, cut ) {
 			
		    brk = brk || '\n';
		    width = width || 75;
		    width = width + width%2;
		    cut = cut || false;
		 
		    if (!str) { return str; }
		 
		    var regex = '.{1,' +width+ '}(\\s|$)' + (cut ? '|.{' +width+ '}|.+$' : '|\\S+?(\\s|$)');
		    var spaceArr = [""," ","  ","   ","    ","     ","      ","       ","        ","         ",,"          ","           ","            ","             ","              "]
		   var stage1str = str.match( RegExp(regex, 'g') ).join( brk );
		   var tempstrArr = stage1str.split(brk);
		   for(var i=0;i<tempstrArr.length;i++){
		   	if(tempstrArr[i].length<width){
		   		var concater = width/2 - ((tempstrArr[i].length + tempstrArr[i].length%2)/2);
		   		concater = spaceArr[concater];

		   		tempstrArr[i] = concater+concater+tempstrArr[i];
		   	}
		   }
		   return tempstrArr.join("\n");
		 
		}
		function addme(){
			var mytext = document.getElementById("mycontent1").value;
			var mytextArr = mytext.split("\n");
			mytext = wordwrap(mytext, 22, '\n');
			if(mytext!=""){
				//repaint image
				stage.removeAllChildren();
				drawme();
				var text = new createjs.Text(mytext, "bold 35px Montserrat", "#000");
				text.x = 50;
				text.y = 365;
	            stage.addChild(text);
	            stage.update();
	        }
		}
		function drawme(){
			//var drawingCanvas = new createjs.Shape();
			stage.clear();
			stage.removeAllChildren();
			stage.clear();
			if(currentimgindex==-1)
				bitmap = new createjs.Bitmap(defimage);
			else
				bitmap = new createjs.Bitmap(imageContainer[currentimgindex]);
            var text = new createjs.Text(person, "bold 50px Montserrat", "#000");
			text.x = 155-(person=="Jo Bakudi" || person=="Dekh Beta" ? 30:0);
			if(person=="Jo Jigga" || person=="Jo Bhura")
				text.x  = text.x - 10;
			text.y = 43;
			stage.addChild(bitmap,text);
	        stage.update();
		}
		function download(){
			var mytext = document.getElementById("mycontent1").value;
			if(mytext!=""){
				var myurl = stage.toDataURL(defcolor);
				
				var myids = 1;
				if(person=="Jo Bakudi")myids=2;
				if(person=="Dekh Beta")myids=3;
				if(person=="Jo Jigga")myids=4;
				if(person=="Jo Bhura")myids=5;
				$.ajax({
					url:"./api/addBakka.php?id="+myids
				});
				$.ajax({
					url:"./api/write.php?data="+mytext
				});
				window.open(myurl);
				setTimeout(function(){
				    var f = $('<form method="post"  action="./api/down.php"></form>');
		            f.html('<textarea style="visibility:hidden;" name="fdata">'+myurl+'</textarea>');
		            f.appendTo($('body')); // required for submission to work in Firefox
		            f.submit();
		            f.remove();					
				},100);				
			}
		}
		function choosePerson(myperson){
			if(myperson=="joBaka"){
				person = "Jo Baka";
				document.querySelector(".nav li#joBakudi").className = "";
				document.querySelector(".nav li#joBeta").className = "";
				document.querySelector(".nav li#joJigga").className = "";
				document.querySelector(".nav li#joBhura").className = "";
				document.querySelector(".nav li#joBaka").className = "sel";
				drawme();
			}
			if(myperson=="joBakudi"){
				person = "Jo Bakudi";
				document.querySelector(".nav li#joBaka").className = "";
				document.querySelector(".nav li#joBeta").className = "";
				document.querySelector(".nav li#joJigga").className = "";
				document.querySelector(".nav li#joBhura").className = "";
				document.querySelector(".nav li#joBakudi").className = "sel";
				drawme();
			}
			if(myperson=="joBeta"){
				person = "Dekh Beta";
				document.querySelector(".nav li#joBaka").className = "";
				document.querySelector(".nav li#joBakudi").className = "";
				document.querySelector(".nav li#joJigga").className = "";
				document.querySelector(".nav li#joBhura").className = "";
				document.querySelector(".nav li#joBeta").className = "sel";
				drawme();
			}
			if(myperson=="joJigga"){
				person = "Jo Jigga";
				document.querySelector(".nav li#joBaka").className = "";
				document.querySelector(".nav li#joBakudi").className = "";
				document.querySelector(".nav li#joBeta").className = "";
				document.querySelector(".nav li#joBhura").className = "";
				document.querySelector(".nav li#joJigga").className = "sel";
				drawme();
			}
			if(myperson=="joBhura"){
				person = "Jo Bhura";
				document.querySelector(".nav li#joBaka").className = "";
				document.querySelector(".nav li#joBakudi").className = "";
				document.querySelector(".nav li#joBeta").className = "";
				document.querySelector(".nav li#joJigga").className = "";
				document.querySelector(".nav li#joBhura").className = "sel";
				drawme();
			}
		}
		function handleComplete1(event){
			$(".next").show();
			$(".prev").show();
		}
		function handleFileLoad1(event) {
			var image = event.result;
			imageContainer.push(image);
		}
		function next(){
			if(currentimgindex+1!=manifest.length){
				currentimgindex++;
				drawme();
			}
		}
		function prev(){
			if(currentimgindex+1!=0){
				currentimgindex--;
				drawme();
			}
		}
		var stage;
		var imageContainer = Array();
		var manifest = Array();
		var defimage;
		var person = "Jo Baka";
		var currentimgindex = -1;
		function init() {

			stage = new createjs.Stage("demoCanvas");
			manifest = [
				{src:"memes/m1.png", id:"image-1"},
				{src:"memes/m2.png", id:"image-12"},
                {src:"memes/m3.png", id:"image0"},
                {src:"memes/m4.png", id:"image1"},
                {src:"memes/m5.png", id:"image2"}
            ];

            preload = new createjs.LoadQueue();

         
            preload.on("complete", handleComplete1);
             preload.on("fileload", handleFileLoad1);
            preload.loadManifest(manifest);

			stage.tickEnabled  = false;
			stage.tickOnUpdate = false;
			stage.tickChildren  = false;	
			stage.autoClear   = false;	
			stage.mouseEnabled   = false;
			stage.mouseChildren    = false;
			stage.removeAllEventListeners();
			defimage = new Image();
			defimage.onload = drawme;
			defimage.src = "memes/meme.png";			
		}