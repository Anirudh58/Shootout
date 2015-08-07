
var powerDone=0;
var ballCount=0;
var Initx=150;
var score=0;
var X2 = 109.5, Y2 = 500;

var canvas = document.getElementById("myCanvas");
var context = canvas.getContext("2d");
var wind = 0.995;
document.getElementById('winds').value = Math.floor(((1/wind)*1000) - 1000);



function generateInit()
{
Initx = Math.floor((Math.random() * 150) + 150);

return Initx;
}

function generateWind()
{
wind = (Math.floor((Math.random()*9) +990))/1000;
document.getElementById('winds').value = Math.floor(((1/wind)*1000) - 1000) ;
console.log(wind);	
return wind;
}

function projectAngle(event)
{
X2 = event.clientX;
Y2 = event.clientY;
console.log(X2,Y2);
context.moveTo(Initx,570);
context.lineTo(X2,Y2);
context.lineWidth = 1;
context.stroke();
}

function drawlines(canvas,context)
{

context.moveTo(100,590);
context.lineTo(1100,590);
context.stroke();


context.moveTo(915,180);
context.lineTo(915,285);
context.stroke();

context.moveTo(850,261);
context.lineTo(894,261);
context.stroke();

context.moveTo(888,268);
context.lineTo(888,301);
context.stroke();

context.moveTo(855,268);
context.lineTo(855,301);
context.stroke();

context.rect(10,142,30,450);
context.stroke();

context.beginPath();
context.arc(Initx,570,18,0,2*Math.PI);
context.fillStyle="rgb(247,99,14)";
context.fill();
context.lineWidth = 0;
context.stroke();

}



var projectball;
	
function projectBall(canvas,ctx,power,initx,wind)
{

var vel = power/2.5;
var x = initx, y =570;



var theta = Math.atan((Math.abs(Y2-y))/(Math.abs(X2-x)));
var flag=0;
var rebound = 0,center = 0;
var Rnet = 0, Lnet = 0; 
var r=18;
var time=0;
var v0x = vel * Math.cos(theta);
var v0y = vel * Math.sin(theta);
var startX = x;
var startY = y;
var g = 10;
var hitX,hitY,LhitX,LhitY,RhitX,RhitY;
var e=0.995;
var windFactorX = wind;
var windFactorY;

/*if(wind>1)
{
var windFactorY = 1/wind;
}*/

windFactorY = wind;

function project()
				{
					//smooth clear
					ctx.save();
						
					ctx.restore();
					
					if(y<canvas.height - r - 209 && x < canvas.width - r -100)
					{
						if((Math.floor(y)>257 && Math.floor(y)<264) && (Math.floor(x)>835 && Math.floor(x)<902)	)
						{
						 basket = 1;
						 score++;
						 document.getElementById('score').value = score;
						 console.log(score);
						}
						
						if((Math.floor(x)>894 && Math.floor(x)<900) && (Math.floor(y)>163 && Math.floor(y)<303)) 
						{	
						
							rebound = 1;
							console.log("rebound");
							hitX = Math.floor(x);
							hitY = Math.floor(y);
							
						}
						
						
						/*if((Math.floor(x)>865 && Math.floor(x)<870) && (Math.floor(y)>260 && Math.floor(y)<296)) 
						{	
						
							Rnet = 1;
							console.log("rnet");
							RhitX = Math.floor(x);
							RhitY = Math.floor(y);
							
						}
						
						if((Math.floor(x)>894 && Math.floor(x)<900) && (Math.floor(y)>163 && Math.floor(y)<303)) 
						{	
						
							Lnet = 1;
							console.log("lnet");
							LhitX = Math.floor(x);
							LhitY = Math.floor(y);
							
						}*/
						
						if((Math.floor(x)>870 && Math.floor(x)<887) && (Math.floor(y)>268 && Math.floor(x)<271))
						{
							center=1;
						}
						
						
						
						
						
						
						if(rebound==0)
						{
						y = startY - ( v0y * time - (1/2 * g * Math.pow(time,2)) );
						x = startX + v0x * time;
						}
						else
						{
						y = startY - ( v0y * time - (1/2 * g * Math.pow(time,2)) );
						x = 2*hitX - (v0x * time) - startX;
						}
						
						
						
						
					}
					else
					{
						drawbackground(canvas,context,drawlines);
					}
						
						ctx.save();
						ctx.beginPath();
						if(center == 1)
						{
							ctx.arc(879,y,r,0,Math.PI*2,true);
						}
						else
						{
						ctx.arc(x,y,r,0,Math.PI*2,true);
						}
						ctx.fillStyle = "rgb(247,99,14)";
						ctx.fill();
						ctx.lineWidth = 0;
						ctx.strokeStyle = "rgb(247,99,14)";
						ctx.stroke();
						ctx.closePath();
					    ctx.restore();
					    time+=0.1;
					
						//v0x = v0x*windFactorX;
						//v0y = v0y*windFactorY;
						
						if(rebound==1)
						{
						v0x = v0x*e;
						}
						
						
						
						
					
					projectball = requestAnimationFrame(project);
				}
				
		requestAnimationFrame(project);

				




}

function fillPower(canvas,context)
{
	var y=591,height=0;
	document.addEventListener("keydown", function (e) {
    if(e.keyCode == 32)
		{	
		if(height<450)
		{
		height+=10;
		y-=10;
		context.fillStyle= 'red';
		context.fillRect(10,y,30,height);
		flag=1;
		}
		
		
		}

});

document.addEventListener("keyup", function (e) {
    
	if(e.keyCode == 32)
		{
		if(ballCount==0)
		{
		x=150;
		wind = 0.995;
		ballCount++;
		}
		
		projectBall(canvas,context,height,x,wind);
		x = generateInit();
		wind = generateWind();
		
		context.fillStyle="white";
		context.fillRect(10,142,30,450)
		
		height=0;
		y=591;
		
		}
	
});



}

function drawbackground(canvas, context, onload)
{

    var imagePaper = new Image();

        imagePaper.onload = function()
		{
            context.drawImage(imagePaper,50, 50, 1200, 700);
			
            onload(canvas, context);	
        };

    imagePaper.src = "court-2.jpg";
}

var game;
function update()
{

drawbackground(canvas,context,drawlines);
game = requestAnimationFrame(update);

}
requestAnimationFrame(update);

function popUp()
{
 document.getElementById('test').style.display = 'block';
}

fillPower(canvas,context);

var countdownTimer;
var seconds = 30;
function secondPassed()
 {
    
    
   
    document.getElementById('timer').value = seconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
		cancelAnimationFrame(game);
		cancelAnimationFrame(projectball);
		popUp();
		document.getElementById('msg').innerHTML = score; 
		
    } else {
        seconds--;
    }
}

document.getElementById('btn').onclick = function()
{
score=0;
document.getElementById('score').value = score;
countdownTimer = setInterval('secondPassed()', 1000);
}


function submitScore()
{
	
	var l = document.getElementById("submit");
	l.click();
}