

<!DOCTYPE html>

<html lang="en" itemscope="" itemtype="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

 <style>   
vga-video_player { 
   width: 100%; 
   height: auto; 
 } 
</style>
 
<style>
 * { margin: 0; padding: ; }
  body {
font: 16px/1.4 Georgia, Serif;
  background: url(http://smtvs.com/bg_image/bg_bubble.);
 }
 #page-wrap {
	width: 50%;
 margin: 0px auto;
 }
 h1 { font-weight: normal; font-size: 42px; }
  h1, p, pre, video, h2, figure, h3, ol, script, style { margin: 0 0 0px 0; }
 h2 { margin-top: 0px; }
 h1 { margin-bottom: 40px; }
 li { margin: 0 0 5px 20px; }
 article { background: white; padding: 10%; }
 pre, article style, article script {
 	white-space: pre;
	display: block;
	padding: 10px;
	background: #eee;
overflow-x: auto;
font: 12px Monaco, MonoSpace;
  }
 img { max-width: 100%; }
 figure { display: block; background: #ffffff; padding: 10px; }
  list { display: block; text-align: center; margin: 0px;  font-style: italic; font-size: 14px; orphans: 2; border: 0; }

  

</style>
  
   <style>


 #video_container {
    max-width: 1200px;
    height: 400px;
    margin: 0px auto;
    /* background: white; */
    display:flex;
    /* flex-wrap: wrap */
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 13px 10px rgba(0,0,0,0.21);
  }
  #video_container {
    position: relative;
    width: 100%;
    height: 100%;
    /* background: red; */
    display:flex;
    justify-content:center;
  } 




video_container::-webkit-media-controls-overlay-enclosure {
    display:none !important;
}

video_container::-webkit-media-controls-enclosure {
    display:none !important;
}

video_container::-webkit-media-controls {
    display:none !important;
}
video_container::-webkit-media-controls {
    display:none !important;
  }

 
  /* 650 */

  @media only screen and (max-width: 650px) {
    .container-player {
        flex-wrap: wrap;
        height: auto;
    }
    #video {
        width: 100%;
    }

    #list  {
        width: 70%;
    }

}


  #list{
  position: absolute;

    width: 70%;
    height: 10%;
  }

 #video-container{
    width: 100%;
    height: 100%;
  }
 /* scroll bar configuration */

  #list::-webkit-scrollbar {
    width: 4px;
    background-color: gray;;
  }

  #list::-webkit-scrollbar-thumb {
    width: 3    px;
    background-color:transparent;;
  }

  #list::-webkit-scrollbar-track {
    width: 4px;
    background-color: transparent;
  }


  
#playlist {
    width: 70%;
    height: 450px;
    padding: 0 10px;
    background: white;
    overflow: scroll;
    overflow-x: hidden;
  }



#video_controls_bar {
      position: absolute;
      width:100% ;
      height: 12%;
      bottom: 0px;
      color: white;
      opacity: 7;
      background: rgba(0,0,0,0.4);
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      /* padding: 5px 10px;   */
  }





button {
	background:transparent ;
	border: 0;
	color: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;

}

button:hover {
	cursor: pointer;
}

#seekslider{
	width: 545px;
 
}

#volumeslider {
	width: 70px;
}

 </style>
</style>
    <style scoped>video {
  width: 100%    !important;
  height: auto  !important;


  }





  </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<style>
table { 
  width: 80%; 
  border-collapse: 0%; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #fff; 
}
th { 
  background: #fff; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 0px; 
  border: 0px solid #ccc; 
  text-align: left; 
}
</style>

</head>

<main>
	
	<header>
<P>VGA New Player</p>
<div  id="vga-video_player" ><center>
     

<table class="center">
 
  <tr>
    <td>

<div id="video_container" >
<video  id="vga_player" preload="metadata" playsinline controls   style="  height:=550px;">
<source src="http://smtvs.com/tv-media/legends-of-tomorrow-tvshow.mp4" type="video/mp4">
<source src="videos/VID_20210203_145935.webm" type="video/webm">

 
</video>
<div id="video_controls_bar"  style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 1px; color:#ffffff;">
&nbsp;&nbsp; <button id="playpausebtn"><i class ='fa fa-play'></i></button>
  &nbsp;
<span id="curtimetext">00:00</span> 
<input id="seekslider" type="range" min="0" max="100" value="0" step="1" >
&nbsp;
 <button id="mutebtn"><i class ='fa fa-volume-up'></i></button>
&nbsp;&nbsp;

  <input id="volumeslider" type="range" min="0" max="100" value="100" step="1">
&nbsp;
&nbsp;

 <button id="fullscreenbtn"> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
</svg>
</button> &nbsp;
 <p>
        <button ><img src="http://vga.smtvs.com/logo/logo.png" width="70" height="20" alt="" class="img-responsive"></button>&nbsp;&nbsp;
              </p>
 </div>
 </div>

 		
		

</td>
    <td   >

  
<list id="playlist"   align="rihgt" >
<?php
include './playlist.php';
?>

</list>
  <td  >

</table>
</meter>	</header>
	   <script>

