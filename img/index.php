
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>spy college</title>
<link rel="stylesheet" type="text/css" href="indexcss.css" />
<link rel="stylesheet" type="text/css" href="contact-form.css" />

<!------------------------------slide pics------------thru java script----------------------------------->



<style>

#mybgcarousel{ /* CSS for specific carousel container called #mybgcarousel. */
width:100%;
height:500px;
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
color: #002504E;
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
		['cam.gif', '<h2>CAMPUS</h2>The sun peaks through the trees, a knife that cuts through the chill, crisp air.'], //["image_path", "optional description"]
		['pr.jpg', '<h2 >LABS</h2>The bellweather of the sky, the chime speaks of impending turmoil.'],
		['lib.jpg', '<h2>LIBRARY</h2>The scent of spring invigorates her as she inhales whilst the warm breeze brings a wave of tranquility.'],
		['prk.gif', '<h2>PRINCIPAL DESK</h2>Simple and Dynemic Principal'] //<--no trailing comma after very last image element!
],
	displaymode: {type:'auto', pause:2000, cycles:2, stoponclick:false, pauseonmouseover:true},
	navbuttons: ['left.gif', 'right.gif', 'up.gif', 'down.gif'], // path to nav images
	activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
	orientation: 'h', //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 500 //transition duration (milliseconds)
})

</script>


<!------------------endingg of slidepics----------------------------------------------------------------------->
</head>

<body>
<div class="con">
 <img src="img/phone.PNG" height="30" width="30" style="float-right:-20px; "><!--h3 style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;"--> <b>0631-2221574<br /><a href="https://www.facebook.com/spycollegegaya/?ref=hl" target="_blank"><img src="img/fb.jpg"
  height="40" width="120"  style="float:right; margin-right:+35px; box-shadow:10px 10px 5px  #999999; "/></a></h2></b>

</div>
<div class="title">
<img src="img/logo.PNG" height="95" width="110" / style="float:left;">
<h1 style="color:#00254E; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
<center>SURENDRA PRASAD YADAV COLLEGE</h1> <p>
<h3 style="font-family:'Courier New', Courier, monospace;"><center>Affiliated Unit of Magadh University Bodhgaya</h3></center>

</div></center>
<div class="menu">
<center><div class="h2"><img src="img/g-icon.png" style="float:right; margin-top:8px; margin-right:-30px;"/><img src="img/f-icon.png" style="float:right; margin-top:8px;" /><img src="img/t-icon.png" style="float:right; margin-top:8px;  "/>
 <h3> <ul>
     <li style="width:auto;">
	  <a href="index.php" style="text-decoration:none;color:#FFF;">  HOME</a>
		   <ul>
		     
			  
			  
		   </ul>
	 </li>
	   <!--li> <a href="about.php" style="text-decoration:none; color:#FFF;">ABOUT US</a>
   <ul>
		      <li><a href="buss.php">NCC/NSS</a></li>
			   <li><a href="tec.php">LABS</a></li>
			   
			  <li><a href="man.php">SPORTS</a></li>
			  <li><a href="out.php">CLASSES</a></li>
			  </ul>
              </li-->
               
     
           	 
     <li style="width:150px;">
	  ABOUT US
		   <ul>
		      <li><a href="pr.php">PRINCIPAL</a></li>
			  
			   
			  <li><a href="sec.php">SECRETARY</a></li>
               <li><a href="mis.php">OUR MISSION
               
                </a></li>
			  <li><a href="vis.php">OUR VISION</a></li>
			 </ul>
             </li>
		 
    <ul>
     
           	 
     <li style="width:150px;">
	  FACILITY
		   <ul>
		      <li><a href="ncc.php">NCC/NSS</a></li>
			   <li><a href="lb.php">LABS</a></li>
			   
			  <li><a href="sp.php">SPORTS</a></li>
			  <li><a href="cl.php">CLASSES</a></li>
			  </ul>
		 
     <li style="width:150px;">
	  COURCES
		   <ul>
		      <li><a href="ug.php">U . G</a></li>
			   <li><a href="isc.php">I.SC</a></li>
			   
			  <li><a href="ia.php">I.A</a></li>
			  <li><a href="icom.php">I.COM</a></li>
			  
			  
			  
	
	  
   </ul>
   
   <li style="width:120px;">
   <a href="gal.php" style="text-decoration:none;color:#FFF;">GALLERY</a>
    <li style="width:140px;">
   <a href="sc.php" style="text-decoration:none;color:#FFF;">SCHOLARSHIP</a>
    
     <li style="width:auto;">
   <a href="notice.php" style="text-decoration:none;color:#FFF;">NOTICE</a>
     <li style="width:140px;">
