
BLOCK_SIZE_SMALL = 12
SQUARE_SIZE_SMALL = 6

BLOCK_SIZE_MEDIUM = 15
SQUARE_SIZE_MEDIUM = 7

BLOCK_SIZE_LARGE = 40
SQUARE_SIZE_LARGE = 20

var BLOCK_SIZE = BLOCK_SIZE_MEDIUM
var SQUARE_SIZE = SQUARE_SIZE_MEDIUM
var BORDER_SIZE = (BLOCK_SIZE - SQUARE_SIZE)/2;
var COLOR = "rgb(200,200,200)"
var LEADING_COLOR = "rgb(224,27,100)"
var CANVAS_WIDTH
var CANVAS_HEIGHT

/* Maps representing the remaining locations to visit,
 * and the locations currently already seen */
var remainingToVisit
var seenLocations

var orderedList
var context
var lastNode

/* Variables representing the total area of the graph,
 * the number of found blocks in the graph and the
 * percent of found blocks in the graph. */
var area
var found
var percent

/* Initialize the page such that the graph draws rainbow
 * by default. */
var rainbowize = true

/*
 * Click & other handlers are bound when the page loads
 */
$(document).ready(function(){
	startDrawing()
	$('#resetButton').bind('click', function(event){
		event.preventDefault()
		startDrawing()
	})

	$('.optionsButton').bind('click', function(event){
		event.preventDefault()
	    $('#options').slideToggle(250)
	})

	$('.resizeButton').click(function(event){
		event.preventDefault()
		if($(this).attr('href') == '#small'){
			BLOCK_SIZE = BLOCK_SIZE_SMALL
			SQUARE_SIZE = SQUARE_SIZE_SMALL
		}
		if($(this).attr('href') == '#medium'){
			BLOCK_SIZE = BLOCK_SIZE_MEDIUM
			SQUARE_SIZE = SQUARE_SIZE_MEDIUM
		}
		if($(this).attr('href') == '#large'){
			BLOCK_SIZE = BLOCK_SIZE_LARGE
			SQUARE_SIZE = SQUARE_SIZE_LARGE
		}
		BORDER_SIZE = (BLOCK_SIZE - SQUARE_SIZE)/2
		startDrawing()
	})

	$('.rainbowizeButton').click(function(event){
		event.preventDefault()
		rainbowize = !(rainbowize)
		startDrawing()
		$(this).toggleClass('buttonOn')
	})
})


// From http://www.html5canvastutorials.com/advanced/html5-canvas-animation-stage/

window.requestAnimFrame = (function(callback) {
	return window.requestAnimationFrame ||
	window.webkitRequestAnimationFrame ||
	window.mozRequestAnimationFrame ||
	window.oRequestAnimationFrame ||
	window.msRequestAnimationFrame ||
	function(callback) {
	  window.setTimeout(callback, 1000 / 60);
	};
})();

function startDrawing() {
	mazeId = Math.random()
	fixCanvasWidth()
	context.clearRect( 0, 0, CANVAS_WIDTH, CANVAS_HEIGHT);
	remainingToVisit = {}
	seenLocations = {}
	orderedList = []
	lastNode = [-1, 0]
	startWalk()
	percent = $('#percent')
	found = 0
	animate(mazeId);
}

function Node (x, y) {
    this.x = x;
    this.y = y;
}

function fixCanvasWidth(){
	canvas = $('#mainCanvas')
	htmlWidth = $(window).width()*0.99
	htmlHeight = $(window).height() - $('#title').outerHeight();
	document.getElementById('mainCanvas').width = htmlWidth - htmlWidth % BLOCK_SIZE
	document.getElementById('mainCanvas').height = htmlHeight - htmlHeight % BLOCK_SIZE
	CANVAS_HEIGHT = canvas.height()
	CANVAS_WIDTH = canvas.width()

	area = (CANVAS_WIDTH/BLOCK_SIZE) * (CANVAS_HEIGHT/BLOCK_SIZE)
	huePerBlock = 1/area

	var canvaso = document.getElementById('mainCanvas');
	context = canvaso.getContext('2d');
}

function startWalk(){
	walk([0, 0], [-1, 0])
}

