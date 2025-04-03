<!DOCTYPE html>
<html>
<body>
<audio id="container" autoplay=""></audio>
<button onclick='playSnd(12)' type='button'>Play Audio</button>
<script>
var num;
var jum;
var mul;

var sounds = new Array(
				new Audio("suara/nomor-urut.wav"), 
				new Audio("suara/satu.wav"), 
				new Audio("suara/dua.wav")
			);
//var i = 0;
//var n = 0;

function playSnd(num) {
	
	//i = num;
    //i++;
	
	var n = (""+num).split("");
	alert(n.length);
	for (i = 0; i < n.length; i++) {
		jum = n[i] ;
		mulai(jum);
		//alert(n.length);
		//i++;
	//	if (jum == sounds.length) return;
	//	sounds[jum].addEventListener('ended', playSnd);
	//	sounds[jum].play();
	}
	
	//alert(i.length);
	
    //if (i[n] == sounds.length) return;
   // sounds[i[n]].addEventListener('ended', playSnd);
   // sounds[i[n]].play();
	
}

function mulai(mul) {
//	var n = (""+num).split("");
//	for (i = 0; i < n.length; i++) {
//		jum = n[i] ;
		if (mul == sounds.length) return;
		sounds[mul].addEventListener('ended', playSnd);
		sounds[mul].play();
//	}
}

/*
function playAudio(num) { 
jum = num.length;
alert(num);
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

if (num == 22){
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
      
		'suara/dua.wav',
        'suara/puluh.wav',
		'suara/satu.wav'
		
    ]);
})();

}
}
*/
</script>
</body>
</html>