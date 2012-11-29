<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8' />
	<meta name="description" content="I'm an Junior studying CS at Rice University in Houston, TX. This page is my personal site and portfolio, where I host some of my projects.">
	<meta name="viewport" content="width=320">

	<title>Andrew Capshaw</title>

	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='shortcut icon' type='image/x-icon' href='img/common/foreach.ico' />

</head>

<body>

	<div id='top'></div>
	<div id='left'></div>
	<div id='right'></div>
	<div id='bottom'></div>

	<div class='container'>
		<h1 class='transition-color'>Andrew Capshaw</h1>
	</div>

	<div class='stripe bottom-stripe transition-border'>
		<div class='container'>
			<p>I'm an Junior studying computer science at Rice University in Houston, TX.
				Here are a few of my <a href='#projects' class='switcher' data-color='rgba(255,82,82, 0.8)'>projects</a>, some <a href='#code' class='switcher' data-color='rgba(136,219,125, 0.8)'>code</a> and a few ways to <a href='#contact' class='switcher' data-color='rgba(140, 179, 230, 0.8)'>contact me</a>.</p>
		</div>
	</div>

	<div class='drawer hidden' id='contact'>
		<div class='container'></div>
	</div>
	<div class='drawer hidden' id='projects'>
		<div class='container'></div>
	</div>
	<div class='drawer hidden' id='code'>
		<div class='container'></div>
	</div>

	<!-- JQuery & my javascript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<script type='text/javascript' src='js/index.js'></script>

	<!-- Google Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32825047-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>