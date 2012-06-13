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

</head>

<body id='home'>

	<div id='nav'>
		<div class='container text-right'>
			<div class='forall flowleft'>
				&forall;
			</div>
			<a href='#' id='aboutLink' class='navlink selected-link'>
				about
			</a>
			&middot;
			<a href='#' class='navlink'>
				portfolio
			</a>
			&middot;
			<a href='#' class='navlink'>
				resume
			</a>
			&middot; 
			<a href='#aboutme' id='contactLink' class='navlink'>
				contact
			</a> 
		</div>
	</div>

	<div id='maincontainer' class='container'>

		<div id='about' class='flowleft'>
			<div class='outer-shell'>
				<div class='inner-shell me'>
					<!-- -->
				</div>
			</div>
			<div class='main-content' id='aboutme'>
				<p>Hello, I'm Andrew!</p>

				<p>
					I'm an undergraduate studying computer science at <a href='#'>Rice University</a> in Houston, TX.
				</p>
				<p>
					This is my personal site &amp; portfolio. Have a look around and feel free to contact me for any reason!
				</p>
				<p id='contact' class='quote'>
					Email: <a href='mailto:capshaw@rice.edu'><span>capshaw@</span>rice.edu</a><br>
					Twitter: <a href='http://twitter.com/#!/thecapshaw'>@thecapshaw</a>
				</p>
			</div>
		</div>

		<div id='main' class='flowright'>
			<div class='outer-shell'>
				<div class='inner-shell portfolio'>
					<!-- -->
				</div>
			</div>
			<div class='main-content'>
				<h2>Who am I?</h2>
				<p>
					Test. Well this is embarrassing. Somehow you've found a site that I'm currently in the process of developing.
					Feel free to click around but just know that this is still a work in progress.		
				</p>
				<p>
				Praesent dignissim erat id dui tristique imperdiet fringilla vel mauris. Morbi tortor sapien, commodo sed consectetur ac, eleifend non dolor. Vivamus ullamcorper interdum posuere. Sed bibendum viverra tortor, vitae semper mi iaculis et. Curabitur nulla tortor, cursus sed consectetur non, blandit sit amet eros. Duis congue, massa vel facilisis fermentum, nunc diam faucibus ipsum, pretium rutrum metus justo a est. Suspendisse tincidunt malesuada arcu sit amet varius. Pellentesque vel nisi nisi. Proin volutpat metus vitae diam dapibus a venenatis felis cursus. Maecenas lectus orci, malesuada feugiat interdum non, sollicitudin sit amet lorem. Suspendisse vehicula placerat dolor quis pretium. Pellentesque tristique malesuada erat, sit amet imperdiet justo aliquam sit amet. Quisque erat diam, condimentum eu aliquam ut, elementum eget turpis. Nam volutpat tellus ut orci faucibus posuere ut quis massa. Mauris egestas, augue vel tempor vestibulum, est lorem tempor mi, vel volutpat dui odio eu nunc. Proin ullamcorper augue quis purus rutrum blandit.
				</p>
				<h2>Projects</h2>
				<div class='inner-shell portfolio'>
					<!-- -->
				</div>
				<p>
				Proin a enim non ipsum porta elementum. Aliquam sollicitudin eros vitae nisi lacinia pharetra. Cras in erat at odio mollis imperdiet. Proin sodales ipsum sed lacus malesuada at lobortis ante malesuada. Aliquam vestibulum facilisis erat. Donec quis tristique augue. Quisque ut turpis nibh. Ut tincidunt rutrum ligula, ac consectetur felis pretium sed. Phasellus vitae est quis metus porttitor vestibulum eu in est. Integer pellentesque massa eget leo mattis dictum fringilla ante ullamcorper. Sed sem nulla, ultrices ut pharetra non, iaculis et leo.
				</p>
				<div class='inner-shell portfolio'>
					<!-- -->
				</div>
				<p>
				Maecenas vel augue nec est blandit tempus id at diam. Morbi volutpat tincidunt dui. Vivamus et leo justo. Phasellus suscipit nunc aliquam arcu imperdiet sit amet interdum ligula lacinia. Maecenas in metus justo. Nunc volutpat placerat pulvinar. Pellentesque mauris massa, luctus vel faucibus a, condimentum in purus. Integer lobortis blandit ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>
				<h2>Resume</h2>
				<p>
				Proin a enim non ipsum porta elementum. Aliquam sollicitudin eros vitae nisi lacinia pharetra. Cras in erat at odio mollis imperdiet. Proin sodales ipsum sed lacus malesuada at lobortis ante malesuada. Aliquam vestibulum facilisis erat. Donec quis tristique augue. Quisque ut turpis nibh. Ut tincidunt rutrum ligula, ac consectetur felis pretium sed. Phasellus vitae est quis metus porttitor vestibulum eu in est. Integer pellentesque massa eget leo mattis dictum fringilla ante ullamcorper. Sed sem nulla, ultrices ut pharetra non, iaculis et leo.
				</p>
				<h2>Contact Me</h2>
				<p>
				Maecenas vel augue nec est blandit tempus id at diam. Morbi volutpat tincidunt dui. Vivamus et leo justo. Phasellus suscipit nunc aliquam arcu imperdiet sit amet interdum ligula lacinia. Maecenas in metus justo. Nunc volutpat placerat pulvinar. Pellentesque mauris massa, luctus vel faucibus a, condimentum in purus. Integer lobortis blandit ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</p>
			</div>
		</div>

		<div class='clearboth'><!-- --></div>

	</div>

</body>
<script type='text/javascript'>
	$("#contactLink").click(function () {
		$("#contact").switchClass('quote','highlighted',500,'easeOutBounce',function(){
		  console.log('transition is done!');
		});
    });
</script>
</html>