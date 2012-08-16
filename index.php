<!--
	Hello you ~ Have a good day!

	  /\___/\
	 ( o   o )   GATO
	 (  =^=  )
	 (        )
	 (         )
	 (          )))))))))))
-->
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8' />
	<meta name="description" content="Portfolio and personal website of Andrew Capshaw.">

	<title>Andrew Capshaw | Portfolio</title>

	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='shortcut icon' type='image/x-icon' href='img/common/foreach.ico' />

	<script type='text/javascript' src="js/jquery-1.7.2.min.js"></script>
	<script type='text/javascript' src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<script type='text/javascript' src="js/jquery.easing.1.3.js"></script>

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
</head>

<body id='home'>
	<div id='container'>
		<div id='nav'>
			<div class='container text-right'>
				<a id='for-all' class='flowleft scroller' href='#home'>
					Andrew Capshaw
				</a>
				<a href='#about' id='aboutLink' class='nav-link scroller selected-link'>
					about
				</a>
				&middot;
				<a href='#portfolio' class='nav-link scroller'>
					projects
				</a>
				&middot;
				<a href='#resume' class='nav-link scroller'>
					resume
				</a>
				&middot;
				<a href='#contact' id='contactLink' class='nav-link scroller'>
					contact
				</a>
			</div>
		</div>
		<div id='maincontainer' class='container'>
			<div class='section' id='about'>
				<noscript>
					<div class='alert'>
						Hi there. It looks like you're browsing without javascript. My site will function well without it, but its missing a lot of small flourishes that make the site function a little more smoothly. Also, a heads up, the one section of my site that requires javascript to function, the "stats about me section", will simply not work for you. Sorry about that.
					</div>
				</noscript>
				<div class='clear-both p-top-20'>
					<div class='side-bar flowleft'>
						<div class='outer-shell'>
							<div class='inner-shell me'>
								<!-- -->
							</div>
						</div>
					</div>
					<div class='main flowright'>
						<div class='main-content'>
							<h2>Hey there!</h2>
							<p>
								I'm an undergraduate studying computer science at <a href='http://www.rice.edu/' target='_blank'>Rice&nbsp;University</a> in Houston, TX.
								This page is my personal site &amp; portfolio. Have a look around and feel free to contact me if you want!
							</p>
							<p>
								In my free time, I enjoy cycling, hiking outdoors, and live music. I have also been learning guitar and writing music in my spare time for the last few years.
							</p>
							<p>
								Like data? Want to know more about me? I have a <a href='#' id='stats-btn'>section of random stats about me</a> that might be of interest to you.
							</p>
							<div id='stats' class='p-top-20'>
								<h3>What am I listening to?</h3>
								<p>These are the albums I have listened to most frequently within the past month (hover for detailed stats). </p>
								<p id='lastFmError' class='alert'>
									The Last.fm API doesn't seem to be working at the moment. Sorry about that. Try back later?
								</p>
								<div id='lastFmContainer' class='loading'>

								</div>
								<p class='small-print'>Data courtesy of <a href='http://last.fm'>last.fm</a></p>
							</div>
						</div>
					</div>

					<div class='clear-both'>
						<!-- -->
					</div>
				</div>
			</div>
			<div class='section' id='portfolio'>
				<div class='clear-both p-top-20'>
					<div id='side-bar' class='side-bar flowleft'>
						<h2>Alice&amp;Love</h2>
						<p>
							My current project as part of the <a href='http://theowlden.com'>Owl Den</a> team. The site is an online marketplace for women to trade their used clothing using a virtual currency called teacups.

							<div class='url'>
								<a href='http://aliceandlove.com/'>aliceandlove.com</a>
							</div>
						</p>
					</div>
					<div class='main flowright'>
						<div class='outer-shell'>
							<div class='inner-shell portfolio alice-and-love-img'>
								<!-- -->
							</div>
						</div>
					</div>
				</div>
				<div class='clear-both p-top-20'>
					<div id='side-bar' class='side-bar flowleft'>
						<h2>The Greedy Painters</h2>
						<p>
							This is a project based partially on the system I built for the previous <em>dot duel</em>. Painters wander the map looking for untouched spaces to paint. However, they are not very smart; they only look at adjacent cells when deciding where to move next. Painters on the map can be added and removed at the user's discretion.

							<div class='url'>
								<a href='projects/the-greedy-painters/'>Start painting!</a>
							</div>
						</p>
					</div>
					<div class='main flowright'>
						<div class='outer-shell'>
							<div class='inner-shell portfolio the-greedy-painters-img'>
								<!-- -->
							</div>
						</div>
					</div>
					<div class='clear-both'>
						<!-- -->
					</div>
				</div>
				<div class='clear-both p-top-20'>
					<div id='side-bar' class='side-bar flowleft'>
						<h2>Dot Duel</h2>
						<p>
							An early side-project centered around the HTML5 canvas. Two <em>dots</em> duel to build walls on a blank canvas, given rules of movement that the user can specify. Once a block has no space left to move, the other block wins.

							<div class='url'>
								<a href='projects/dot-duel/'>Check it out!</a>
							</div>
						</p>
					</div>
					<div class='main flowright'>
						<div class='outer-shell'>
							<div class='inner-shell portfolio dot-duel-img'>
								<!-- -->
							</div>
						</div>
					</div>
					<div class='clear-both'>
						<!-- -->
					</div>
				</div>
			</div>
			<div class='section' id='resume'>
				<div class='clear-both p-top-20'>
					<a href='files/CapshawAndrew_resume.pdf'>
						<div class='side-bar flowleft'>
							<div class='outer-shell'>
								<div class='inner-shell resume-img'>
									<!-- -->
								</div>
							</div>
						</div>
					</a>
					<div class='main flowright'>
						<div class='main-content'>
							<h2>Resume</h2>
							<p>
								<a href='files/CapshawAndrew_resume.pdf'>Here</a> is a printable / archievable pdf resume you can download for those situations where you find yourself thinking, "I really wish I had a pdf of Andrew's resume".
							</p>
						</div>
					</div>
					<div class='clear-both'>
						<!-- -->
					</div>
				</div>
			</div>
		</div>
		<div id='footer'>
			<div class='container' id='contact'>
				<div class='clear-both'>
					<div class='side-bar flowleft'>
							<h2>Contact Me</h2>
							<p>
								Feel free to get in contact me for any reason. I'd love to hear from you! My email is <span class='email'><span>capshaw</span><span>&#64;</span><span>rice.edu</span></span>
							</p>
							<p class='six'>
								<!-- Find me on social media websites -->
							</p>
						<a class='footer-image-link facebook-footer-link' href='http://facebook.com/capshaw' title='Join me on Facebook!'>
							<span>Facebook</span>
						</a>
						<div class='midbox'>
							<!-- square -->
						</div>
						<a class='footer-image-link github-footer-link' href='https://github.com/capshaw' title='See my projects on Github, including the source code for this site!'>
							<span>Github</span>
						</a>
						<div class='midbox'>
							<!-- square -->
						</div>
						<a class='footer-image-link lastfm-footer-link' href='http://last.fm/user/premendax' title='Stalk what I listen to on Last.fm!'>
							<span>Last.fm</span>
						</a>
					</div>

					<div class='clear-both'>
						<!-- -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src='js/index.js'></script>
</body>
</html>