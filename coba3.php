<!DOCTYPE html>
<html>
<body>
<audio id="container" autoplay=""></audio>
<button onclick='playAudio(21,2)' type='button'>Play Audio</button>
<script>
var num;
var loket;
var au1 = new Audio("suara/satu.wav");
var au2 = new Audio("suara/dua.wav")

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
//alert(num);
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
        'suara/nomor-urut.wav'
		
    ]);
})();

if (num == 21){
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
				'suara/dua.wav',
				'suara/puluh.wav',
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
				'suara/nomor-urut.wav',
				'suara/dua.wav',
				'suara/puluh.wav',
				'suara/satu.wav',
				'suara/loket.wav',
				'suara/dua.wav'
				
			]);
		})();
	}
}

 else if(num == 202){
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
				'suara/dua.wav',
				'suara/ratus.wav',
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
				'suara/dua.wav',
				'suara/ratus.wav',
				'suara/dua.wav',
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