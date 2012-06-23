<!-- 
	Hello you! Glad you're inspecting the code :) 

	  /\___/\
	 ( o   o )
	 (  =^=  ) 
	 (        )
	 (         )
	 (          )))))))))))

-->

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8' />
	<title>Andrew Capshaw | Portfolio</title>

	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='shortcut icon' type='image/x-icon' href='img/common/foreach.ico' />

	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>

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

	<div id='nav'>
		<div class='container text-right'>
			<a id='for-all' class='flowleft scroller' href='#home' onClick='mixpanel.track("ForAll Link");'>
				&forall;
			</a>
			<div class='flowleft five-px-margin-lr no-opacity' id='to-the-top'>
				to the top
			</div>
			<a href='#about' id='aboutLink' class='nav-link scroller selected-link' onClick='mixpanel.track("About Link");'>
				about
			</a>
			&middot;
			<a href='#portfolio' class='nav-link scroller' onClick='mixpanel.track("Portfolio Link");'>
				portfolio
			</a>
			&middot;
			<a href='#resume' class='nav-link scroller' onClick='mixpanel.track("Resume Link");'>
				resume
			</a>
			&middot; 
			<a href='#contact' id='contactLink' class='nav-link scroller' onClick='mixpanel.track("Contact Link");'>
				contact
			</a> 
		</div>
	</div>


	<div id='maincontainer' class='container'>

		<div class='section' id='about'>
			<noscript>
				<div class='alert'>
					Hi there. It looks like you're browsing without javascript. My site will function well without it, but its missing a lot of small flourishes that make the sight function a little more smoothly. Also, a heads up, the one section of my site that requires javascript to function, the "stats about me section", will simply not work for you. Sorry about that &lt;3 
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
						<h2>Hello!</h2>
						<p>
							I'm Andrew Capshaw. I'm an undergraduate studying computer science at Rice University in Houston, TX.
							This page is my personal site &amp; portfolio. Have a look around and feel free to contact me for any reason!
						</p>
						<p>
							Outside of my studies I enjoy cycling, hiking outdoors, and live music. I have also been learning guitar and writing music in my spare time for the last few years. I am currently in a experimental rock band, <a href='#'>The Fete</a>, with my friend Sarah Truesdale.
						</p>
						<p>
							Want to know more about me? I have a <a href='#' id='stats-btn' onClick='mixpanel.track("Random Stats Link");'>section of random stats about me</a> that might be of interest to you.
						</p>
						<div id="stats" class='p-top-20'>
							<h3>What am I listening to?</h3>
							<p>These are the albums I have listened to most frequently within the past month (hover for detailed stats). </p>
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
					<h2>Citrus Content Management System</h2>
					<p>
						This is my personal content management system that allows me to create, edit, and delete site content from a administration panel. It is in a constant state of upgrade, and I am constantly thinking about ways to make it better.

						<div class='url'>
							<em>Currently being revamped</em>
						</div>
					</p>
				</div>
				<div class='main flowright'>
					<div class='outer-shell'>
						<div class='inner-shell portfolio citrus-cms-img'>
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
							<em>Not yet on my new site</em>
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
		</div>

		<div class='section' id='resume'>
			<div class='clear-both p-top-20'>
				<a href='#'>
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
							<a href='#'>Here</a> is a printable / archievable pdf resume you can download for those situations where you find yourself thinking, "I really wish I had a pdf of Andrew's resume". Enjoy!
						</p>
					</div>
				</div>

				<div class='clear-both'>
					<!-- -->
				</div>
			</div>
		</div>

		<div class='section' id='contact'>
			<div class='clear-both p-top-20'>
				<div class='side-bar flowleft'>
						<div class='outer-shell'>
							<div id='contactCanvas' class='inner-shell resume-img'>
								<div class='spaceObject' id='sun' mass='1500' xcomp='0' ycomp='0'>
									<!-- -->
								</div>
								<div class='spaceObject' id='earth' mass='2' xcomp='-5' ycomp='1'>
									<!-- -->
								</div>
								<div class='spaceObject' id='planetx' mass='1' xcomp='6' ycomp='-1'>
									<!-- -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class='main flowright'>
					<div class='main-content'>
						<h2>Contact Me</h2>
						<p>
							Feel free to get in contact me for any reason you'd like. My email is <strong><span>capshaw</span><span>&#64;</span><span>rice.edu</span></strong>
						</p>
						<p>
							Feel free to join me on any of my profiles accross the web!
							<ul>
								<li>Github, <a href='https://github.com/capshaw'>capshaw</a></li>
								<li>Last.fm, <a href='http://www.last.fm/user/premendax'>premendax</a></li>
								<li>Linked In, <a href='http://www.linkedin.com/pub/andrew-capshaw/50/883/720'>Andrew Capshaw</a></li>
								<li>Turntable, <A href='http://turntable.fm'>Ra</a></li>
							</ul>
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
		<div class='container'>
			<div class='clear-both'>
				<div class='main flowleft'>
					<div class='quote'>
						"The truth may be puzzling. It may take some work to grapple with. It may be counterintuitive. It may contradict deeply held prejudices. It may not be consonant with what we desperately want to be true. But our preferences do not determine what's true." <span> - Carl Sagan</span>
					</div>
				</div>

				<div class='side-bar flowright'>
					<a href='#home' class='scroller flowright'>Convenient link to the top</a>
				</div>

				<div class='clear-both'>
					<!-- -->
				</div>
			</div>
		</div>
	</div>

	<script type='text/javascript' src='js/index.js'></script>

</body>
</html>