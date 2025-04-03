<!DOCTYPE html>
<html>
<body>
<?php
echo "
<audio id='myAudio'>
  <source src='suara/dua.wav' type='audio/mpeg'>
  
  Your browser does not support the audio element.
</audio>
<audio id='myAudio1'>
 
  <source src='suara/puluh.wav' type='audio/mpeg'>
  Your browser does not support the audio element.
</audio>

<p>Click the buttons to play or pause the audio.</p>

<button onclick='playAudio2(36)' type='button'>Play Audio</button>
<button onclick='pauseAudio()' type='button'>Pause Audio</button> 
";
?>
<script>
var sounds = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav"),
				new Audio("suara/tiga.wav"),
				new Audio("suara/empat.wav"),
				new Audio("suara/lima.wav"),
				new Audio("suara/enam.wav"),
				new Audio("suara/tujuh.wav"),
				new Audio("suara/delapan.wav"),
				new Audio("suara/sembilan.wav"),
				new Audio("suara/sepuluh.wav"),
			);
var sounds2 = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav"),
				new Audio("suara/tiga.wav"),
				new Audio("suara/empat.wav"),
				new Audio("suara/lima.wav"),
				new Audio("suara/enam.wav"),
				new Audio("suara/tujuh.wav"),
				new Audio("suara/delapan.wav"),
				new Audio("suara/sembilan.wav"),
				new Audio("suara/sepuluh.wav"),
			);
var x = document.getElementById("myAudio"); 
var y = document.getElementById("myAudio1"); 
var i = -1;
var n, num, str, leng;
function playAudio() { 
	x.play(); 
	x.addEventListener('ended');
	//y.play();
} 
function playAudio1() { 
    y.play(); 
	y.addEventListener('ended');
	//y.play();
} 
function playAudio2() { 

var soundss = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav"),
				new Audio("suara/tiga.wav"),
				new Audio("suara/empat.wav"),
				new Audio("suara/lima.wav"),
				new Audio("suara/enam.wav"),
				new Audio("suara/tujuh.wav"),
				new Audio("suara/delapan.wav"),
				new Audio("suara/sembilan.wav"),
				new Audio("suara/sepuluh.wav"),
			);
	i++;
//	str = n.toString();
//	leng = str.length;
	//alert(num[i]);
//	num = str.split("");
	//alert(num[i] + " " + num[1]);
	if (i == soundss.length) return;
		//setTimeout(function() { sounds[num[i]].play(); }, 1000)
		sounds[i].play(); 
		sounds[i].addEventListener('ended', playAudio2());
//	} 
//	if (i == n.length) {
//		i = -1;
//	}
	
} 

function pauseAudio() { 
    x.pause(); 
} 
</script>

</body>
</html>