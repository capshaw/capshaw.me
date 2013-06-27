triggered_last_fm = false
TRACKS_TO_LOAD = 2;
ONLY_NEW = true;

/*
 * Click handlers and other stuff to handle when the page loads.
 */
$(document).ready(function() {

    if ($('#about-toggle').length != 0) {
        $('#about-toggle').click(function(e){
            e.preventDefault();
            $('#about').slideDown();
            $('#show-more-link').hide();
            return false;
        })
    }

    /* Load the last.fm data when the music link is clicked. */
    loadLastFmData();
});

/**
 * Load data via the last.fm api
 */
function loadLastFmData() {

    /* Keep track if we've called the api already on this site load. */
    if(triggered_last_fm) return;
    triggered_last_fm = true;

    $.ajax({
        url: 'http://ws.audioscrobbler.com/2.0/',
        data: {
            method : 'user.getrecenttracks',
            limit  : TRACKS_TO_LOAD,
            format : 'json',
            user   : 'premendax',
            api_key: 'fdae06d5f55e33f313eec0d691b201b8'
        },
        timeout: 4000,
        success: function(data){lastFmSuccessHandler(data);},
        error: function(xhr, textStatus, errorThrown){lastFmErrorHandler(xhr, textStatus, errorThrown);},
        dataType: 'json'
    });
}

/**
 * Load the last.fm data into the music drawer.
 */
function lastFmSuccessHandler(data) {

    $('#song-list-loading').addClass('hidden');
    $('#song-list-error').addClass('hidden');

    /* Iterate through the albums to append them to the music div. */
    var tracks = data.recenttracks.track;

    console.log(tracks);

    var now = new Date();
    var utc = Date.UTC(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        now.getHours(),
        now.getMinutes()
    );
    var tz = now.getTimezoneOffset() * 60 * 1000;
    console.log(tz)

    $('#song-list').removeClass('hidden');
    for(track_id in tracks) {
        var track = tracks[track_id];
        var url = track.url;
        var name = track.name;

        var music_date = "";
        if (track.date) {
            var date = track.date.uts * 1000;
            var milliseconds_since_play = utc - date + tz;

            /* Find how to express track play. */
            var a_second = 1000;
            var a_minute = 60 * a_second;
            var an_hour = 60 * a_minute
            var a_day = 24 * an_hour;

            var time = 1;
            var unit = "unknown";
            if (milliseconds_since_play > a_day) {
                time = Math.round(milliseconds_since_play / a_day);
                unit = "day";
            } else if (milliseconds_since_play > an_hour) {
                time = Math.round(milliseconds_since_play / an_hour);
                unit = "hour";
            } else if (milliseconds_since_play > a_minute) {
                time = Math.round(milliseconds_since_play / a_minute);
                unit = "minute";
            } else {
                time = Math.round(milliseconds_since_play / a_second);
                unit = "second";
            }
            var s = time > 1 ? "s" : "";
            music_date =  time + ' ' + unit + s + ' ago';
        } else {
            music_date = 'right now'
        }

        var artist = track.artist['#text'];
        var newSong = jQuery('<div/>', {
            id: 'song-' + track_id,
            data_artist : artist,
            data_song_name : name,
            class: 'last-fm-container'
        }).append($('<span/>', {
            text : music_date,
            class: 'pull-right'
        })).append($('<i/>', {
            class: 'icon icon-music'
        })).append($('<a/>', {
            href : url,
            text : name + ' \u00B7 '
        })).append($('<span/>', {
            class: 'artist',
            text : artist + ' '
        }))

        /* Only display a track if there is a new one to display. */
        if (ONLY_NEW && milliseconds_since_play > an_hour) {
            continue;
        }

        newSong.appendTo($('#last-fm'))
        if (TRACKS_TO_LOAD == 2) break;
    }
    $('#last-fm').fadeTo('3000', 1);
}

/**
 * Let the user know that the last.fm api isn't working.
 */
function lastFmErrorHandler(xhr, textStatus, errorThrown){
    console.log(errorThrown);
}
