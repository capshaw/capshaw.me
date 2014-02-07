var a;

/**
 * On document load, get last.fm data and process it upon successful load.
 */
$(document).ready(function(){
    loadLastFMData(2, lastFMSuccessHandler, lastFMFailureHandler);
});

/**
 * Load `numtoLoad` most recent tracks from last.fm and invoke relevant handler
 * upon success or failure.
 */
function loadLastFMData(numToLoad, sucessHandler, failureHandler) {
    $.ajax({
        url: 'http://ws.audioscrobbler.com/2.0/',
        data: {
            method : 'user.getrecenttracks',
            limit  : numToLoad,
            format : 'json',
            user   : 'premendax',
            api_key: 'fdae06d5f55e33f313eec0d691b201b8'
        },
        timeout: 4000,
        success: function(data){
            sucessHandler(data);
        },
        error: function(xhr, textStatus, errorThrown){
            failureHandler(xhr, textStatus, errorThrown);
        },
        dataType: 'json'
    });
}

function lastFMSuccessHandler(data) {
    var songHolder = $('#song');
    var track = data.recenttracks.track[0];
    var name = track.name;
    name += ' - ';
    name += track.artist['#text'];

    songHolder.html(name);
    songHolder.parent().addClass('visible');
}

function lastFMFailureHandler(xhr, textStatus, errorThrown) {
    console.log('Failure in last.fm api: ' + textStatus);
}