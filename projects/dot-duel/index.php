<!DOCTYPE html>

<html>
<head>
<title>Dot Duel</title>
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

	var frame_time = 200;
	var pause = 0;
	var block_width = 10;
	var block_height = 10;
	var loser = -1;
	var strats = ['Random', 'Bounce']

	var canvas_height = 600-block_height;
	var canvas_width = 1400-block_width;

	var choices_x = new Array(-block_width, 0, block_width);
	var choices_y = new Array(-block_height, 0, block_height);

	//array of visited locations
	var visited = [];
	for (var x = 0; x<=canvas_width;x = x+block_width){
		for (var y = 0; y<=canvas_height;y = y+block_height){
			visited[[x,y]] == 0;
		}
	}

	var objects = [];

	var object1 = {
		color:'0, 0, 255',
		last_x:canvas_width/3 - (canvas_width/3)%block_width,
		last_y:canvas_height/2 - (canvas_height/2)%block_height,
		strategy:1,
		xvect:0,
		yvect:0,
		points:0,
		loss:0
		};
	var object2 = {
		color:'255, 0, 0',
		last_x:canvas_width/3*2 - (canvas_width/3*2)%block_width,
		last_y:canvas_height/2 - (canvas_height/2)%block_height,
		strategy:1,
		xvect:0,
		yvect:0,
		points:0,
		loss:0
		};

	objects.push(object1, object2);

	//initialize picture
	function initialize(){
		document.getElementsByName('points')[0].innerHTML = "<div class='title'>Points</div><div class='points' style='color:red;' name='redPoints'>0</div><div class='points' style='color:blue;' name='bluePoints'>0</div>";
		document.getElementsByName('pauseButton')[0].innerHTML = 'Begin';
		document.getElementsByName('pauseKeeper')[0].value = 1;
		visited = [];
		object1.last_x = canvas_width/3 - (canvas_width/3)%block_width;
		object1.last_y = canvas_height/2 - (canvas_height/2)%block_height;
		object2.last_x = canvas_width/3*2 - (canvas_width/3*2)%block_width;
		object2.last_y = canvas_height/2 - (canvas_height/2)%block_height;
		object1.points = 0;
		object1.loss = 0;
		object2.points = 0;
		object2.loss = 0;
		pause = 0;
		loser = -1;
		var canvasName = "myCanvas";
		var elem = document.getElementById(canvasName);
		if (elem && elem.getContext) {
				var context = elem.getContext("2d");
			if(context){
				context.fillStyle = 'rgba(255,255,255,1)';
				context.fillRect(0, 0, canvas_width+block_width, canvas_height+block_height);
				for (var i = 0; i < objects.length; i++) {
					context.fillStyle = 'rgba('+objects[i].color+', 1)';
					context.fillRect(objects[i].last_x, objects[i].last_y, block_width, block_height);
				}
			}
		}
	}

	//pause
	function topause(){
		if(document.getElementsByName('pauseKeeper')[0].value == 0){
			document.getElementsByName('pauseKeeper')[0].value = 1;
			document.getElementsByName('pauseButton')[0].innerHTML = 'Unpause';
		}else{
			document.getElementsByName('pauseKeeper')[0].value = 0;
			document.getElementsByName('pauseButton')[0].innerHTML = 'Pause';
			update();
		}
	}

	//updates displays when they change
	function display_update(){
		var ending = 's';
		if(document.getElementsByName('speedSlider')[0].value == 1000){ending = '';}
		document.getElementsByName('speedInfo')[0].innerHTML = document.getElementsByName('speedSlider')[0].value/1000 + ' second'+ending;
	}

	//updates strategies
	function change_strat(which){
		//only works for two strats
		var current = 1-objects[which].strategy;
		objects[which].strategy = current;
		document.getElementsByName('a'+which+'a')[0].innerHTML = strats[current];
	}

	//update -- during gamepplay
	function update(){
		var frame_time = document.getElementsByName('speedSlider')[0].value;
		var pause = document.getElementsByName('pauseKeeper')[0].value;
		document.getElementsByName('bluePoints')[0].innerHTML = objects[0].points;
		document.getElementsByName('redPoints')[0].innerHTML = objects[1].points;
		if(pause == 0){
			var t = setTimeout("draw()",frame_time);
		}
	}

	//draw everything on the canvas
	function draw(){

		var canvasName = "myCanvas";
		var elem = document.getElementById(canvasName);
		if (elem && elem.getContext) {
				var context = elem.getContext("2d");
			if(context){
				for (var i = 0; i < objects.length; i++) {
					//refresh canvas
					context.fillStyle = 'rgba(255,255,255,1)';
					context.fillRect(objects[i].last_x,objects[i].last_y, block_width, block_height);

					context.fillStyle = 'rgba('+objects[i].color+', .40)';
					context.fillRect(objects[i].last_x,objects[i].last_y,block_width, block_height);

					//move the dot
					if(objects[i].strategy == 1){
						if(objects[i].xvect >= 1 || objects[i].yvect >= 1){
							new_x = objects[i].last_x + block_width*objects[i].xvect;
							new_y = objects[i].last_y + block_height*objects[i].yvect;

							//check boundries -- replace with modulo (also here twice now...)
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

							if(visited[[new_x, new_y]] == 1){
								objects[i].xvect = 0;
								objects[i].yvect = 0;
							}
						}else{
							//strategy is random for a turn
							var xvect = Math.round(Math.random()*2-1);
							var yvect = Math.round(Math.random()*2-1);
							new_x = objects[i].last_x + xvect*block_width;
							new_y = objects[i].last_y + yvect*block_height;

							objects[i].xvect = xvect;
							objects[i].yvect = yvect;
						}
					}else{
						//strategy is random
						new_x = objects[i].last_x + choices_x[Math.floor(Math.random()*choices_x.length)];
						new_y = objects[i].last_y + choices_y[Math.floor(Math.random()*choices_y.length)];
					}

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

					//check visited
					if(visited[[new_x, new_y]] == 1){
						new_x = objects[i].last_x;
						new_y = objects[i].last_y;
						xvect = 0;
						yvect = 0;
						objects[i].loss += 1;
						if(objects[i].loss > 30 && objects[1-i].points > objects[i].points){
							pause = 1;
							loser = i;
						}
					}else{
						objects[i].points += 1;
						objects[i].loss = 0;
					}

					objects[i].last_x = new_x;
					objects[i].last_y = new_y;

					//update visited
					visited[[new_x, new_y]] = 1;

					context.fillStyle = 'rgba('+objects[i].color+', 1)';;
					context.fillRect(new_x, new_y, block_width, block_height);
				}
			}
		}
		if(pause == 0){
			update();
		}

		if(loser != -1){
			var charsd = ['Blue', 'Red'];
			document.getElementsByName('points')[0].innerHTML = 'The Winner is '+charsd[1-loser];
		}
	}
