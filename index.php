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
	<meta name="description" content="I'm an Junior studying CS at Rice University in Houston, TX. This page is my personal site and portfolio, where I host some of my projects.">
	<meta name="viewport" content="width=320">

	<title>Andrew Capshaw</title>

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
							<h2>Andrew Capshaw</h2>
							<ul id='about-list'>
								<li>
									<span>Studying:</span>
									Junior CS major at Rice
								</li>
								<li>
									<span>Email:</span>
									<a href='mailto:capshaw@rice.edu'>
										capshaw@rice.edu
									</a>
								</li>
								<li>
									<span>Github:</span>
									<a href='http://github.com/capshaw'>
										github.com/capshaw
									</a>
								</li>
								<li>
									<span>LinkedIn:</span>
									<a href='http://linkedin.com/in/andrewcapshaw'>
										linkedin.com/in/andrewcapshaw
									</a>
								</li>
								<li>
									<span>Tech:</span>
									<ul>
										<li>
											Python, Java, PHP, MySQL, Javascript, C
										</li>
										<li>
											Git, SVN
										</li>
										<li>
											2010 Macbook Pro,
											2012 Ubuntu Desktop ("The Internet")
										</li>
									</ul>
								</li>
								<li>
									<span>Listening to:</span>
									<a href='#' id='stats-btn'>(expand)</a>
							<div id='stats'>
								<p>Most-frequently listened-to albums in the last month via <a href='http://last.fm/user/premendax'>last.fm</a></p>
								<p id='lastFmError' class='alert'>
									The Last.fm API doesn't seem to be working at the moment. Sorry about that :/
								</p>
								<div id='lastFmContainer' class='loading'>

								</div>
								<!-- <p class='small-print'>Data courtesy of <a href='http://last.fm/user/premendax'>last.fm</a></p> -->
							</div>
								</li>
							</ul>
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
						<h2>Maze Factory</h2>
						<p>
							My current free-time project. The maze factory generates a maze using a defined method (depth-first search for now, with the choice of Prim's algorithm and others in the future). Another feature I plan on implementing in the future is the ability for maze solving.

							<div class='url'>
								<a href='projects/maze-factory/'>Generate a Maze!</a>
							</div>
						</p>
					</div>
					<div class='main flowright'>
						<div class='outer-shell'>
							<div class='inner-shell portfolio maze-factory-img'>
								<!-- -->
							</div>
						</div>
					</div>
				</div>
				<div class='clear-both p-top-20'>
					<div id='side-bar' class='side-bar flowleft'>
						<h2>Alice&amp;Love</h2>
						<p>
							My summer project as part of the <a href='http://theowlden.com'>Owl Den</a> team. The site is an online marketplace for women to trade their used clothing using a virtual currency called teacups.

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
				<!-- -->
			</div>
		</div>
	</div>
	<script type='text/javascript' src='js/index.js'></script>
</body>
</html>