var game=1;
var level=0;
var input=[];
var userinput=[]
var timeout=200,time=500;
var highestlevel = localStorage.getItem('score'); 
var maxplayer=localStorage.getItem('max')
var player; // define player here

$("#score").text(maxplayer+" Level "+highestlevel);
var n=true;
$(".newgame").click(()=>
{
    location.reload();
})
function random()
    {
        var r=Math.floor((Math.random()*4))+1;
        return r;
    }
  
function play(){
    $("body").keydown(start);
        }
function start(){
    $("body").off("keydown", start);
    if(n)
    {
        player = prompt("Player Name :"); // get player name here
        n=false;
    }
    
    
level=1;
input=[];
userinput=[];
nextLevel();}


function nextLevel(){
$("h1").text("Level "+level);
var randomnum=random();

switch(randomnum)
{
    case 1:
        input.push("green");
        $(".green").fadeOut(200).fadeIn(200);
        var audio=new Audio('/GameZone/Tik Tac Toe/green.mp3');
        audio.play();
        break;
    case 2:
        input.push("red");
        $(".red").fadeOut(200).fadeIn(200);
        var audio=new Audio('/GameZone/Tik Tac Toe/red.mp3');
        audio.play();
        break;
    case 3:
        input.push("yellow");
        $(".yellow").fadeOut(200).fadeIn(200);
        var audio=new Audio('/GameZone/Tik Tac Toe/yellow.mp3');
        audio.play();
        break;
    case 4:
        input.push("blue");
        $(".blue").fadeOut(200).fadeIn(200);
        var audio=new Audio('/GameZone/Tik Tac Toe/blue.mp3');
        audio.play();
        break;
    default:
        alert("error");
}
setTimeout(getUserinput, 400);
}

function getUserinput(){
{
    userinput=[];
    $(".btn").off("click").on("click", function () 
{var $this = $(this);
userinput.push(($this).attr('id'));
    $this.addClass("pressed");
    var audio=new Audio(($this).attr('id')+'.mp3')
    audio.play();
setTimeout(function() {
    $this.removeClass("pressed");
}, time)
check(userinput.length-1);
});;
}
}


function check(i)
{
                if(input[i]!=userinput[i])
                    {
                        if(highestlevel<level)
                            {
                               highestlevel=level;
                               maxplayer=player; // use player here
                               $("#score").text(maxplayer+" "+highestlevel);
                               localStorage.setItem('score', highestlevel);
                               localStorage.setItem('max',maxplayer);
                            }
                        gameover();
                    }
                else if(userinput.length==input.length)
                {level++;
                    setTimeout(function() {
                        nextLevel();
                    }, 800);
                }

}

function gameover(){
$("body").css("background-color","red"); 
var audio=new Audio('/GameZone/Tik Tac Toe/wrong.mp3');
setTimeout(function() {
    $("body").css("background-color","#011F3F");  
}, timeout);

audio.play();
$("h1").text("Game Over, Press A Key to Start Again");
$("body").keydown(
    start);}


    play();