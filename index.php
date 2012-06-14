<!-- Hello you! Glad you're inspecting the code :) -->

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

	<!-- Mixpanel Analytics -->
	<!--script type="text/javascript">(function(d,c){var a,b,g,e;a=d.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===d.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';b=d.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);c._i=[];c.init=function(a,d,f){var b=c;"undefined"!==typeof f?b=c[f]=[]:f="mixpanel";g="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config".split(" ");
		for(e=0;e<g.length;e++)(function(a){b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}})(g[e]);c._i.push([a,d,f])};window.mixpanel=c})(document,[]);
		mixpanel.init("119d3215461bea63d91687fe535a53c9");
	</script-->

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
			<a href='#' class='nav-link scroller' onClick='mixpanel.track("Resume Link");'>
				resume
			</a>
			&middot; 
			<a href='#' id='contactLink' class='nav-link scroller' onClick='mixpanel.track("Contact Link");'>
				contact
			</a> 
		</div>
	</div>


	<div id='maincontainer' class='container'>

		<div class='section' id='about'>
			<div class='side-bar flowleft'>
				<div class='outer-shell'>
					<div class='inner-shell me'>
						<!-- -->
					</div>
				</div>
			</div>

			<div class='main flowright'>
				<div class='main-content'>
					<h2>Who am I?</h2>
					<p>Hello, I'm Andrew. I'm an undergraduate studying computer science at <a href='#'>Rice University</a> in Houston, TX.
					</p>
					<p>
						This is my personal site &amp; portfolio. Have a look around and feel free to contact me for any reason!
					</p>
				</div>
			</div>

			<div class='clear-both'>
				<!-- -->
			</div>
		</div>


		<div class='section' id='portfolio'>
			<div class='clear-both p-top-20'>
				<div id='side-bar' class='side-bar flowleft'>
					<h2>Alice&amp;Love</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet euismod sem, gravida <a href='#'>pharetra mauris</a> sollicitudin at. Vivamus ac viverra lacus. Curabitur a leo est.
					</p>
				</div>
				<div class='main flowright'>
					<div class='outer-shell'>
						<div class='inner-shell portfolio' style='background:#eee url("http://placehold.it/660x300&text=Portfolio+Image") center center;'>
							<!-- -->
						</div>
					</div>
				</div>
			</div>

			<div class='clear-both p-top-20'>
				<div id='side-bar' class='side-bar flowleft'>
					<h2>Citrus Content Management System</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet euismod sem, gravida <a href='#'>pharetra mauris</a> sollicitudin at. Vivamus ac viverra lacus. Curabitur a leo est.
					</p>
				</div>
				<div class='main flowright'>
					<div class='outer-shell'>
						<div class='inner-shell portfolio' style='background:#eee url("http://placehold.it/660x300&text=Portfolio+Image") center center;'>
							<!-- -->
						</div>
					</div>
				</div>
			</div>

			<div class='clear-both p-top-20'>
				<div id='side-bar' class='side-bar flowleft'>
					<h2>The Greedy Painters</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet euismod sem, gravida <a href='#'>pharetra mauris</a> sollicitudin at. Vivamus ac viverra lacus. Curabitur a leo est.
					</p>
				</div>
				<div class='main flowright'>
					<div class='outer-shell'>
						<div class='inner-shell portfolio' style='background:#eee url("http://placehold.it/660x300&text=Portfolio+Image") center center;'>
							<!-- -->
						</div>
					</div>
				</div>

				<div class='clear-both'>
					<!-- -->
				</div>
			</div>
		</div>
	</div>


	<script type='text/javascript'>
		$("#contactLink").click(function () {
			$("#contact").switchClass('quote','highlighted',500,'easeOutBounce',function(){
			  // console.log('transition is done!');
			});
	    });

	    $("#for-all").hover(
	    	function () {
		    	$("#to-the-top").switchClass('no-opacity', 'full-opacity', 1000, 'easeInSine', null);
		    }, 
		    function () {
		    	$("#to-the-top").switchClass('full-opacity', 'no-opacity', 1000, 'easeInSine', null);
	    	}
	    );

		/* Binds the nav-link class to the jquery scrolling functionality. */
	    $('.scroller').bind('click', function(event){

	        var $anchor = $(this);
	 
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500,'easeInOutExpo');

	        event.preventDefault();
	    });
	</script>
						<!-- 		<p id='contact'>
						<span class='tag'>Email</span>
						<a href='mailto:capshaw@rice.edu'><span>capshaw@</span>rice.edu</a><br>
						<span class='tag'>Twitter</span> 
						<a href='http://twitter.com/#!/thecapshaw'>@thecapshaw</a>
					</p> -->
</body>
</html>