</script>
</head>

<body onload='javascript:initialize();'>
	<h1>Dot Duel</h1>
	<div class='info-bar imp' name='overall'>
			<div class='floater small'>
				<div class='title'>Info</div>
				<span>Click on strategy links to change dot strategy.
				Click on begin to start the simulation.</span>
			</div>
			<div class='floater' name='points'>
				<div class='title'>Points</div>
				<div class='points' style='color:red;' name='redPoints'>0</div>
				<div class='points' style='color:blue;' name='bluePoints'>0</div>
			</div>
			<div class='floater'>
				<div class='title'>General</div>
				<a href='#' onclick='Javascript:topause();' name='pauseButton'>Begin</a><br>
				<a href='#' onclick='Javascript:initialize();' >Restart</a>
			</div>

			<div class='floater'>
				<div class='title'>Refresh rate</div>
				<form name='whoa'>
					<input type='range' name='speedSlider' min='10' max='1000' step='10' value='50' onchange='display_update();'>
					<input type='hidden' name='pauseKeeper' value='1'>
				</form>
				<div name='speedInfo' class='info'>0.05 seconds</div>
			</div>

			<div class='floater'>
				<div class='title'>Strategies</div>
				<div name='debug'>
					Blue:
					<a href='#' onclick='javascript:change_strat(0);' name='a0a'>Bounce</a>
				</div>
				<div name='debug'>
					Red:
					<a href='#' onclick='javascript:change_strat(1);' name='a1a'>Bounce</a>
				</div>
			</div>
	</div>
	<div class='info-bar imp'>
		<canvas id="myCanvas" width="1400px" height="600px">
				This game was written for HTML5 compatible browsers.
		</canvas>
	</div>
</body>
</html>
