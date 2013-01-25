triggered_last_fm = false

/*
 * Click handlers and other stuff to handle when the page loads.
 */
$(document).ready(function() {

    /* Load the last.fm data when the music link is clicked. */
    loadLastFmData();
});

/**
 * Load data via the last.fm api
 */
function loadLastFmData() {

    /* Keep track if we've called the api already on this site load. */
    if(triggered_last_fm) return;
    triggered_last_fm = true

    $.ajax({
        url: 'http://ws.audioscrobbler.com/2.0/',
        data: {
            method : 'user.getrecenttracks',
            limit  : 2,
            format : 'json',
            user   : 'premendax',
            api_key: 'fdae06d5f55e33f313eec0d691b201b8'
        },
        timeout: 3000,
        success: function(data){lastFmSuccessHandler(data);},
        error: function(xhr, textStatus, errorThrown){lastFmErrorHandler(xhr, textStatus, errorThrown);},
        dataType: 'json'
    });
}

/**
 * Load the last.fm data into the music drawer.
 */
function lastFmSuccessHandler(data) {

    // $('#last_fm_container').removeClass('hidden');

    /* Iterate through the albums to append them to the music div. */
    console.log(data);
    var tracks = data.recenttracks.track;
    console.log(tracks);
    // for(track_id in tracks) {
        var track = tracks[1]; //track_id
        var url = track.url;
        var name = track.name;
        var artist = track.artist['#text'];
        var newSong = jQuery('<div/>', {
            id: 'song-' + track_id,
            data_artist : artist,
            data_song_name : name
        }).append($('<a/>', {
            href : url,
            text : name
        })).append($('<span/>', {
            text : ', ' + artist
        }));

        newSong.appendTo($('#song_list')).fadeTo('slow', 1);
    // }
}

/**
 * Let the user know that the last.fm api isn't working.
 */
function lastFmErrorHandler(xhr, textStatus, errorThrown){ }