<a href="cn_us.php" style="text-decoration:none; color:#FFF;">   CONTACT US</a>
   
   
   
	 </li>
    
      
  <!--li style="width:80px;">
	  <a href="profile.php"> LOG IN</a>
		 </li>
   <li style="width:80px;">
	  <a href="signup.php">SIGN UP</a--></h3>
		   
	</li>
   </ul>
 </div>
</center>



</div>
<!---------------------------------------------------body part of project--------------------------------------------------->
<center><div class="body"><p>

<!--img src="images/scl.jpg" height="500" width="1000" /-->
<div id="mybgcarousel" class="bgcarousel" style="height:500px;"></div>
<!---gallary images---end---->

<div class="h12 "><div class="h6"><div class="h7" style="box-shadow:10px 10px 10px #000;"><font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:10px; color:#FFF;  "> <center>NOTICE BOARD</center></font>
</div><marquee direction="up" height="230" onMouseOver="this.stop();" onMouseOut="this.start();">
<a href="notice.php" style="text-decoration:none; color:#000; text-shadow:10px 10px 10px #666666; text-align:justify; text-justify:inter-ideograph;"><b style="text-align:justify;text-justify:inter-word;">Last date to fill up the examination form of intermediate -2016 is 11th jan 2016 at college counter (with out late fine) & 15th jan 2016(with late fine)</b><img src="img/new-blink.gif"></a>
<br></br>
<a href="notice.php"><img src="img/sci.PNG"></a><br><br>
<a href="notice.php" style="text-decoration:none; color:#000; text-shadow:10px 10px 10px #666666; text-align:left;"><b style="text-align:justify;">- The bseb will going to released the bihar board 12th time table for science,arts & commerece</b><img src="img/new-blink.gif"></a>
<br>
<br>
           <?php
		   while($a=mysql_fetch_array($res))
		   {
		   
		   ?>             <p><a href="comm.php" style="text-decoration:none; color:black; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;
     " > <?php   echo $a["desc"];   ?>  <img  src="img/new-blink.gif"  /></p></a>
						
					<?php
		   }
					
					?>	
					</font></a></marquee></div>
<!--------------------------cource in notice------------------------------------------------->
<div class="h6" style="float:right;"><div class="h7" style="box-shadow:10px 10px 10px #000;"><font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:0px; color:#FFF;   "> <center>COURCES</center></font>
</div><font size="3">
                        <p><a href="ug.php" style="text-decoration:none; color:black;">UNDER GRADUATE(ALL STREAM)<img  src="img/new-blink.gif"  /></p></a>
						
						
						
<p><a href="isc.php" style="text-decoration:none; color:black;">INTERMEDIATE OF SCIENCE
<img  src="img/clickh.gif" /></P></font></a>
<p><a href="icom.php" style="text-decoration:none; color:black;">INTERMEDIATE OF COMERCE
<img  src="img/clickh.gif" /></P></font></a>
<p><a href="ia.php" style="text-decoration:none; color:black;">INTERMEDIATE OF ARTS
<img  src="img/clickh.gif" /></P></font></a>
<a href="dept.php" style="text-decoration:none;"><div class="dept"> <font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:0px; color:#FFF;   "> <center>DEPT. OF EXAMINATION<!--img src="img/click.PNG" height="25" width="80"--></center></font></div></a>
</div>



</div>

<h2 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#00254E;"><b>------ Welcome To Surendra Prasad Yadav College ------</b></h2 >
<!--div class="text" style="float:left;"-->
<h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#666; text-align:justify; text-justify:inter-word;">

