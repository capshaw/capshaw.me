$(document).ready(function() {
    $('.time-since').each(function() {
        var now = new Date();
        var utc = Date.UTC(
            now.getFullYear(),
            now.getMonth(),
            now.getDate(),
            now.getHours(),
            now.getMinutes()
        );
        var tz = now.getTimezoneOffset() * 60 * 1000;
        $(this).html(getTimeDifference($(this).attr('data-since') * 1000, utc + tz))
    })
})

function getTimeDifference(a, b) {
    console.log(a)
    console.log(b)
    var milliseconds_since_play = b - a;

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
    return time + ' ' + unit + s;
}