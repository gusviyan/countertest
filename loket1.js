<script>
var num;
var loket;
var au1 = new Audio("suara/satu.wav");
var au2 = new Audio("suara/dua.wav")

function tes(){
	alert(length);
}

function playAudio(num,loket) { 
jum = num.length;

if (num == 1){
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
				'suara/satu.wav'
				
			]);
		})();

}
else if(num == 2){
	
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
	
}
else if(num == 3){
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
				'suara/tiga.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
}

else if(num == 4){
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
				'suara/empat.wav',
				'suara/loket.wav',
				'suara/satu.wav'
				
			]);
		})();
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