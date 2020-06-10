var timer	= 750;
var item	= null;
var countDown	= null;

var sub        = null;
var countDown2 = null;
var subcell    = null;

var origColor = "white";
var newColor  = "darkgreen";
var cell      = null;


//Closes layers if click anywhere on the screen

document.onclick = hideBoth;


// open hidden layer

function appear(cellId, id)
{	
	// Cancels timer.
	clearCountDown(countDown);
	
	// Will give TRUE if item is anything but 0 or null
	// Close old layer if there's one open
	hide();

	if (id)
	{
		// Get new layer and show it
		item = document.getElementById(id);
		item.style.visibility = 'visible';
	}

	// Change the bg color of the td as well
	cell = document.getElementById(cellId);
	cell.style.backgroundColor = newColor;
	cell.style.color = origColor;
}


// close showed layer

function hide()
{
	if (item) 
	{
		item.style.visibility = 'hidden';
		item = null;
	}

	if (cell)
	{
		// Change color of cell back to original
		cell.style.backgroundColor = origColor;
		cell.style.color = "black";
		cell = null;
	}
}

function disappear()
{
	// Does "hide" in "timer" milliseconds
	countDown = window.setTimeout(hide, timer);
}


// parameter@  cd, countDown

function clearCountDown(cd)
{
	window.clearTimeout(cd);
}



// parameter@  aId, this will change the color of the <a> 

function appearSub(aId, id)
{
	clearCountDown(countDown2);

	// Clears the countDown of the div, so it doesn't disappear when subMenu is open
	clearCountDown(countDown);

	sub = document.getElementById(id);
	sub.style.visibility = 'visible';

	subcell = document.getElementById(aId);
	subcell.style.backgroundColor = newColor;
	subcell.style.color = origColor;
}

function hideSub()
{
	if (sub)
	{
		sub.style.visibility = 'hidden';
		sub = null;
	}

	if (subcell)
	{
		subcell.style.backgroundColor = origColor;
		subcell.style.color = 'black';
		subcell = null;
	}
}

function disappearSub()
{
	countDown2 = window.setTimeout(hideSub, timer);
	countDown  = window.setTimeout(hide, timer);
}


// This function was created to use it in the document.onclick so it would close any dropMenu or subMenu

function hideBoth()
{
	hideSub();
	hide();
}




function openWindow(name)
{
	window.open(name+'.php','_self');
}

function bgImage(img , name)
{
	if(img == "normal") document.getElementById(name).style.backgroundImage = 'url(images/build/button.png)';
	
	if(img == "inverse") document.getElementById(name).style.backgroundImage = 'url(images/build/buttonInverse.png)';
}




var list = new Array();

function coordinates(id)
{
	var objx = document.getElementById(id);
	var objy = objx;

	for (var x = 0 ; objx ; objx = objx.offsetParent)
	{
		x += objx.offsetLeft;
	}

	for (var y = 0 ; objy ; objy = objy.offsetParent)
	{
		y += objy.offsetTop;
	}

	list[0] = x;
	list[1] = y;
}

function positionRelative(id , idRelative , coordx , coordy)
{
	coordinates(idRelative);

	var obj = document.getElementById(id);

	var x = 0;
	var y = 0;

	// If x or y are entered add the shift value to the position
	if (coordx) 
	{
		// If coordx is an id, get the width of it
		if (typeof coordx != 'number') x = getWidth(coordx);

		else x = coordx;
	}

	if (coordy) y = coordy;

	obj.style.left = list[0] + x;
	obj.style.top  = list[1] + y;
}

function getWidth(id)
{
	return document.getElementById(id).offsetWidth;
}



function openImage(address , id)
{
	var image = document.getElementById(id);

	var w = image.width * 6.4;

	window.open('../../images/' + address , 'popup' , 'height=640 , width='+w);
}