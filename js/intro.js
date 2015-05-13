jQuery(document).ready(function($){

	var start = new Date().getTime();

	function beginGif() {
		console.log("begingif");
		$('.intro').addClass("beginGif");
		console.log("work?");
	}

	function beginEndlessGif() {
		console.log("begin endless gif");
		$('.intro').addClass("endlessGif");
	}

	setTimeout(beginGif(), 3000);
	// setTimeout(beginEndlessGif(), 50000);


	// function changeBackground() {
	// 	var now = new Date().getTime();
	// 	console.log(now - start);
	// 	if ((now - start)*1000 == 3) {
	// 		$('.headline').css("background-image", "url(/recordBEGIN.gif)");
	// 	}
	// 	if ((now - start)*1000 == 5) {
	// 		$('.headline').css("background-image", "url(/recordENDLESS.gif)");
	// 	}
	// }


	// setInterval(changeBackground(), 1);

// 	for ( i=0; i<10000; i++) {
// 		if ((i%1000)==0) {
// 		var now = new Date().getTime();
// 		console.log(now-start);	
// 	}
// }


});
