	<!--Canvas 1-->
	var cnv = document.getElementById('mycanvas');
	var ctx = cnv.getContext('2d');
	ctx.fillStyle = 'green';
	ctx.fillRect(45, 50, 100, 50);
	
	<!--Canvas 2-->
	var cnv1 = document.getElementById('mycanvas1');
	var ctx1 = cnv1.getContext('2d');
	ctx1.beginPath();
	ctx1.moveTo(90,40);
	ctx1.lineTo(45,100);
	ctx1.lineTo(135,100);
	ctx1.closePath();
	ctx1.fillStyle = "orange"; ctx1.fill();
	
	<!--Canvas 3-->
	var cnv2 = document.getElementById('mycanvas2');
	var ctx2 = cnv2.getContext('2d');
	ctx2.fillStyle = 'blue';
	ctx2.arc(95,70,40,0,Math.PI*2,false);
	ctx2.fill();
	
	<!--Canvas 4-->
	var cnv3 = document.getElementById('mycanvas3');
	var ctx3 = cnv3.getContext('2d');
	ctx3.font = '15px "Arial Black"';
	ctx3.fillText('Welcome to', 45, 65);
	ctx3.fillText('Hebrewing Learning', 10, 85);

	<!--Canvas 5-->
	var cnv4 = document.getElementById('mycanvas4');
	var ctx4 = cnv4.getContext('2d');
	var pict = new Image();
	pict.src = "starPhoto.png";
	pict.onload = function() {						ctx4.drawImage(pict, 30, 10, pict.width*0.6, pict.height*0.6);}
	
	<!--Canvas 6-->
	var cnv5 = document.getElementById('mycanvas5');
	var ctx5 = cnv5.getContext('2d');
	otherchange = 1;
	// x and y variables determine the position of the ball
	x = 150;
	y = 150;
	// change determines how far the ball moves during a redraw and which direction
	change =2;
	// width and height determine the dimensions of the box.
	w = 190;
	h = 150;
	function animate() {
		ctx5.fillStyle = 'lightgray';
		ctx5.fillRect(0,0,w,h);
		ctx5.fillStyle = 'red';
		ctx5.beginPath();
		ctx5.arc(x,y,5,0,Math.PI*2,true);
		ctx5.fill();
		if (x>=w||x<=0) {
			change = -change
		}
		x = x + change;
		if(y>=h||y<=0) {
			otherchange = -otherchange;
		}
		y = y + otherchange;
	}
	setInterval(animate, 10);						