Surendra Prasad Yadav College, A.P Colony , Gaya was established in  the heart of the city in 1992. It’s a permanent affiliated unit of Magadh University Bodh Gaya and approved by the Bihar Government .It is a Govt. added college. This College is situated on the pious land of enlightenment of Lord Budha surrounded with lucid an lovely landscape of nature. It lies to the left of Dobhi Road leading to the station in A.P colony  locality near Asha Singh more it is situated at a distance of 2km sauth west from Gaya railway junction and 1.5km north west from Gaya state bus stand.
To spread the rays of higher  education
among  the people of every section of society in urban as well as rural areas with the objectives to cope with the requirement of value – based education. It aims at imparting the rear qualitative - education rather quantitative.
Its journey since establishment to up to now has been very adventurous and struggling.Fighting against a lot of obstacles today it has cut a bright figure among the leading colleges of Bihar.
The College has been getting very successful and grand achievement in catering the job- oriented education upto Graduation level in every discipline- Arts, Science, Commerce  etc.
The college is profusely enriched with sophisticated apparatus, electronic gadgets and science labs. It has also a very big library with the capacity of accommodating more than hundred readers at a time. Today it is thought to be efficient for fulfilling the need of every type of learning upto graduation level.
The college is highly fit for competing the challenges of quality-based education under the incredible guidance of<b style="color:#000;"> Dr.Umashankar. </b>who is very dynamic and energetic Principal of this college.
<p>


  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Ultimately the over all achievement became  possible because of the generous gesture of Dr.surendra prasad yadav(MLA) who donated required land adequate means.His pious mission was to provide the education up to degree level in honours and pass course both especially to the students of weaker sections
By din't of the great effort of the honourable  founder secretary Dr. Surendra prasad yadav(MLA,MP,Minister in Bihar goverment)
, this college has been running sucessfully.this college is managed by governing body . which  ensure  the proper planing and co-ordinated development of new cources,phisical and instructional facilities,staff's functions and responsiblities.For any 
type of complain, Governing Body will be   the first jury as a prima facie.
<!--and the college is also in very progress mode.and all student is also supported our mission and vision.At the time when even school education was scarce the elite of the town started this college in 1964 with a view to impart higher education to the scholars of this Magadh range. In 1980, it became a constituent unit of Magadh University. The members of teaching staff of the college are of brilliant merit and are fully devoted to teaching and research work to improve the academic standards of learners.
At the time when even school education was scarce the elite of the town started this college in 1964 with a view to impart higher education to the scholars of this Magadh range. In 1980, it became a constituent unit of Magadh University. The members of teaching staff of the college are of brilliant merit and are fully devoted to teaching and research work to improve the academic standards of learners. all
teaching staff  is also very serious for college work and college responsiblity.-->
<div class="fn"><center>
<b><div class="fn1"><h3>FACILITIES</h3>
<a href="lib.php" style="text-decoration:none; color:#666;">Library</a><br /><br />
<a href="sp.php" style="text-decoration:none; color:#666;">Sports</a><br /><br />
<a href="ncc.php "style="text-decoration:none; color:#666;">Ncc/Nss</a><br /><br />
<a href="lb.php" style="text-decoration:none; color:#666;">LABS</a></div>
<div class="fn1"><h3> VISIT OUR COLLEGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h4 style="float:left; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> Ap Colony , Gaya(823001) &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<br /> <br />Email:-info@spycollege.org &nbsp;&nbsp;
<br /> <br />Website:-www.spycollege.org </div>
<div class="fn1">Google Map
<a href="https://www.google.co.in/maps/place/Surendra+Prasad+Yadav+College/@24.7859554,84.9803732,1446m/data=!3m1!1e3!4m5!1m2!2m1!1sspy+college+gaya!3m1!1s0x0000000000000000:0xb6a0112c52bc7f99!6m1!1e1?hl=en" target="_blank"><img src="img/map.PNG" height="200" width="250" /></a></div></b>


<!--div class="fn1"> <h2><b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 Facilities</h2></b> 
<h3> Labs<BR /><br>
 SPORTS<br><br>
 NCC/NSS</div></h3-->

 <div class="fn1"><!--b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"-->
 
 <img src="img/Cn.PNG" height="80" width="280" />
  <a href="mailto:info@spycollege.org"> <img src="img/mail_logo.PNG" height="160" /></a><p>
 <img src="img/g-icon.png" /><img src="img/f-icon.png" />
 <img src="img/t-icon.png"></b>
 </div>
 <!--div class="fn1"> <h2><b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 Facilities</h2></b> 
