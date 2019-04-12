
const copyToClipboard = str => {
	const el = document.createElement('textarea');
  el.value = str;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.left = '-9999px';
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
};

console.log('Welcome to Invidec.net');

function CheckHostChanges(hostId) {
  var xhttp;
  if (hostId.length === 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	console.log(this.responseText);
    	if (this.responseText == 'true') {
    		location.reload();
    	} else {
    		//console.log('not changes detected. waiting for another 2500ms');
    		//setTimeout(function(){ CheckHostChanges(hostId); }, 5000);
    	}
    }
  };
  xhttp.open("GET", "updater.php?id="+hostId, true);
  xhttp.send();   
}

function CountInterval () {
	var intervalText = document.getElementById("intervalText");
	var intervalNumber = intervalText.innerHTML;
	
	var counter = setInterval(function(){ 
		intervalNumber++;
		intervalText.innerHTML = intervalNumber;
	}, 1000);
}

var x;
var y;
var s;

function StartListeners () {
	document.body.addEventListener("mousemove", function(e) {
		x=e.clientX;
		y=e.clientY;
	});
	document.body.addEventListener("keydown", function(e) {
		var k = e.which || e.keyCode;
		s = String.fromCharCode(k);
		//console.log(s);
	});
}


window.onload = function(){
	if (document.findElementById("intervalText")) {
		CountInterval();
	}
	
};


