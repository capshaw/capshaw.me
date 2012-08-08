<!DOCTYPE html>
<?php

	$cleanercount = 1;
	$maxlength = 10;
	if(isset($_GET['n'])){
		$cleanercount = $_GET['n'];
	}
	if(isset($_GET['ml'])){
		$maxlength = $_GET['ml'];
	}
?>
<html>
<head>
<title>The Greedy Painters</title>
<link rel='stylesheet' href='fuckyeah.css' type='text/css'>
<script>

	/*
	 * PLEASE NOTE
	 *
	 * Please don't use this Javascript code as an example of
	 * what I think clean / readable code is. This is merely a fun
	 * hack and something I'd want to clean up / do correctly if it
	 * were meant to be expanded upon.
	 *
	 * It was also made quite a while ago!
	 *
	 * - Andrew
	 */

	// Global variables and containers
	var frame_time = 100;
	var pause = 0;
	var block_width = 5;
	var block_height = 5;
	var canvas_height = 600-block_height;
	var canvas_width = 1400-block_width;
	var blocksCleared = 0;
	var totalCleaners = <?php echo($cleanercount); ?>;
	var maxlength = <?php echo($maxlength); ?>;
	var followOpacity = 0.4;
	var maze_flag = 0;

	var choices_x = new Array(-block_width, block_width, 0);
	var choices_y = new Array(-block_height, block_height, 0);

	var visited = [];
	var objects = [];
	var points = [];
	var blocksPerTurn = [2, 2, 2, 2, 2, 2];

	// Factory for making cleaners
	function newCleaner(){
		while(true){
			var xp = Math.round(canvas_width*Math.random());
			var xy = Math.round(canvas_height*Math.random());
			xp = xp - xp%block_width;
			xy = xy - xy%block_height;
			if(visited[[xp, xp]] != 1){
				break;
			}
		}
		opacity = Math.random()*0.5 + 0.5;
		var object1 = {
			color:String(Math.round(Math.random()*255)) + "," +
				  String(Math.round(Math.random()*255)) + "," +
			      String(Math.round(Math.random()*255 )),//'16, 188, 75', //'240, 100, 100',
			last_x:xp,
			last_y:xy,
			xvect:0,
			yvect:0,
			};
		return object1;
	}

	var walls = [];

	function wall(){

		var x, y, vector, length;

		this.setup = function(xn, yn, vectorn, lengthn){
			x = xn;
			y = yn;
			vector = vectorn;
			length = lengthn;
		}

		this.xo = function(){
			return x;
		}

		this.yo = function(){
			return y;
		}

		this.vectoro = function(){
			return vector;
		}

		this.lengtho = function(){
			return length;
		}
	}

	//initialize picture
	function initialize(){

		blocksCleared = 0;
		totalCleaners = <?php echo($cleanercount); ?>;
		points = [];
		objects = [];
		visited = [];

		// Set everything to visitable and worth 1 point
		for (var x = 0; x<=canvas_width;x = x+block_width){
			for (var y = 0; y<=canvas_height;y = y+block_height){
				visited[[x,y]] = 0;
				points[[x, y]] = 1;
			}
		}


		// Set wall positions as unvisitable
		walls = [];
		if(maze_flag == 0){
			for(var i=0; i<100; i++){
				var wall1 = new wall();

				var posx = Math.random()*canvas_width;
				posx = posx - posx % block_width;

				var posy = Math.random()*canvas_height;
				posy = posy - posy % block_height;

				var lengthofwall = Math.round(Math.random()*maxlength);
				var vec = Math.round(Math.random());

				wall1.setup(posx, posy, vec, lengthofwall);
				walls.push(wall1);

				for(var j=0; j<lengthofwall; j++){
					visited[[posx+(j*(1-vec)*block_width), (posy+(j*vec*block_height))]] = 1;
					points [[posx+(j*(1-vec)*block_width), (posy+(j*vec*block_height))]] = -2;
				}
			}
		}else{
			var theGrid = generate_maze((canvas_height+1)/block_height, (canvas_width+1)/block_width);
			for(var j=0; j<theGrid.length; j++){
				for(var i=0; i<theGrid[0].length; i++){
					if(theGrid[j][i] == 1){
						var newWall = new wall();
						newWall.setup(i*block_width, j*block_height, 1, 1)
						walls.push(newWall);
						visited[[i*block_width, j*block_height]] = 1;
						points [[i*block_width, j*block_height]] = -2;
					}
				}
			}
		}

		for(var j=0; j<<?php echo($cleanercount); ?>; j++){
			objects.push(newCleaner());
		}

		document.getElementsByName('cleanerTotal')[0].innerHTML = <?php echo($cleanercount); ?>;
		document.getElementsByName('pauseButton')[0].innerHTML = 'Begin';
		document.getElementsByName('pauseKeeper')[0].value = 1;
		document.getElementsByName('amountCleared')[0].innerHTML = '0';
		pointsToBeHad = eval(points.join('+'))
		pause = 0;
		loser = -1;
		var canvasName = "myCanvas";
		var elem = document.getElementById(canvasName);
		if (elem && elem.getContext) {
			var context = elem.getContext("2d");
			if(context){
				context.fillStyle = 'rgba(255, 255, 255,1)';
				context.fillRect(0, 0, canvas_width+block_width, canvas_height+block_height);

				// For wanderers
				for (var i = 0; i < objects.length; i++) {
					context.fillStyle = 'rgba('+objects[i].color+', 1)';
					context.fillRect(objects[i].last_x, objects[i].last_y, block_width, block_height);
				}

				// For walls
				for (var i = 0; i < walls.length; i++) {
					var alpaca = 0.5;//Math.random()*0.5+0.5;
					context.fillStyle = 'rgba(33, 33, 33, '+alpaca+')';
					var ax = 1;
					var ay = 1;
					if(walls[i].vectoro() == 0){
						ax = walls[i].lengtho();
					}else{
						ay = walls[i].lengtho();
					}
					context.fillRect(walls[i].xo(), walls[i].yo(), block_width*ax, block_height*ay);
				}
			}
		}
	}

	//pause
	function topause(){
		if(document.getElementsByName('pauseKeeper')[0].value == 0){
			document.getElementsByName('pauseKeeper')[0].value = 1;
			document.getElementsByName('pauseButton')[0].innerHTML = 'Unpause';
			pause = 1;
		}else{
			document.getElementsByName('pauseKeeper')[0].value = 0;
			document.getElementsByName('pauseButton')[0].innerHTML = 'Pause';
			pause = 0;
			update();
		}
	}

	//update -- during gamepplay
	function update(){
		var pause = document.getElementsByName('pauseKeeper')[0].value;
		if(pause == 0){
			var t = setTimeout("draw()",frame_time);
		}
	}

	//draw everything on the canvas
	function draw(){

		// Update the amount cleared / efficiency / graph
		document.getElementsByName('amountCleared')[0].innerHTML = blocksCleared;
		var valueHere = Math.round(blocksPerTurn[blocksPerTurn.length-1]/totalCleaners*100);
		if(valueHere > 100){
			valueHere = 100;
		}
		document.getElementsByName('amountPerTurn')[0].innerHTML = valueHere + "%";
		document.getElementsByName('B0')[0].style.height = document.getElementsByName('B1')[0].style.height;
		document.getElementsByName('B1')[0].style.height = document.getElementsByName('B2')[0].style.height;
		document.getElementsByName('B2')[0].style.height = document.getElementsByName('B3')[0].style.height;
		document.getElementsByName('B3')[0].style.height = document.getElementsByName('B4')[0].style.height;
		document.getElementsByName('B4')[0].style.height = document.getElementsByName('B5')[0].style.height;
		var foundValue = Math.round((blocksPerTurn[blocksPerTurn.length-1]/totalCleaners)*50)+1;
		if(foundValue>50){
			foundValue = 50;
		}
		document.getElementsByName('B5')[0].style.height = foundValue+"px";

		var canvasName = "myCanvas";
		var elem = document.getElementById(canvasName);
		if (elem && elem.getContext) {
			var context = elem.getContext("2d");
			if(context){
				var blocksThisTurn = 0;
				for (var i = 0; i < objects.length; i++) {
					//refresh canvas
					context.fillStyle = 'rgba(255,255,255,1)';
					context.fillRect(objects[i].last_x,objects[i].last_y, block_width, block_height);

					context.fillStyle = 'rgba('+objects[i].color+', '+followOpacity+')';
					context.fillRect(objects[i].last_x,objects[i].last_y, block_width, block_height);

					// Shuffle choices
					choices_x = shuffle(choices_x);
					choices_y = shuffle(choices_y);

					// Check points and move to place with most points
					var message = "I looked at ";
					maxPoints = -1;
					new_x = objects[i].last_x;
					new_y = objects[i].last_y;
					for(var x=0;x<choices_x.length; x++){
						for(var y=0; y<choices_y.length; y++){
							var a = Math.abs(choices_x[x]/block_width);
							var b = Math.abs(choices_y[y]/block_height);
							if((a==1 && b==0)||(b==1 && a==0)){

								// If same direction, give extra points
								var dir = 0;
								if(choices_x[x]/block_width == objects[i].xvect &&
								   choices_y[y]/block_height == objects[i].yvect){
									dir = 0.5;
								}

								// If last vector was where you came from, penalize
								var pen = 0;
								if(choices_x[x]/block_width == -objects[i].xvect &&
								   choices_y[y]/block_height == -objects[i].yvect){
									pen = -0.5;
								}

								// Random addition
								if(Math.random()>0.03){
									dir += 0.3;
								}

								// Maze Flag -- > Changing dir is good
								if(maze_flag == 1){
									if(choices_x[x]/block_width == objects[i].xvect &&
									   choices_y[y]/block_height == objects[i].yvect){
										dir -= 0.5;
									}else{
										dir += 0.4;
									}
								}

								// No wraparound
								var lookx = objects[i].last_x + choices_x[x];
								var looky = objects[i].last_y + choices_y[y];
								if(lookx < 0){
									pen = -10000;
								}
								if(looky < 0){
									pen = -10000;
								}
								if(lookx > canvas_width){
									pen = -10000;
								}
								if(looky > canvas_height){
									pen = -10000;
								}

								// Check if good or not
								if(points[[lookx, looky]]+dir+pen > maxPoints){
									maxPoints = points[[(objects[i].last_x + choices_x[x]), (objects[i].last_y + choices_y[y])]] + dir + pen;
									new_x = objects[i].last_x + choices_x[x];
									new_y = objects[i].last_y + choices_y[y];
								}
								message += "("+(points[[lookx, looky]]+dir)+") ";
							}
						}
					}
					message += "and (" + new_x + "," + new_y + ") was best with " + maxPoints;
					//console.log(message);

					//check boundries -- replace with modulo
					if(new_x < 0){
						new_x = canvas_width;
					}

					if(new_y < 0){
						new_y = canvas_height;
					}

					if(new_x > canvas_width){
						new_x = 0
					}

					if(new_y > canvas_height){
						new_y = 0
					}

					// Check to make sure it is not an unvisitable square
					if(visited[[new_x, new_y]] == 1){
						new_x = objects[i].last_x;
						new_y = objects[i].last_y;
					}

					// Update vectors
					objects[i].xvect = (new_x - objects[i].last_x)/block_width;
					objects[i].yvect = (new_y - objects[i].last_y)/block_height;

					visited[[objects[i].last_x,objects[i].last_y]] = 0;

					objects[i].last_x = new_x;
					objects[i].last_y = new_y;

					visited[[new_x,new_y]] = 1;

					//update visited
					blocksCleared += points[[new_x, new_y]];
					blocksThisTurn += points[[new_x, new_y]];
					points[[new_x, new_y]] = 0;

					context.fillStyle = 'rgba('+objects[i].color+', 1)';;
					context.fillRect(new_x, new_y, block_width, block_height);
				}

				// Update blocks/perturn
				blocksPerTurn = blocksPerTurn.slice(1,blocksPerTurn.length-1);
				blocksPerTurn.push(blocksThisTurn);
			}
		}
		if(pause == 0){
			update();
		}
	}

	// Algorithm via stackoverflow.com
	function shuffle(array) {
		var tmp, current, top = array.length;

		if(top) while(--top) {
			current = Math.floor(Math.random() * (top + 1));
			tmp = array[current];
			array[current] = array[top];
			array[top] = tmp;
		}

		return array;
	}

	function addCleaner(){
		var newestcleaner = newCleaner();

		var canvasName = "myCanvas";
		var elem = document.getElementById(canvasName);
		if (elem && elem.getContext) {
			var context = elem.getContext("2d");
			if(context){

				var color = newestcleaner.color;
				var x = newestcleaner.last_x;
				var y = newestcleaner.last_y;

				context.fillStyle = 'rgba('+color+', 1)';
				context.fillRect(x,y, block_width, block_height);
			}
		}

		objects.push(newestcleaner);
		totalCleaners += 1;
		document.getElementsByName('cleanerTotal')[0].innerHTML = totalCleaners;
	}

	// Function to remove cleaners and account for their being missing
	function removeCleaner(){
		if(totalCleaners>0){
			var removed = objects.pop();

			var canvasName = "myCanvas";
			var elem = document.getElementById(canvasName);
			if (elem && elem.getContext) {
				var context = elem.getContext("2d");
				if(context){

					var x = removed.last_x;
					var y = removed.last_y;

					context.fillStyle = 'rgba(255,255,255,1)';
					context.fillRect(x,y, block_width, block_height);

					context.fillStyle = 'rgba('+removed.color+', '+followOpacity+')';
					context.fillRect(x,y, block_width, block_height);

					visited[[x, y]] = 0;
				}
			}

			totalCleaners -= 1;
			document.getElementsByName('cleanerTotal')[0].innerHTML = totalCleaners;
		}
	}

	// Maze generation code!
	function find_valid_neighbors(x, y, width, height){
		var n = [];

		if(x+1 < width){
			n.push([x+1, y]);
		}
		if(y+1 < height){
			n.push([x, y+1]);
		}
		if(x > 0){
			n.push([x-1, y]);
		}
		if(y > 0){
			n.push([x, y-1]);
		}

		return(n);
	}

	function generate_maze(width, height){

		if(width<3 || height <3){
			alert("Sorry, width and height must be greater than 3");
		}

		var grid = [];
		var walls = [];
		var seen = [];

		// Make a grid of walls
		for(var x=0; x<width; x++){
			grid.push([]);
			for(var y=0; y<height; y++){
				grid[x].push(1);
			}
		}

		// Pick a cell, mark it as part of the maze. Add the walls of the cell to the wall list.
		var cell = [0, 0];
		grid[cell[0]][cell[1]] = 0;
		walls.push([1, 0], [0, 1]);

		// While there are walls in the list:
		while(walls.length > 0){

			// Pick a random wall from the list. If the cell on the opposite side isn't in the maze yet:
			walls = shuffle(walls);
			var cell = walls.pop();
			var x = cell[0];
			var y = cell[1];

			var n = find_valid_neighbors(x, y, width, height);

			var count = 0;
			for(var i=0; i<n.length; i++){
				var ne = n[i];
				if(grid[ne[0]][ne[1]] == 0){
					count += 1;
					var vx = ne[0]-x;
					var vy = ne[1]-y;
				}
			}

			if(count == 1){
				if(vx+x < width-1 && vy+y < height-1){

					// Make the wall a passage and mark the cell on the opposite side as part of the maze.
					grid[vx+x][vy+y] = 0;
					grid[x][y] = 0;
					seen.push([vx+x, vy+y]);
					seen.push([x, y]);

					// Add the neighboring walls of the cell to the wall list.
					var nb = find_valid_neighbors(x, y, width, height);
					for(var i=0; i<n.length; i++){
						var ne = n[i];
						if(!contains(seen, ne)){
							walls.push(ne);
						}
					}
				}
			}
		}

		return grid;
	}

	// For checking if obj contains a
	function contains(a, obj) {
		for (var i = 0; i < a.length; i++) {
			if (a[i] === obj) {
				return true;
			}
		}
		return false;
	}

	// Makes the game into a "maze"
	function makeMaze(){
		var ans = confirm("Warning: This will take a few seconds.")
		if(!ans){
			maze_flag = 0;
		}else{
			//document.getElementsByName('idden')[0].style.display = 'block';
			maze_flag = 1;
			var t = setTimeout("initialize()",frame_time);
			//document.getElementsByName('idden')[0].style.display = 'none';
		}
	}