<h3> Labs<BR /><br>
 SPORTS<br><br>
 NCC/NSS</div></h3-->
 <!--div class="fn1"> <b style="color:#00254E">
 </b> <br style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 <img src="img/map.PNG"  height="250" width="250"/></div-->
 <!--div class="fn1"><b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 </b>
 <img src="img/mail_logo.PNG"  height="200" width="200" "/></div-->
 </div>
 <div class="ft"> <b style="color:#999; text-align:center;"><br /><center>Spy College @2015-16 All Right Reserved</center></b><b style="float:right; color:#999; margin-top:-30px;">Developed BY-Jaswant singh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;+918409009200</b></div>
 

</center>



<!------------request for call back-----------------container------start------->

<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
</title>




<a href="" target="_blank" style="width:130px; height:220px;     no-repeat center; display:block; top:15%;  left:0px; position: fixed; z-index:100000;"></a>

	<link rel="stylesheet" type="text/css" href="contact-form.css" media="screen">

<script type="text/javascript" language="javascript">
         var isIE = document.all ? true : false;
         var isNS = document.layers ? true : false;
         function onlyDigits(e) {
             var key = (isIE) ? window.event.keyCode : e.which;
             var obj = (isIE) ? event.srcElement : e.target;
             var isNum = (key > 47 && key < 58) ? true : false;

             if (key < 32)
                 return true;
             return (isNum);
         }
    </script>



 <script language="Javascript">
<!-- Begin


function emailCheckUser (strEMail, strName, strClass, strMobileNo, strCity) 
{
	
	var checkTLD=1;
	var knownDomsPat=/^(com|COM|net|NET|org|ORG|edu|EDU|int|INT|mil|MIL|gov|GOV|arpa|ARPA|biz|BIZ|aero|AERO|name|NAME|coop|COOP|info|INFO|pro|PRO|museum|MUSEUM|tv|TV)$/;
	var emailPat=/^(.+)@(.+)$/;
	var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
	var validChars="\[^\\s" + specialChars + "\]";
	var quotedUser="(\"[^\"]*\")";
	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
	var atom=validChars + '+';
	var word="(" + atom + "|" + quotedUser + ")";
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
	var matchArray=strEMail.match(emailPat);
	
	
	
	if (matchArray==null) 
	{
	   alert("Email address seems incorrect (check @ and .'s)");
	   document.FrontPage_Form1.email.focus();
	   return document.MM_returnValue = false;
	}
	var user=matchArray[1];
	var domain=matchArray[2];
	for (i=0; i<user.length; i++) 
	{
		if (user.charCodeAt(i)>127) 
		{
			alert("Ths username contains invalid characters.");
			document.FrontPage_Form1.email.focus();
			return document.MM_returnValue = false;
		}
	}
	for (i=0; i<domain.length; i++) 
	{
		if (domain.charCodeAt(i)>127) 
		{
			alert("Ths domain name contains invalid characters.");
			document.FrontPage_Form1.email.focus();
			return document.MM_returnValue = false;
		}
	}
	if (user.match(userPat)==null) 
	{
		alert("The username doesn't seem to be valid.");
		document.FrontPage_Form1.email.focus();
		return document.MM_returnValue = false;
	}
	
	var IPArray=domain.match(ipDomainPat);
	if (IPArray!=null) 
	{
		for (var i=1;i<=4;i++) 
		{
			if (IPArray[i]>255) 
			{
				alert("Destination IP address is invalid!");
				document.FrontPage_Form1.email.focus();
				return document.MM_returnValue = false;
			}
		}
		return true;
	}
	var atomPat=new RegExp("^" + atom + "$");
	var domArr=domain.split(".");
	var len=domArr.length;
	for (i=0;i<len;i++) 
	{
		if (domArr[i].search(atomPat)==-1) 
		{
			alert("The domain name does not seem to be valid.");
			document.FrontPage_Form1.email.focus();
			return document.MM_returnValue = false;
		}
	}
	if (checkTLD && domArr[domArr.length-1].length!=2 && 
			domArr[domArr.length-1].search(knownDomsPat)==-1) 
	{
		alert("The address must end in a well-known domain or two letter " + "country.");
		document.FrontPage_Form1.email.focus();
		return document.MM_returnValue = false;
	}

	
	if (strName=="")
	{
		//alert("Please enter  Name");
		//form.NAME.focus();
		//return document.MM_returnValue = false;
	}
	
	if (strClass=="-")
	{
		//alert("Please enter  Class");
		//form.CLASS.focus();
		//return document.MM_returnValue = false;
	}


	if (strCity=="")
	{
		//alert("Please enter  city");
		//form.CITY.focus();
		//return document.MM_returnValue = false;
	}
	
	if (strMobileNo=="")
	{
		//alert("Please enter  mobile number");
		
		//return document.MM_returnValue = false;
	}
	
	
	return document.MM_returnValue = true;
}


