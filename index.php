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
							Want to know more about me? I have a <a href='#stats' class='scroller' id='stats-btn'>section of random stats about me</a> that might be of interest to you.
						</p>
						<div id="stats" class='p-top-20'>
							<h3>What am I listening to?</h3>
							<p>These are the albums I have listened to most frequently within the past month (hover for detailed stats). Other sections are coming soon!</p>
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
						<div class='inner-shell contact-img'>
							<!-- -->
						</div>
					</div>
				</div>

				<div class='main flowright'>
					<div class='main-content'>
						<h2>Contact Me</h2>
						<p>
							Something
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

	<!--div class='topQuarter'>
	</div -->

	<script type='text/javascript'>
		
		var triggered = false;

		$('#stats-btn').click( function(){

			if(!triggered){

				triggered = true; 

				// $('#stats-btn').css('color', 'blue');
				$('#stats').show('slow');

				var request = $.ajax({
					url: "modules/lastFmStats/getTopAlbums.php",
					type: "POST",
					data: {ajaxCall : true},
					dataType: "json"
				});

				request.done(function(msg) {

					$('#lastFmContainer').removeClass('loading');

					var albumsArray = msg.topalbums.album;
					for(albumId in albumsArray) {
						var album = albumsArray[albumId];
						var imgURL = album.image[2];
						var playcount = album.playcount;
						var url = album.url;
						var name = album.name;

						console.log(name + "/" + imgURL);

						var newAlbum = jQuery('<a/>', {
							id: 'album' + albumId,
							href: url,
							class: 'album',
							title: name+'\n'+playcount+' track plays',
						});

						newAlbum.css('background-image', 'url('+imgURL+')');

						newAlbum.appendTo($('#lastFmContainer')).fadeTo('slow', 1);
					}
				});

				request.fail(function(jqXHR, textStatus) {
					console.log( "Request failed; " + textStatus );
				});
			}
		})

	    $("#for-all").hover(
	    	function () {
		    	$("#to-the-top").switchClass('no-opacity', 'full-opacity', 400, 'easeInSine', null);
		    }, 
		    function () {
		    	$("#to-the-top").switchClass('full-opacity', 'no-opacity', 400, 'easeInSine', null);
	    	}
	    );

		/* Binds the nav-link class to the jquery scrolling functionality. */
	    $('.scroller').click( function(event){

	        var $anchor = $(this);
	 
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top - 40
	        }, 1500,'easeInOutExpo');

	        event.preventDefault();
	    });

	    $(window).scroll(
	    	function(){

	    		var navLinks = $('.nav-link');

	    		var scrollTop = $(window).scrollTop();
	    		var height = $(window).height();

	    		var top50PercentOfPage = scrollTop + height/4;

	    		var i;
	    		for(i=0; i<navLinks.length; i++) {

	    			var sectionPosition = $($(navLinks[i]).attr('href')).offset().top;

	    			if(sectionPosition < top50PercentOfPage){

	    				/* Still cycling through, unless we're at the last element */
	    				if(i == navLinks.length-1){
		    				navLinks.removeClass('selected-link');
		    				$(navLinks[i]).addClass('selected-link');
	    				}
	    			}else{
	    				(i >= 1) ? i -= 1 : i;
	    				navLinks.removeClass('selected-link');
	    				$(navLinks[i]).addClass('selected-link');
	    				break;
	    			}
	    		}

	    	}
	    );
	</script>
						<!-- 		<p id='contact'>
						<span class='tag'>Email</span>
						<a href='mailto:capshaw@rice.edu'><span>capshaw@</span>rice.edu</a><br>
						<span class='tag'>Twitter</span> 
						<a href='http://twitter.com/#!/thecapshaw'>@thecapshaw</a>
					</p> -->
</body>
</html>