</script>
</head>

<body onload='javascript:initialize();'>
	<h1>The Greedy Painters</h1>
	<div class='info-bar imp' name='overall'>
			<!--div class='floater small'>
				<div class='title'>Info</div>
				<span>The bots below are attracted to adjacent spots that are previously unvisited.</span>
			</div-->
			<div class='floater'>
				<div class='title'>Main Controls</div>
				<a href='#' onclick='Javascript:topause();' name='pauseButton'>Begin</a><br>
				<a href='#' onclick='Javascript:initialize();' >New Map</a><br>
				<input type='hidden' name='pauseKeeper' value='1'>
			</div>
			<div class='floater'>
				<div class='title'>Blocks Painted</div>
				<span name='amountCleared' class='points'>0</span>
			</div>
			<div class='floater'>
				<div class='title'>Total Painters</div>
				<span name='cleanerTotal' class='points'>1</span>
			</div>
			<div class='floater' style='width:160px;'>
				<div style='float:right; border-top: 1px solid #eee; border-bottom: 1px solid #eee; height:50px;width:50px; position:relative;'>
					<div class='bar' name='B0'><!-- --></div>
					<div class='bar' name='B1' style='left:8px;'><!-- --></div>
					<div class='bar' name='B2' style='left:16px;'><!-- --></div>
					<div class='bar' name='B3' style='left:24px;'><!-- --></div>
					<div class='bar' name='B4' style='left:32px;'><!-- --></div>
					<div class='bar' name='B5' style='left:40px;'><!-- --></div>
				</div>
				<div class='title'>Efficiency</div>
				<span name='amountPerTurn' class='points'>-</span>
			</div>
			<div class='floater'>
				<div class='title'>Options</div>
				<a href='#' onclick='Javascript:addCleaner();'>Add Painter</a>
				<a href='#' onclick='Javascript:removeCleaner();'>Remove Painter</a>
			</div>
			<div class='floater' style='width:90px;'>
				<div class='title'>Bonus</div>
				<a href='index.php?ml=100&n=100'>Almost Art</a><br>
				<a href='index.php?ml=0&n=1'>No Walls</a><br>
				<a href='Javascript:makeMaze();'>Maze</a>
			</div>
	</div>
	<div class='info-bar imp'>
		<canvas id="myCanvas" width="1400px" height="600px">
				This game was written for HTML5 compatible browsers.
		</canvas>
	</div>
	<div class='hidden' name='idden'>
		Generating Maze
	</div>
</body>
</html>
