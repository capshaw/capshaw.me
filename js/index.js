
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
