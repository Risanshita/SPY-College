<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

#mybgcarousel{ /* CSS for specific carousel container called #mybgcarousel. */
width:100%;
height:700px;
}

/* ######### Shared CSS for various parts of carousel (in the event of multiple carousels) ######### */

div.bgcarousel{ /* shared CSS for main carousel container */
background: black url(ajaxload.gif) center center no-repeat; /* loading gif while caoursel is loading */
}

div.bgcarousel img.navbutton{ /* CSS for the nav buttons */
}

div.bgcarousel div.slide{ /* CSS for each image's DIV container within main container */
background-color: black;
background-position: center center; /* center image within carousel */
background-repeat: no-repeat;
background-size: cover; /* CSS3 property to scale image within container? "cover" or "contain" */
color: black;
}

div.bgcarousel div.selectedslide{ /* CSS for currently selected slide */
}

div.bgcarousel div.slide div.desc{ /* DIV that contains the textual description inside .slide */
position: absolute;
color: white;
left: 40px;
top: 100px;
width:200px;
padding: 10px;
font: bold 16px sans-serif, Arial;
text-shadow: 0 -1px 1px #8a8a8a; /* CSS3 text shadow */
z-index:5;
}

div.bgcarousel div.selectedslide div.desc{ /* CSS for currently selected slide's desc div */
}

div.bgcarousel div.slide div.desc h2{
font-size:150%;
margin:0;
}

div.bgcarousel div.slide div.desc a{
color:yellow;
text-decoration:none;
}

</style>

<script src="jquery.min.js"></script>
<script src="jquery.velocity.min.js"></script>
<script type="text/javascript" src="jquery.touchSwipe.min.js"></script>

<script src="bgcarousel.js" type="text/javascript">

/***********************************************
* Background Image Carousel- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<script type="text/javascript">

var firstbgcarousel=new bgCarousel({
	wrapperid: 'mybgcarousel', //ID of blank DIV on page to house carousel
	imagearray: [
		['a.jpg', '<h2>Autumn Day</h2>The sun peaks through the trees, a knife that cuts through the chill, crisp air.'], //["image_path", "optional description"]
		['b.jpg', '<h2>Wind Chime</h2>The bellweather of the sky, the chime speaks of impending turmoil.'],
		['c.jpg', 'The scent of spring invigorates her as she inhales whilst the warm breeze brings a wave of tranquility.'],
		['redbench.jpg', 'Alone and Lonliness- Peace and Inner Struggle'] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:3000, cycles:2, stoponclick:false, pauseonmouseover:true},
	navbuttons: ['left.gif', 'right.gif', 'up.gif', 'down.gif'], // path to nav images
	activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
	orientation: 'h', //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 500 //transition duration (milliseconds)
})

</script>
</head>

<body>
<div id="mybgcarousel" class="bgcarousel"></div>
</body>
</html>