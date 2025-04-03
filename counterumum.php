<!DOCTYPE html>

<?php
include "koneksi.php";
?>

<html>
<title>COUNTER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index_files/w3.css">
<link rel="stylesheet" href="index_files/css.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>




<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-10 w3-center"><b>ANTRIAN HOLD RAJAL</b></h3>
  
	<?php
		$hld = mysql_query ("SELECT * FROM tbl_umum WHERE status = 2");
		echo" <table style='table-layout:fixed; padding-left:5px'>
				<col width='50%' />
				<col width='25%' />
				<col width='25%' />
		";
		while ($hldlist = mysql_fetch_array($hld)) {
			echo"
			<tr>
			<td align='left' colspan=2><font size=40> $hldlist[0] </font></td>
			<td > 
			<form method=POST action='aksi_panggil.php?act=clear&id=$hldlist[0]'>
			<button onclick='document.getElementById('clear').style.display=block;playAudio($hldlist[0],2)' class='w3-button w3-black'>Clear</button> 
			</form>
			</td>
			<td > 
			<a href='counterumum.php?act=callback&no=$hldlist[0]'><button class='w3-button w3-black' onclick='playAudio($hldlist[0],2)'>Call</button> </a>
			
			</td>
			</tr>
			";
		}
		echo" </table>";
	?>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">SOME NAME</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row" style="margin-top:0">
    <div class="w3-half" style="border: 5px solid black; width: 50%; height:750px">
		<div class="w3-top w3-large" style="padding-left: 5px;">
			<p style="font-size:200%"><a href='counterumum.php?act=call'><button onclick="document.getElementById('rajal').style.display='block'" class="w3-button w3-black">Panggil</button></a>
			</p>
		</div>
		
		<?php
		$act = $_GET['act'];
		if ( $act == "call") {
		$cek = mysql_query ("SELECT * FROM tbl_umum WHERE status = 0 LIMIT 1");
		$pgl = mysql_fetch_array ($cek);
			
			if ($pgl != ''){
			echo"
			<div id='rajal' style='display: block;'>	
			<center>
			<h1 style='font-size:1200%; padding-top: 100px'>$pgl[0]</h1>
			</center>
			
			<div class='w3-display-bottomleft w3-large' style='padding-left: 100px; padding-bottom: 200px;'>
			
			<form method=POST action='aksi_panggil.php?act=clear&id=$pgl[0]'>
			<p style='font-size:200%;padding-left: 20px;'>
			<button onclick='document.getElementById('clear').style.display=block' class='w3-button w3-black'>Clear</button></p>
			</form>
			
			</div>
			
			<div class='w3-display-bottomleft w3-large' style='padding-bottom: 200px;'>
			<form method=POST action='aksi_panggil.php?act=hold&id=$pgl[0]'>
			<p style='font-size:200%; '>
			<button onclick='document.getElementById('hold').style.display=block' class='w3-button w3-black'>Hold</button></p>
			</form>
			
			</div>
			<div class='w3-top w3-large' style='position:absolute; left:480px; top:0px; '>
			<p style='font-size:200%;'>
			<button onclick='playAudio($pgl[0],1)' class='w3-button w3-black' type='button'>Play Audio</button>
			</p>
			</div>
			</div>";
		
			}
	
		
		}else if ( $act == "callback") {
		$cek = mysql_query ("SELECT * FROM tbl_umum WHERE status = 2 and id=$_GET[no]");
		$pgl = mysql_fetch_array ($cek);
			
			if ($pgl != ''){
			echo"
			<div id='rajal' style='display: block;'>	
			<center>
			<h1 style='font-size:1200%; padding-top: 100px'>$pgl[0]</h1>
			</center>
			<div class='w3-display-bottomleft w3-large' style='padding-left: 100px; padding-bottom: 200px;'>
			<form method=POST action='aksi_panggil.php?act=clear&id=$pgl[0]'>
			<p style='font-size:200%;padding-left: 20px;'>
			<button onclick='document.getElementById('clear').style.display=block' class='w3-button w3-black'>Clear</button></p>
			</form>
			</div>
			
			<div class='w3-display-bottomleft w3-large' style='padding-bottom: 200px;'>
			<form method=POST action='aksi_panggil.php?act=hold&id=$pgl[0]'>
			<p style='font-size:200%;'>
			<button onclick='document.getElementById('hold').style.display=block' class='w3-button w3-black'>Hold</button></p>
			</form>
			</div>
			
			<div class='w3-top w3-large' style='position:absolute; left:480px; top:0px; '>
			<p style='font-size:200%;'>
			<button onclick='playAudio($pgl[0],1)' class='w3-button w3-black' type='button'>Play Audio</button>
			</p>
			</div>
			
			</div>";
		
			}
		}
		
		?>
		
			
		<center>
		<h1 class='w3-display-bottomleft' style='font-size:500%;padding-bottom: 20px;'> Rawat Jalan
		<audio id="container" autoplay=""></audio>
		
		<center>
		
		
		
		
		
	</div>

    <div class= "w3-half" style="border: 5px solid black; width: 50%; height:750px">
      
	 
    </div>
  </div>  
    

  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

 


 
<!-- End page content -->
</div>
<script>
var num;
var loket;
var au1 = new Audio("suara/satu.wav");
var au2 = new Audio("suara/dua.wav")

function tes(){
	alert(length);
}

/*

var sounds2 = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav")
			);
var i = -1;


function playSnd(num) {
	if (num == 1) {
	var sounds = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav")
			);
	}
    i++;
	//alert(i);
    if (i == sounds.length) return;
    sounds[i].addEventListener('ended', playSnd);
    sounds[i].play();
	//sounds2[i].addEventListener('ended', playSnd);
    //sounds2[i].play();
}
*/

function playAudio(num,loket) { 
jum = num.length;



if (num == 1){
	if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/b.mp3',
				'suara/satu.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
	} else if (loket  == 2) {
		(function() {
				var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/a.mp3',
				'suara/satu.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	}
}
else if(num == 2){
	 if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/a.mp3',
				'suara/dua.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
	 } else if (loket  == 2) {
		 (function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/a.mp3',
				'suara/dua.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	 }
}
else if(num == 3){
	 if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/b.mp3',
				'suara/tiga.wav',
				'suara/loket.wav',
				'suara/tiga.wav'
				
			]);
		})();
	 } else if (loket  == 2) {
		 (function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/ding.mp3',
				'suara/nomor-urut.wav',
				'suara/a.mp3',
				'suara/dua.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	 }
}

 else if(num == 42){
	 if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/dua.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
	 } else if (loket  == 2) {
		 (function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/dua.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	 }
}

 else if(num == 43){
	 if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/tiga.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
	 } else if (loket  == 2) {
		 (function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/tiga.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	 }
}
else if(num == 45){
	 if (loket == 1){
		(function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/lima.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
	 } else if (loket  == 2) {
		 (function() {
			var Mp3Queue = function(container, files) {
				var index = 1;
				if(!container || !container.tagName || container.tagName !== 'AUDIO')throw 'Invalid container';
				if(!files || !files.length)throw 'Invalid files array';        
				
				var playNext = function() {
					if(index < files.length) {
						container.src = files[index];
						index += 1;
					} else {
						container.removeEventListener('ended', playNext, false);
					}
				};
				
				container.addEventListener('ended', playNext);
				
				container.src = files[0];
			};
			
			var container = document.getElementById('container');
			
			new Mp3Queue(container, [
				'suara/nomor-urut.wav',
				'suara/empat.wav',
				'suara/puluh.wav',
				'suara/lima.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	 }
}
}

</script>


</body>
</html>