//end -->
</script>



 <script language="JavaScript" type="text/javascript">
	function FrontPage_Form1_Validator(theForm)
	{
		
		if (theForm.NAME.value == "")
		  {
			alert("Please enter a value for the \"Full name of Applicant\" field.");
			theForm.NAME.focus();
			return (false);
		  }
		
		  if (theForm.NAME.value.length < 3)
		  {
			alert("Please enter at least 3 characters in the \"Full name of Applicant\" field.");
			theForm.NAME.focus();
			return (false);
		  }
		
		  if (theForm.NAME.value.length > 60)
		  {
			alert("Please enter at most 60 characters in the \"Full name of Applicant\" field.");
			theForm.NAME.focus();
			return (false);
		  }
		
		  var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.,- \t\r\n\f";
		  var checkStr = theForm.NAME.value;
		  var allValid = true;
		  var validGroups = true;
		  for (i = 0;  i < checkStr.length;  i++)
		  {
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
			  if (ch == checkOK.charAt(j))
				break;
			if (j == checkOK.length)
			{
			  allValid = false;
			  break;
			}
		  }
		  if (!allValid)
		  {
			alert("Please enter only letter, whitespace and \".,-\" characters in the \"Full name of Applicant\" field.");
			theForm.NAME.focus();
			return (false);
		  }
			
		
		 if (theForm.CITY.value == "")
		  {
			alert("Please enter a value for the \"City\" field.");
			theForm.CITY.focus();
			return (false);
		  }
		
		  if (theForm.CITY.value.length < 3)
		  {
			alert("Please enter at least 3 characters in the \"City\" field.");
			theForm.CITY.focus();
			return (false);
		  }
		
		  if (theForm.CITY.value.length > 35)
		  {
			alert("Please enter at most 35 characters in the \"City\" field.");
			theForm.CITY.focus();
			return (false);
		  }
		
		  var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789--,. \t\r\n\f";
		  var checkStr = theForm.CITY.value;
		  var allValid = true;
		  var validGroups = true;
		  for (i = 0;  i < checkStr.length;  i++)
		  {
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
			  if (ch == checkOK.charAt(j))
				break;
			if (j == checkOK.length)
			{
			  allValid = false;
			  break;
			}
		  }
		  if (!allValid)
		  {
			alert("Please enter only letter, digit, whitespace and \"-,.\" characters in the \"City\" field.");
			theForm.CITY.focus();
			return (false);
		  }
		
		
		
		if (theForm.CLASS.value == "-" || theForm.CLASS.value == "")
		  {
			alert("Please enter a value for the \"CLASS\" field.");
			theForm.CLASS.focus();
			return (false);
		  }
		  
		
		
		
		  
		  
		 if (theForm.MOBILENO.value == "")
		  {
			alert("Please enter a value for the \"Mobile No\" field.");
			theForm.MOBILENO.focus();
			return (false);
		  }
		
		  if (theForm.MOBILENO.value.length < 10)
		  {
			alert("Please enter at least 10 characters in the \"Mobile No\" field.");
			theForm.MOBILENO.focus();
			return (false);
		  }
		
		  if (theForm.MOBILENO.value.length > 10)
		  {
			alert("Please enter at most 10 characters in the \"Mobile No\" field.");
			theForm.MOBILENO.focus();
			return (false);
		  }

		  var checkOK = "0123456789-";
		  var checkStr = theForm.MOBILENO.value;
		  var allValid = true;
		  var validGroups = true;
		  var decPoints = 0;
		  var allNum = "";
		  for (i = 0;  i < checkStr.length;  i++)
		  {
			ch = checkStr.charAt(i);
			for (j = 0;  j < checkOK.length;  j++)
			  if (ch == checkOK.charAt(j))
				break;
			if (j == checkOK.length)
			{
			  allValid = false;
			  break;
			}
			allNum += ch;
		  }
		  if (!allValid)
		  {
			alert("Please enter only digit characters in the \"Mobile No\" field.");
			theForm.MOBILENO.focus();
			return (false);
		  }
		  
		  
		  
		  if (theForm.CALLTIME.value == "-" || theForm.CALLTIME.value == "")
		  {
			alert("Please enter a value for the \"Time\" field.");
			theForm.CALLTIME.focus();
			return (false);
		  }
		  
		  
		  return (true);	

	}
	</script>
   
 <script type="text/javascript">
 $(document).ready(function(){
  /*********modelpopup******/
 setInterval("$.fn.slideshow()",4000);
 
  $('.close').click(function() {
        $('.overlay, .modal').fadeOut('slow');
    });
 });
