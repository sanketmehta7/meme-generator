<!DOCTYPE html>
<html>
<head>
	<title>Jo-Baka Meme Creator</title>
	<meta name="description=" content="Create your own version of multi color Jo Baka jokes and slogans meme. Download and share with friends.">
	<meta name="keywords" content="Jo Baka,Jo Bakudi,Jo Bhura,Jo Jigga,Meme,Baka,Bakudi,meme creator,slogans,jokes">
	<link rel='shortcut icon' type='image/x-icon' href='joBaka-fav.png' />
	<meta name="viewport" content="width=600, user-scalable=no">
	<meta property="fb:app_id" content="1538437076387941" />
	<meta property="og:site_name" content="Jo-Baka" />
	<meta http-equiv="Cache-control" content="no-cache">
	<meta property="og:title" content="Jo-Baka Meme Creator" />
	<meta property="fb:admins" content="574842887"/>
	<meta property="og:url" content="http://sankk.in/jo-baka/" />
	<meta property="og:image" content="http://sankk.in/jo-baka/download.jpg" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:description" content="Create Jo baka memes slogans and jokes, change backgrounds and choose from variety of characters. Download them on your mobile and share them with your friends." />
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href="style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body onload="init()" >
	<div class="modalAd">
		<cross>x</cross>
	</div>
	<div class="logo" onclick="$(document).scrollTop(0);$('.logo').removeClass('bot');testScroll=0;"></div>
	<div class="cont">
		<h1>Meme Creator</span></h1>
		<span style="color:#aaa;">Create memes slogans and jokes, change backgrounds and choose from variety of characters. Download them on your mobile and share them with your friends.<br/><br/></span>
		<ul class="nav">
			<li onclick="choosePerson('joBaka');" id="joBaka" class="sel">Jo Baka</li>
			<li onclick="choosePerson('joBakudi');" id="joBakudi">Jo Bakudi</li>
			<li onclick="choosePerson('joJigga');" id="joJigga">Jo Jigga</li>
			<li onclick="choosePerson('joBhura');" id="joBhura">Jo Bhura</li>
			<li onclick="choosePerson('joBeta');" id="joBeta">Dekh beta</li>			
		</ul>
		<div class="prev" onclick="prev()"></div>
		<canvas id="demoCanvas" width="500" height="520" class="cn4">
			alternate content
		</canvas>
		<div class="next" onclick="next()"></div>
		<br/><br/>
		<div style="float:left;width:310px" >
			<textarea id="mycontent1" maxlength="72"></textarea>
			<div style="float:left;margin-left:5px;text-align: left;font-size:16px;color:white;">Your text goes here^ (add spaces to adjust)</div>
			<br/>
			<button value="Create" id="addme2" onclick="addme()">Create Image</button>
			<button value="Download It" id="downme" onclick="download()">Download It</button>
			<br/>
			<br/>
		</div>
		<div style="float:right;margin-left:5px;text-align: center;font-size:16px;color:white;width:190px;">
			<span class="c1" onclick="colorme(1,this);"></span>
			<span class="c2" onclick="colorme(2,this);"></span>
			<span class="c3" onclick="colorme(3,this);"></span>
			<span class="c4" onclick="colorme(4,this);"></span>
			<div style="clear:both;">Backcolor</div>
		</div>
		<div style="clear:both;"></div>
	</div>
<script src="http://code.createjs.com/easeljs-0.6.0.min.js"></script>
	<script src="http://code.createjs.com/preloadjs-0.4.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="main.js?dd=14sh5"></script>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1538437076387941',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  var testScroll = 0;
  $( document ).scroll(function() {
  	if($( document ).scrollTop()>=200 && testScroll==0){
  		testScroll=1;
	  $(".logo").fadeOut(200,function(){
	  	$(".logo").addClass("bot");
	  	$(".logo").fadeIn(200);
	  });
	 }
	 if(testScroll==1 && $( document ).scrollTop()<200){
	 	$(".logo").fadeOut(200,function(){
	 		testScroll = 0;
	  	$(".logo").removeClass("bot");
	  	$(".logo").fadeIn(200);
	  });
	 }
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50737860-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</body>
</html>