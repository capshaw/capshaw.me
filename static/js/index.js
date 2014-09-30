var app = function() {

    /* A comprehensive set of options -- these can be overriden during
     * initialization. */
    var options = {
        canvasFrontId: null,
        numFrames: 1000,
        minDelta: 1,
        maxDelta: 3,
        deltaFactor: 10
    };

    var card;
    var canvas;
    var context;

    var init = function (userOptions) {
        /* Extend the default options with the user's options and check to
         * ensure that required options were successfully passed in. */
        options = $.extend(options, userOptions);
        if(!hasRequiredParameters()) {
            return false;
        }

        /* When the document has loaded, resize and draw. */
        $(document).ready(function(){

            /* Resize the canvas to the full size of the screen even if the
             * window isn't maximized: they could resize their window up to this
             * size at a later point. */
            canvas = document.getElementById(options.canvasFrontId);
            canvas.width = screen.width;
            canvas.height = screen.height;
            context = canvas.getContext('2d');

            /* Find the location of the card on the page. */
            var cardObject = $('#card');
            var offset = cardObject.offset();
            var card = {
                startX: offset.left,
                startY: offset.top,
                endX: offset.left + cardObject.width(),
                endY: offset.top + cardObject.height()
            };

            /* Where to start the random walk from. */
            var state = {
                x: $(canvas).parent().width() / 2,
                y: $(canvas).parent().height() / 3 * 2,
                frameNumber: 140
            };

            draw(state, card);
        });
    };

    var draw = function (state, card) {
        for (i = 0; i < options.numFrames; i++) {
            state = drawFrame(state, card);
        }
    }

    var drawFrame = function (state, card) {
        state.x = mod(state.x, canvas.width);
        state.y = mod(state.y, canvas.height);

        var oldX = state.x;
        var oldY = state.y;
        var delta = randomInt(options.minDelta, options.maxDelta);

        state.x += ((randomInt(0, 1) == 0) ? -1 : 1) * delta * options.deltaFactor;
        state.y += ((randomInt(0, 1) == 0) ? -1 : 1) * delta * options.deltaFactor;

        /* Don't draw on the card. */
        if ((state.x > card.startX && state.x < card.endX) &&
            (state.y > card.startY && state.y < card.endY)) {
            state.x = oldX;
            state.y = oldY;
            return state;
        }

        state.frameNumber += 1;

        context.beginPath();
        context.strokeStyle = getCurrentRainBowColor(state.frameNumber);
        context.moveTo(oldX, oldY);
        context.lineTo(state.x, state.y);
        context.closePath();
        context.stroke();

        return state;
    }

    /* Make sure that every option has a non-null value. */
    var hasRequiredParameters = function () {
        var valid = true;
        $.each(options, function (key, value) {
            if(value == null) {
                console.log('The option ' + key + ' is required.');
                valid = false;
            }
        });
        return valid;
    }

    /* Given a frame number, returns a color in a repeating sequence of rainbow
     * colors. */
    var getCurrentRainBowColor = function (n) {
        len = 50;
        center = 128;
        width = 127;

        frequency = 0.006;

        phase1 = 0;
        phase2 = 2;
        phase3 = 4;

        var r = Math.round(Math.sin(frequency * n + phase1) * width + center);
        var g = Math.round(Math.sin(frequency * n + phase2) * width + center);
        var b = Math.round(Math.sin(frequency * n + phase3) * width + center);

        /* Gross, but alternative is building object and serializing. */
        return 'rgba(' + r + ',' + g + ',' + b + ', 0.1)'
    }

    /* Javascript '%' operator returns remainder. This function implements the
     * modulo functionality such that negative values wrap around. */
    var mod = function (n, m) {
        var remain = n % m;
        return remain >= 0 ? remain : remain + m;
    }

    /* Returns a random integer inclusive to the minimum and maximum. */
    var randomInt = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    return {
        init: init
    };
};