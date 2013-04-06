var count = 400;
var radius = 20;
var painting = false;
var radius = 15

var canvas, context;

/**
 * Load the canvas and 2D context when the page loads.
 */
$(document).ready(function() {
    // TODO: js -> jquery
    canvas = document.getElementById('canvas')
    context = canvas.getContext('2d')
    canvas.width = Math.max($(document).width(), screen.width)
    canvas.height = Math.max($(document).height(), screen.height)
    $('.canvas-window').css('height', Math.max($(document).height(), $(window).height()));

    /**
     * On mousemove, paint on the canvas if the user is currently painting.
     */
    $('body').mousemove(function(event) {
        if (!painting) { return; }
        context.beginPath()
        context.arc(event.pageX, event.pageY, radius, 0, 2 * Math.PI, false);
        context.fillStyle = getCurrentRainbowColor()
        context.fill()
    });

    /**
     * On document resize, resize the canvas viewport (or "canvas-window")
     */
    $(window).resize(function() {
        // TODO: [minor bug] document size can grow but not shrink back down
        $('.canvas-window').css('height', Math.max($(document).height(), $(window).height()));
    })

    /**
     * Toggle painting mode on and off.
     */
    $('.color-toggle').click(function(event){
        event.preventDefault()
        painting = !painting
        return false
    })
})

/**
 * Get the current rainbow color based on a few parameters and the count.
 */
function getCurrentRainbowColor() {
    len = 50
    center = 225
    width = 25

    frequency1 = 0.006
    frequency2 = 0.006
    frequency3 = 0.006

    phase1 = 0
    phase2 = 2
    phase3 = 4

    var red = Math.round(Math.sin(frequency1 * count + phase1) * width + center);
    var grn = Math.round(Math.sin(frequency2 * count + phase2) * width + center);
    var blu = Math.round(Math.sin(frequency3 * count + phase3) * width + center);
    count += 1;

    return "rgba("+red+","+grn+","+blu+", 1)"
}