</script>






<div id="slideit">
		<!-- Open/close buttons -->
  <input id="open-item" name="forms" type="radio">
  <input id="close-item" name="forms" type="radio" checked="checked">
		<!-- Open label -->
  <label for="open-item" class="open">Request for call back</label>
		<section>
			<!-- Close label -->
			<label for="close-item" class="close">×</label>
			<!-- Heading -->
			<span class="title">Request for call back</span>
			<!-- Info text and form elements -->
			<div class="wrap">
				<div>
<div class="form-main">
        <div class="form-cover">
       	  <div class="smart-green">
            	
                <form class="niceform" method="POST" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">


				 <input type="hidden" name="STUDYCNAME" id="STUDYCNAME" value="DLP">
				 <div class="field">
				   <label>Interested In</label>
                
                
               <select size="1" name="CLASS" id="CLASS">
                <option value="-" selected="">[PLEASE SELECT ONE]</option>
                <option value="I.SC">ISC
                </option>
                <option value="I.A">IA
                </option>
                <option value="I.COM">I.COM</option>
                <option value="B.A">B.A</option>
                <option value="B.SC">B.SC</option>
                <option value="B.COM">B.COM</option>
                
                </select>
</div>
				 <div class="field" style="margin-top:0;">
				   <label>Your Name</label>
				   <input type="text" name="NAME" id="NAME" size="60" maxlength="60">
			      </div>

                <div class="field">
                  <label>Email</label>
                  <input type="text" name="email" id="email" size="50">
                </div>
                  <div class="field">
                  <label>Mobile No.</label>
                  <input type="text" name="MOBILENO" id="MOBILENO" size="10" onkeypress="return onlyDigits(event)" maxlength="10">
                     </div>
                     <div class="field">
                                    <label>City</label>
                 <input type="text" name="CITY" id="CITY" size="60" class="inputFieldIE" maxlength="60">
                 </div>
                 
                 
                 
                 
                   <!--div class="field">
                <label>Preferred Time of call back</label>
                
                
               <select size="1" name="CALLTIME" id="CALLTIME">
                <option value="-" selected="">[PLEASE SELECT ONE]</option>
                <option value="10:00 - 11:00">10:00 - 11:00 </option>
                <option value="11:00 - 12:00">11:00 - 12:00        </option>
                <option value="12:00 - 13:00">12:00 - 13:00</option>
                 <option value="13:00 - 14:00">13:00 - 14:00</option>
                <option value="14:00 - 15:00">14:00 - 15:00</option>
                <option value="15:00 - 16:00">15:00 - 16:00</option>
                <option value="16:00 - 17:00">16:00 - 17:00</option>
                 <option value="17:00 - 18:00">17:00 - 18:00</option>
                <option value="18:00 - 19:00">18:00 - 19:00</option>
                <option value="19:00 - 20:00">19:00 - 20:00</option>
                </select>
</div-->

	<div class="field">
    <input type="submit" class="button" value="Submit" onclick="emailCheckUser(email.value, NAME.value, CLASS.value, MOBILENO.value,CITY.value); return document.MM_returnValue;" style="color:#000; text-shadow:10px 10px 10px #333;">
    </div>
           </form>
            </div>
        </div>
    </div>
</div>
			</div>
		</section>
</div>  
      
     

 

</body></html>
<!--------end of chat box----------------------------------->
</div> 
</body>
</html>