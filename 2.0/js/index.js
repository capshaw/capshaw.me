triggered_last_fm = false
arrow_offset = 10

/*
 * Click handlers
 */
$(document).ready(function() {

    /* Make all hidden drawers (minus hash) hidden for the people with JS. */
    if(window.location.hash) {
        hash = '#' + window.location.hash.substring(1)
        $(hash).show()
        $(hash).addClass('open')
    }

    /* Resize all elements to the size of the screen. */
    $('.container').css('height', $(window).height());
    $(window).resize(function() {
        $('.container').css('height', $(window).height());
    });

    /* Load the last.fm data when the music link is clicked. */
    $('#music_link').click(function(){loadLastFmData()})

    /* On nav click, show the correct frames. */
	$('.switcher').click(function(){

        /* Don't open the same drawer twice in a row. */
        new_name = $(this).attr('href');
        $to_open = $(new_name);

        /* Close an already open container. */
        if($to_open.hasClass('open')) {
            $to_open.hide('slide', { direction: 'left' }, 500)
            $to_open.removeClass('open')
            window.location.hash = ''
            return false
        }

        /* There is nothing open. */
        $open_drawers = $('.open');
        if($open_drawers.length == 0) openClose()

        /* Close and old container and open a new one. */
        $open_drawers.hide('slide', { direction: 'left' }, 500, function() { openClose() });

        function openClose() {
            $to_open.show('slide', { direction: 'left' }, 500)
            $open_drawers.removeClass('open')
            $to_open.addClass('open')
            return false
        }
	});

    /* Track the user's interaction with the albums. */
    $album_info = $('#album_info');
    $album_info_inner = $('#album_info_inner');
    $album = $('#album');
    $artist = $('#artist');
    $plays  = $('#plays');
    $(document).on('mouseover', '.album', function(){
        $album.html($(this).attr('album'));
        $artist.html($(this).attr('artist'));
        $plays.html($(this).attr('plays'));
        $album_info.show();
    });
    $(document).on('mouseout', '.album', function(){
        $album_info.hide();
    });

    /* Move the album info box always (lulz). */
    $(document).mousemove(function(e){
      $('#album_info').css('left', $('#music').position().left+$('#music').outerWidth()+arrow_offset);
      $('#album_info').css('top', e.pageY - $('#album_info').height()/2);
   });
});

/**
 * Load data via the last.fm api
 */
function loadLastFmData() {
    if(triggered_last_fm) return;

    triggered_last_fm = true

    $.ajax({
        url: 'http://ws.audioscrobbler.com/2.0/',
        data: {
            method : 'user.gettopalbums',
            limit  : 10,
            period : '1month',
            user   : 'premendax',
            api_key: 'fdae06d5f55e33f313eec0d691b201b8'
        },
        success: function(data){lastFmSuccessHandler(data);},
        dataType: 'xml'
    });
}

/**
 * Load the last.fm data into the music drawer.
 */
function lastFmSuccessHandler(data) {
    $('#last_fm_loading').hide();
    data = $.xml2json(data);
    console.log(data);

    var albumsArray = data.topalbums.album;
    if(albumsArray == null){
        // $('#lastFmError').show();
        alert("implement this error")
    }
    for(albumId in albumsArray) {
        var album = albumsArray[albumId];
        var imgURL = album.image[3];
        var playcount = album.playcount;
        var url = album.url;
        var name = album.name;
        var artist = album.artist.name;

        var newAlbum = jQuery('<a/>', {
            id: 'album' + albumId,
            href: url,
            class: 'album',
            artist : artist,
            album  : name,
            plays  : playcount
        });

        newAlbum.css('background-image', 'url('+imgURL+')');

        newAlbum.appendTo($('#start_album_list')).fadeTo('slow', 1);
    }
}