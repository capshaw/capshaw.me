/* Has the stats bin been opened yet? */
var triggered = false;

/*
 * Click & other handlers are bound when the page loads
 */
$(document).ready(function() {

	/* Bind the stats bin button to the function that opens the stats section */
	$('#stats-btn').click(function(event){
		event.preventDefault();
		openStatsSection();
	});

	/* Binds the nav-link class to the jquery scrolling functionality s.t. when
	 * links are clicked the links scroll the user to the proper. */
	$('.scroller').click(function(event){

	    var $anchor = $(this);

	    $('html, body').stop().animate({
	        scrollTop: $($anchor.attr('href')).offset().top
	    }, 1500,'easeInOutExpo');

	    event.preventDefault();
	});
});

/* Function that opens the stats bin and loads the lastfm data */
function openStatsSection(){
	if(!triggered){

		triggered = true;

		$('#stats').show('slow');
		$('#stats-btn').hide();

		var request = $.ajax({
			url: "modules/lastFmStats/getTopAlbums.php",
			type: "POST",
			data: {limit : 10},
			dataType: "json",
			timeout: 5000,
			error: function(xhr, textStatus, errorThrown) {
				$('#lastFmError').show();
				$('#lastFmContainer').removeClass('loading');
			}
		});

		request.done(function(data) {

			$('#lastFmContainer').removeClass('loading');

			console.log(data);

			var albumsArray = data.topalbums.album;
			if(albumsArray == null){
				$('#lastFmError').show();
			}
			for(albumId in albumsArray) {
				var album = albumsArray[albumId];
				var imgURL = album.image[2];
				var playcount = album.playcount;
				var url = album.url;
				var name = album.name;
				var artist = album.artist.name;

				var newAlbum = jQuery('<a/>', {
					id: 'album' + albumId,
					href: url,
					class: 'album',
					title: artist+'\n'+name+'\n'+playcount+' track plays',
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