var video,video_controls_bar,video_container, playbtn,seekslider, curtimetext, durtimetext, mutebtn, volumeslider, fullscreenbtn;

 
function intializePlayer(){
	// Set object references
	video = document.getElementById("vga_player");
	playbtn = document.getElementById("playpausebtn");
	seekslider = document.getElementById("seekslider");
	curtimetext = document.getElementById("curtimetext");
	durtimetext = document.getElementById("durtimetext");
    mutebtn = document.getElementById("mutebtn");
	volumeslider = document.getElementById("volumeslider");
	fullscreenbtn = document.getElementById("fullscreenbtn"); 
 

	// Add event listeners
	  //  Skip backward 10 seconds
          
        
	playbtn.addEventListener("click",playPause,false);
       video.addEventListener("click",playPause,false);
	seekslider.addEventListener("change",videoSeek,false);
	video.addEventListener("timeupdate",seektimeupdate,false);
	volumeslider.addEventListener("change",setvolume,false);
	mutebtn.addEventListener("click",mute,false);
	volumeslider.addEventListener("change",setvolume,false);
	fullscreenbtn.addEventListener("click",toggleFullScreen,false);
	
}


window.onload = intializePlayer;
function playPause(){
   
    
	if(video.paused){
		video.play();
		playbtn.innerHTML = "<i class ='fa fa-pause'></i>";
	} else {
		video.pause();
		playbtn.innerHTML = "<i class ='fa fa-play'></i>";
	}
}
function video(){
   
    
	if(video.paused){
		video.play();
		playbtn.innerHTML = "<i class ='fa fa-pause'></i>";
	} else {
		video.pause();
		playbtn.innerHTML = "<i class ='fa fa-play'></i>";
	}
}



function videoSeek(){
	var seekto = video.duration * (seekslider.value / 100);
	video.currentTime = seekto;
}
function seektimeupdate(){
	var nt = video.currentTime * (100 / video.duration);
	seekslider.value = nt;
	var curmins = Math.floor(video.currentTime / 60);
	var cursecs = Math.floor(video.currentTime - curmins * 60);
	var durmins = Math.floor(video.duration / 60);
	var dursecs = Math.floor(video.duration - durmins * 60);
	if(cursecs < 10){ cursecs = "0"+cursecs; }
	if(dursecs < 10){ dursecs = "0"+dursecs; }
	if(curmins < 10){ curmins = "0"+curmins; }
	if(durmins < 10){ durmins = "0"+durmins; }
	curtimetext.innerHTML = curmins+":"+cursecs;
	durtimetext.innerHTML = durmins+":"+dursecs;
}


function mute(){
	if(video.muted){

		video.muted = false;
		mutebtn.innerHTML = "<i class ='fa fa-volume-up'></i>";
	} else {
		video.muted = true;
		mutebtn.innerHTML = "<i class ='fa fa-volume-off'></i>";
	}
}


function setvolume(){
	video.volume = volumeslider.value / 100;
}


function toggleFullScreen(){
	if(video.requestFullScreen){
		video.requestFullScreen();
	} else if(video.webkitRequestFullScreen){
		video.webkitRequestFullScreen();
	} else if(video.mozRequestFullScreen){
		video.mozRequestFullScreen();
	}
}


var vga_player = document.getElementById("vga-video_player");
video = vga_player.getElementsByTagName("video")[0],

video_links = vga_player.getElementsByTagName("list")[0],
source = video.getElementsByTagName("source"),
link_list = [],
path = 'https://smtvs.com/tv-media/',
currentVideo = 0,
allLnks = video_links.children,
lnkNum = allLnks.length;
video.removeAttribute("controls");
video.removeAttribute("poster");

(function() {
function playVideo(index) {
    video_links.children[index].classList.add("currentvideo");
    source[1].src = path + link_list[index] + ".webm";  
	source[0].src = path + link_list[index] + ".mp4";
    currentVideo = index;
    video.load();
	video.play();
}

for (var i=0; i<lnkNum; i++) {
var filename = allLnks[i].href;
link_list[i] = filename.match(/([^\/]+)(?=\.\w+$)/)[0];
(function(index){
        allLnks[i].onclick = function(i){
        i.preventDefault();  
		for (var i=0; i<lnkNum; i++) {
		allLnks[i].classList.remove("currentvideo");
		}
		playVideo(index);
        }    
    })(i);
}
video.addEventListener('ended', function () {
    allLnks[currentVideo].classList.remove("currentvideo");
    if ((currentVideo + 1) >= lnkNum) { nextVideo = 0 } else { nextVideo = currentVideo+1 }
    playVideo(nextVideo);
})




var indexOf = function(needle) {
    if(typeof Array.prototype.indexOf === 'function') {
        indexOf = Array.prototype.indexOf;
    } else {
        indexOf = function(needle) {
            var i = -1, index = -1;
			for(i = 0; i < this.length; i++) {
                if(this[i] === needle) {
                    index = i;
                    break;
                }}
            return index;
        };}
    return indexOf.call(this, needle);
};
 	var focusedLink = document.activeElement;
 	index = indexOf.call(allLnks, focusedLink);
 	
document.addEventListener('keydown', function(e) {
if (index) {
	var focusedElement = document.activeElement;
    if (e.keyCode == 40 || e.keyCode == 39) { // down or right cursor
    var nextNode = focusedElement.nextElementSibling;
    if (nextNode) { nextNode.focus(); } else { video_links.firstElementChild.focus(); }
    }
   if (e.keyCode == 38 || e.keyCode == 37) { // up or left cursor
    var previousNode = focusedElement.previousElementSibling;
    if (previousNode) { previousNode.focus(); } else { video_links.lastElementChild.focus(); }
    }
 }
});

})();  


</script>



</main>



</body>




</html>
