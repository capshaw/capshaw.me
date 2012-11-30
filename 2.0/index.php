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

	<div class='float-wrap'>
		<div class='container' id='intro'>
			<h1 class='transition-color'>Andrew Capshaw</h1>
			<p><a href='mailto:capshaw@rice.edu' data-color='rgba(51, 150, 255, 0.8)'>capshaw@rice.edu</a></p>
			<p>I'm an Junior studying computer science at Rice University in Houston, TX.
				On this site I host a few of my <a href='#projects' class='switcher' data-color='rgba(255,82,82, 0.8)'>projects</a>, and
				some hobby <a href='#code' class='switcher' data-color='rgba(255,196,0, 0.8)'>code</a>.
			</p>
			<p><a href='#'>I like to listen to music.</a></p>
		</div>

		<div class='drawer hidden container' id='projects'>
			<p>
				projects
			</p>
		</div>
		<div class='drawer hidden container' id='code'>
			<p>
				View some cool projects (including this site) at my github account.
			</p>
		</div>
	</div>

	<!-- JQuery & my javascript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
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