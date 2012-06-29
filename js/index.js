
/* Has the stats bin been opened yet? */
var triggered = false;

/* Bind the stats bin button to the function that opens the stats section */
$('#stats-btn').click(function(event){
	event.preventDefault();
	openStatsSection();
});

/* Bind the forall icon to the tunction that shows the 'to the top' text */
$("#for-all").hover(
	function () {
    	$("#to-the-top").switchClass('no-opacity', 'full-opacity', 400, 'easeInSine', null);
    }, 
    function () {
    	$("#to-the-top").switchClass('full-opacity', 'no-opacity', 400, 'easeInSine', null);
	}
);

/* Binds the nav-link class to the jquery scrolling functionality s.t. when
 * links are clicked the links scroll the user to the proper. */
$('.scroller').click(function(event){

    var $anchor = $(this);

    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 40
    }, 1500,'easeInOutExpo');

    event.preventDefault();
});

/* Binds the scrolling of the user to the check of where the user is on the page.
 * The function then highlights the proper link in the nav bar based upon where 
 * the top 25% of the user's viewable area is. */
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

/* Function that opens the stats bin and loads the lastfm data */
function openStatsSection(){
	if(!triggered){

		triggered = true; 

		$('#stats').show('slow');

		var request = $.ajax({
			url: "modules/lastFmStats/getTopAlbums.php",
			type: "POST",
			data: {limit : 10},
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
}

/* Physics constants */
var G = 6.6726 * Math.pow(10, -11);
var G = 1.5;

/* The animation frame time */
var frameTime = 40;

/* Get the planets / suns / asteroids we want to put in motion */
var celestialBodies = [];
$('.spaceObject').each(function(){celestialBodies.push(this.id)});

/* Function that is called every frameTime seconds to make the objects move */
function updateCosmos(){

	var unseen = celestialBodies.slice();

	var initialCount = celestialBodies.length;

	/* For each unique pair of items, compute the force, acceleration and 
	 * update the item's velocity */
	var i;
	for(i=0; i<initialCount; i++){
		bodyName = unseen.pop();
		var body = $('#' + bodyName);
		var x = body.position().left;
		var y = body.position().top;
		var mass = body.attr('mass');
		// console.log(x + '/' + y + '/' + mass);

		var remaining = unseen.length;
		var j;
		for(j=0; j<remaining; j++){
			secondBodyName = unseen[j];
			var secondBody = $('#' + secondBodyName);

			var x2 = secondBody.position().left;
			var y2 = secondBody.position().top;
			var mass2 = secondBody.attr('mass');
			// console.log('     ' + x2 + '/' + y2 + '/' + mass2);

			var leDistance = distance (x, y, x2, y2);
			var sharedForce = forceBetweenObjects_keplers3rd(mass, mass2, leDistance);
			var bodyAcceleration  = accelOnForce(sharedForce, mass);
			var body2Acceleration = accelOnForce(sharedForce, mass2);

			var angle = findAngle(x, y, x2, y2);
			var xAccel = findXComponent(bodyAcceleration, angle);
			var yAccel = findYComponent(bodyAcceleration, angle);
			var x2Accel = findXComponent(body2Acceleration, angle);
			var y2Accel = findYComponent(body2Acceleration, angle);

			if(y > y2){
				xAccel *= -1;
				// console.log(bodyName + ' deflected *-1 on x ('+x+','+y+')');
			}else{
				x2Accel *= -1;
				// console.log(bodyName + ' not deflected *-1 on x ('+x+','+y+')');
			}

			if(y > y2){
				yAccel *= -1;
			}else{
				// console.log(bodyName + ' not deflected *-1 on y ('+x+','+y+')');
				y2Accel *= -1;
			}

			// console.log(xAccel + '/' + yAccel + '/' + x2Accel + '/' + y2Accel);

			/* SIMPLY ADD TO VELOCITY HERE */
			body.attr('xcomp', parseFloat(body.attr('xcomp')) + xAccel);
			body.attr('ycomp', parseFloat(body.attr('ycomp')) + yAccel);
			secondBody.attr('xcomp', parseFloat(secondBody.attr('xcomp')) + x2Accel);
			secondBody.attr('ycomp', parseFloat(secondBody.attr('ycomp')) + y2Accel);

			// console.log(body.attr('xcomp') + '/' + body.attr('ycomp') + '/' + secondBody.attr('xcomp') + '/' + secondBody.attr('ycomp'))

		}
	}

	/* Actually update locations based upon the velocity */
	for(bodyID in celestialBodies){
		var body = $('#' + celestialBodies[bodyID]);

		// var dot = $('<div class="dot"><!-- --></div>');
		// dot.css('left', body.css('left'));
		// dot.css('top', body.css('top'));		
		// $("#contactCanvas").append(dot);

		body.css('left', parseInt(body.css('left')) + parseInt(body.attr('xcomp')));
		body.css('top', parseInt(body.css('top')) + parseInt(body.attr('ycomp')));

		// console.log(parseInt(body.attr('xcomp')))
		// console.log(parseInt(body.attr('ycomp')))
		// console.log('    ' + celestialBodies[bodyID] + ' : ' + body.css('left') + ' ' + body.css('top'));
	}

}

function distance (x1, y1, x2, y2){
	return Math.sqrt(Math.pow(x1-x2, 2) + Math.pow(y1-y2, 2));
}

function forceBetweenObjects_keplers3rd(mass1, mass2, radius){
	return G * mass1 * mass2 / Math.pow(radius + 0.00001, 2);
}

function accelOnForce(force, mass){
	return force/mass;
}

function findYComponent(magnitude, degree){
	return Math.cos(degree) * magnitude;
}

function findXComponent(magnitude, degree){
	return Math.sin(degree) * magnitude;
}

function findAngle (x1, y1, x2, y2){
	return Math.atan((x1-x2)/(y1-y2 +0.00001));
}

setInterval(updateCosmos, frameTime);