function walk(node, parent) {

	seenLocations[getStringKey(node)] = true

	orderedList.unshift([node, parent])
	remainingToVisit[getStringKey(node)] = getNeighbors(node)
	remainingToVisit[getStringKey(node)] = shuffleArray(remainingToVisit[getStringKey(node)])

	while(remainingToVisit[getStringKey(node)].length > 0) {
		newNode = remainingToVisit[getStringKey(node)].pop()
		if (!(getStringKey(newNode) in seenLocations)) {
			walk(newNode, node)
		}
	}
}

function getStringKey(node){
	return node[0] + "-" + node[1]
}

function getNeighbors(node) {
	neighbors = []
	if (node[0] > 0) {
		neighbors.push([node[0]-1, node[1]])
	}
	if (node[1] > 0) {
		neighbors.push([node[0], node[1]-1])
	}
	if (node[0] < CANVAS_WIDTH/BLOCK_SIZE - 1) {
		neighbors.push([node[0]+1, node[1]])
	}
	if (node[1] < CANVAS_HEIGHT/BLOCK_SIZE - 1) {
		neighbors.push([node[0], node[1]+1])
	}
	return neighbors
}

// TODO: Rewrite
// http://www.devcurry.com/2011/07/array-shuffle-in-javascript.html
function shuffleArray(a) {
  var d,
  c,
  b = a.length;
   while (b) {
    c = Math.floor(Math.random() * b);
    d = a[--b];
    a[b] = a[c];
    a[c] = d
   }
   return a;
}

/**
 * Draw the next square onto the canvas.
 */
function animate(){

	pair = orderedList.pop()
	node = pair[0]
	parent = pair[1]
	updateColor()
	drawNode(lastNode, COLOR)
	drawJoin(node, parent, COLOR)
	drawNode(node, LEADING_COLOR)
	lastNode = node
	found++

	percent.html(Math.round(found/area*100) + "%")

	// request new frame
	requestAnimFrame(function() {
		if(orderedList.length > 0) {
			animate();
		}else{
			finishAnimate()
		}
	});
}

/**
 * Update the system color for the next square to draw.
 */
function updateColor(){
	if(rainbowize) {
		COLOR = getCurrentRainBowColor()
	}else{
		COLOR = "rgb(200,200,200)"
	}
}

// Adapted from http://krazydad.com/tutorials/makecolors.php
function getCurrentRainBowColor() {
	len = 50
	center = 128
	width = 127

	frequency1 = 0.006
	frequency2 = 0.006
	frequency3 = 0.006

	phase1 = 0
	phase2 = 2
	phase3 = 4

	var red = Math.round(Math.sin(frequency1*found + phase1) * width + center);
	var grn = Math.round(Math.sin(frequency2*found + phase2) * width + center);
	var blu = Math.round(Math.sin(frequency3*found + phase3) * width + center);

    return "rgb("+red+","+grn+","+blu+")"
}

function finishAnimate() {
	drawNode(lastNode, COLOR)
	drawJoin([0, 0], [-1, 0], LEADING_COLOR)
	drawJoin([CANVAS_WIDTH/BLOCK_SIZE-1, CANVAS_HEIGHT/BLOCK_SIZE-1],
			 [CANVAS_WIDTH/BLOCK_SIZE+0, CANVAS_HEIGHT/BLOCK_SIZE-1],
			 LEADING_COLOR)
	percent.html('')
}

function drawNode(node, colorIn) {
	context.fillStyle = colorIn;
	context.fillRect (node[0]*BLOCK_SIZE+BORDER_SIZE, node[1]*BLOCK_SIZE+BORDER_SIZE,SQUARE_SIZE, SQUARE_SIZE);
}

function drawJoin(node1, node2, colorIn) {
	context.fillStyle = colorIn;
	startX = Math.min(node1[0], node2[0])
	endX = Math.max(node1[0], node2[0])
	startY = Math.min(node1[1], node2[1])
	endY = Math.max(node1[1], node2[1])
	if(endY > startY) {
		context.fillRect (startX*BLOCK_SIZE+BORDER_SIZE, startY*BLOCK_SIZE+BORDER_SIZE+SQUARE_SIZE, SQUARE_SIZE, 2*BORDER_SIZE);
	}
	if(endX > startX) {
		context.fillRect (startX*BLOCK_SIZE+BORDER_SIZE+SQUARE_SIZE, startY*BLOCK_SIZE+BORDER_SIZE,2*BORDER_SIZE, SQUARE_SIZE);
	}
}