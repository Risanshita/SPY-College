<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

	<title>spy college</title>
	<link rel="stylesheet" type="text/css" href="http://spycollege.org/indexcss.css" />
	<link rel="stylesheet" type="text/css" href="http://spycollege.org/contact-form.css" />

	<!------------------------------slide pics------------thru java script----------------------------------->



	<style>
		#mybgcarousel {
			/* CSS for specific carousel container called #mybgcarousel. */
			width: 100%;
			height: 500px;
		}

		/* ######### Shared CSS for various parts of carousel (in the event of multiple carousels) ######### */

		div.bgcarousel {
			/* shared CSS for main carousel container */
			background: black url(http://spycollege.org/ajaxload.gif) center center no-repeat;
			/* loading gif while caoursel is loading */
		}

		div.bgcarousel img.navbutton {
			/* CSS for the nav buttons */
		}

		div.bgcarousel div.slide {
			/* CSS for each image's DIV container within main container */
			background-color: black;
			background-position: center center;
			/* center image within carousel */
			background-repeat: no-repeat;
			background-size: cover;
			/* CSS3 property to scale image within container? "cover" or "contain" */
			color: black;
		}

		div.bgcarousel div.selectedslide {
			/* CSS for currently selected slide */
		}

		div.bgcarousel div.slide div.desc {
			/* DIV that contains the textual description inside .slide */
			position: absolute;
			color: #002504E;
			left: 40px;
			top: 100px;
			width: 200px;
			padding: 10px;
			font: bold 16px sans-serif, Arial;
			text-shadow: 0 -1px 1px #8a8a8a;
			/* CSS3 text shadow */
			z-index: 5;
		}

		div.bgcarousel div.selectedslide div.desc {
			/* CSS for currently selected slide's desc div */
		}

		div.bgcarousel div.slide div.desc h2 {
			font-size: 150%;
			margin: 0;
		}

		div.bgcarousel div.slide div.desc a {
			color: yellow;
			text-decoration: none;
		}
	</style>

	<script src="http://spycollege.org/jquery.min.js"></script>
	<script src="http://spycollege.org/jquery.velocity.min.js"></script>
	<script type="text/javascript" src="http://spycollege.org/jquery.touchSwipe.min.js"></script>

	<script src="http://spycollege.org/bgcarousel.js" type="text/javascript">

	</script>

	<script type="text/javascript">
		var firstbgcarousel = new bgCarousel({
			wrapperid: 'mybgcarousel', //ID of blank DIV on page to house carousel
			imagearray: [
				['http://spycollege.org/cam.gif', '<h2>CAMPUS</h2>The sun peaks through the trees, a knife that cuts through the chill, crisp air.'], //["image_path", "optional description"]
				['http://spycollege.org/pr.jpg', '<h2 >LABS</h2>The bellweather of the sky, the chime speaks of impending turmoil.'],
				['http://spycollege.org/lib.jpg', '<h2>GAUTAMA BUDDHA</h2>Peace comes from within. Do not seek it without.'],
				['http://spycollege.org/prk.gif', '<h2>PRINCIPAL DESK</h2>Simple and Dynemic Principal'] //<--no trailing comma after very last image element!
			],
			displaymode: {
				type: 'auto',
				pause: 2000,
				cycles: 2,
				stoponclick: false,
				pauseonmouseover: true
			},
			navbuttons: ['http://spycollege.org/left.gif', 'http://spycollege.org/right.gif', 'http://spycollege.org/up.gif', 'http://spycollege.org/down.gif'], // path to nav images
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
		<img src="http://spycollege.org/img/phone.PNG" height="30" width="30" style="float-right:-20px; ">
		<!--h3 style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;"--> <b>0631-2221574<br /><a href="https://www.facebook.com/spycollegegaya/?ref=hl" target="_blank"><img src="http://spycollege.org/img/fb.jpg" height="40" width="120" style="float:right; margin-right:+35px; box-shadow:10px 10px 5px  #999999; " /></a></h2></b>

	</div>
	<div class="title">
		<img src="http://spycollege.org/img/logo.PNG" height="95" width="110" / style="float:left;">
		<h1 style="color:#00254E; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
			<center>SURENDRA PRASAD YADAV COLLEGE
		</h1>
		<p>
			<h3 style="font-family:'Courier New', Courier, monospace;">
				<center>Affiliated Unit of Magadh University Bodhgaya
			</h3>
			</center>

	</div>
	</center>
	<div class="menu">
		<center>
			<div class="h2"><img src="http://spycollege.org/img/g-icon.png" style="float:right; margin-top:8px; margin-right:-30px;" /><img src="http://spycollege.org/img/f-icon.png" style="float:right; margin-top:8px;" /><img src="http://spycollege.org/img/t-icon.png" style="float:right; margin-top:8px;  " />
				<h3>
					<ul>
						<li style="width:auto;">
							<a href="http://spycollege.org/index.php" style="text-decoration:none;color:#FFF;"> HOME</a>
							<ul>



							</ul>
						</li>




						<li style="width:150px;">
							ABOUT US
							<ul>
								<li><a href="http://spycollege.org/pr.php">PRINCIPAL</a></li>


								<li><a href="http://spycollege.org/sec.php">SECRETARY</a></li>
								<li><a href="http://spycollege.org/mis.php">OUR MISSION

									</a></li>
								<li><a href="http://spycollege.org/vis.php">OUR VISION</a></li>
							</ul>
						</li>

						<ul>


							<li style="width:150px;">
								FACILITY
								<ul>
									<li><a href="http://spycollege.org/ncc.php">NCC/NSS</a></li>
									<li><a href="http://spycollege.org/lb.php">LABS</a></li>

									<li><a href="http://spycollege.org/sp.php">SPORTS</a></li>
									<li><a href="http://spycollege.org/cl.php">CLASSES</a></li>
								</ul>

							<li style="width:150px;">
								COURSES
								<ul>
									<li><a href="http://spycollege.org/ug.php">U . G</a></li>
									<li><a href="http://spycollege.org/isc.php">I.SC</a></li>

									<li><a href="http://spycollege.org/ia.php">I.A</a></li>
									<li><a href="http://spycollege.org/icom.php">I.COM</a></li>





								</ul>

							<li style="width:120px;">
								<a href="http://spycollege.org/gal.php" style="text-decoration:none;color:#FFF;">GALLERY</a>
							<li style="width:140px;">
								<a href="http://spycollege.org/sc.php" style="text-decoration:none;color:#FFF;">SCHOLARSHIP</a>

							<li style="width:auto;">
								<a href="http://spycollege.org/notice.php" style="text-decoration:none;color:#FFF;">NOTICE</a>
							<li style="width:140px;">
								<a href="http://spycollege.org/cn_us.php" style="text-decoration:none; color:#FFF;"> CONTACT US</a>



							</li>



							</li>
						</ul>
			</div>
		</center>



	</div>
	<!---------------------------------------------------body part of project--------------------------------------------------->
	<center>
		<div class="body">
			<p>

				<?php

				$servername = "localhost";
				$username = "spycolle_root";
				$password = "jshavantkumar555";

				//	$username = "root";
				//	$password = "";
				//extract($_POST);
				// $username1111 = $_REQUEST["email"];
				// $pass1111 = $_REQUEST["pass"];
				$count = 0;
				$res = "";

				$dbname = "spycolle_spy";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
					echo "";
				} else {
					$sql = "SELECT * FROM  notice order by ud desc";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {

				?>

						<!--img src="http://spycollege.org/images/scl.jpg" height="500" width="1000" /-->
						<div id="mybgcarousel" class="bgcarousel" style="height:500px;"></div>
						<!---gallary images---end---->

						<div class="h12 ">
							<div class="h6">
								<div class="h7" style="box-shadow:10px 10px 10px #000;">
									<font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:10px; color:#FFF;  ">
										<center>NOTICE BOARD</center>
									</font>
								</div>
								<marquee direction="up" height="230" onMouseOver="this.stop();" onMouseOut="this.start();">

									<?php
									while ($row = mysqli_fetch_assoc($result)) {

									?>
										<p><img src="http://spycollege.org/img/new-blink.gif" /> <?php echo $row['notice'];  ?></p>
							<?php

									}
								}

								mysqli_close($conn);
								echo $res;
							}
							?>




								</marquee>
							</div>
							<!--------------------------cource in notice------------------------------------------------->
							<div class="h6" style="float:right;">
								<div class="h7" style="box-shadow:10px 10px 10px #000;">
									<font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:0px; color:#FFF;   ">
										<center>COURSES</center>
									</font>
								</div>
								<font size="3">
									<p><a href="http://spycollege.org/ug.php" style="text-decoration:none; color:black;">UNDER GRADUATE(ALL STREAM)<img src="http://spycollege.org/img/new-blink.gif" /></a></p>



									<p><a href="http://spycollege.org/isc.php" style="text-decoration:none; color:black;">INTERMEDIATE OF SCIENCE
											<img src="http://spycollege.org/img/clickh.gif" /></a></P>
								</font>
								<font size="3">
									<p><a href="http://spycollege.org/icom.php" style="text-decoration:none; color:black;">INTERMEDIATE OF COMMERCE
											<img src="http://spycollege.org/img/clickh.gif" /></a></P>
								</font>
								<font size="3">
									<p><a href="http://spycollege.org/ia.php" style="text-decoration:none; color:black;">INTERMEDIATE OF ARTS
											<img src="http://spycollege.org/img/clickh.gif" /></a></P>
								</font>
								<a href="http://spycollege.org/dept.php" style="text-decoration:none;">
									<div class="dept">
										<font size="+2" style="text-shadow:1px 1px 2px Yellow,0px 0px 12px magenta,0px 0px 10px green;margin-top:0px; color:#FFF;   ">
											<center style="
    line-height: 50px;
">DEPTT. OF EXAMINATION
												<!--img src="http://spycollege.org/img/click.PNG" height="25" width="80"-->
											</center>
										</font>
									</div>
								</a>
								<a href="http://spycollege.org/add-online.php" style="text-decoration:none;">
									<div class="dept" style="background: #fff;">
										<font size="+2" style="text-shadow: 1px 1px 2px red, 0px 0px 12px white, 0px 0px 10px white;
    margin-top: 0px;
    color: #ff0505;">
											<center>Online Addmission
												<img src="http://spycollege.org/img/clickh.gif" /style="position: relative;top: 5px;">
											</center>
										</font>
									</div>
								</a>
							</div>



						</div>

						<h2 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#00254E;"><b>------ Welcome To Surendra Prasad Yadav College ------</b></h2>

						<h4 style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; color:#666; text-align:justify; text-justify:inter-word;">

							Surendra Prasad Yadav College, A.P Colony , Gaya was established in the heart of the city in 1992. It is a permanent affiliated unit of Magadh University Bodh Gaya and approved by the Bihar Government. It is a Govt. aided college. This College is situated on the pious land of enlightenment of Lord Budha surrounded with lucid an lovely landscape of nature. It lies to the left of Dobhi Road leading to the station in A.P colony locality near Asha Singh more. It is situated at a distance of 2 km south-west from Gaya railway junction and 1.5 km north-west from Gaya state bus stand.
							To spread the rays of higher education
							among the people of every section of society in urban as well as rural areas with the objectives to cope with the requirement of value � based education. It aims at imparting the rear qualitative-education rather quantitative.
							It's journey since establishment up till now has been very adventurous and struggling.Fighting against a lot of obstacles today it has cut a bright figure among the leading colleges of Bihar.
							The College has been getting very successful and grand achievement in catering the job-oriented education upto Graduation level in every discipline-Arts, Science, Commerce etc.
							The college is profusely enriched with sophisticated apparatus, electronic gadgets and science labs. It has also a very big library with the capacity of accommodating more than hundred readers at a time. Today it is thought to be efficient for fulfilling the need of every type of learning upto graduation level.
							The college is highly fit for competing the challenges of quality-based education under the incredible guidance of<b style="color:#000;"> Dr.Umashankar </b>who is very dynamic and energetic Principal of this college.
							<p>


								&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Ultimately the over all achievement became possible because of the generous gesture of Dr.surendra prasad yadav(MLA) who donated required land and adequate means.His pious mission was to provide the education up to degree level in honours and pass course both especially to the students of weaker sections.
								By din't of the great effort of the honourable founder secretary Dr. Surendra prasad yadav(MLA,MP,Minister in Bihar goverment)
								, this college has been running sucessfully.This college is managed by governing body which ensure the proper planning and co-ordinated development of new courses, phisical and instructional facilities, staff's functions and responsiblities. For any
								type of complain, Governing Body will be the first jury as prima facie.
								<div class="fn">
									<center>
										<b>
											<div class="fn1">
												<h3>FACILITIES</h3>
												<a href="http://spycollege.org/lib.php" style="text-decoration:none; color:#666;">Library</a><br /><br />
												<a href="http://spycollege.org/sp.php" style="text-decoration:none; color:#666;">Sports</a><br /><br />
												<a href="http://spycollege.org/ncc.php " style="text-decoration:none; color:#666;">Ncc/Nss</a><br /><br />
												<a href="http://spycollege.org/lb.php" style="text-decoration:none; color:#666;">LABS</a>
											</div>
											<div class="fn1">
												<h3> VISIT OUR COLLEGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
												<h4 style="float:left; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> Ap Colony , Gaya(823001) &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<br /> <br />Email:-info@spycollege.org &nbsp;&nbsp;
													<br /> <br />Website:-www.spycollege.org
											</div>
											<div class="fn1">Google Map
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3622.243626330654!2d84.98386714450605!3d24.787109908576948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6a0112c52bc7f99!2sSurendra%20Prasad%20Yadav%20College!5e0!3m2!1sen!2sin!4v1595754686842!5m2!1sen!2sin" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
										</b>


										<!--div class="fn1"> <h2><b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 Facilities</h2></b> 
<h3> Labs<BR /><br>
 SPORTS<br><br>
 NCC/NSS</div></h3-->

										<div class="fn1">
											<!--b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"-->

											<img src="http://spycollege.org/img/Cn.PNG" height="80" width="280" />
											<a href="mailto:info@spycollege.org"> <img src="http://spycollege.org/img/mail_logo.PNG" height="160" /></a>
											<p>
												<img src="http://spycollege.org/img/g-icon.png" /><img src="http://spycollege.org/img/f-icon.png" />
												<img src="http://spycollege.org/img/t-icon.png"></b>
										</div>
								</div>
								<div class="ft"> <b style="color:#999; text-align:center;"><br />
										<center>Spy College @2015-16 All Right Reserved</center>
									</b><b style="float:right; color:#999; margin-top:-30px;"><a href="https://www.facebook.com/jshavant.verma" style="text-decoration:none;color:#FFF;">Developed BY-Jaswant singh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;+918409009200</a></b></div>

	</center>

	<!------------request for call back-----------------container------start------->

	<!--------end of chat box----------------------------------->
	</div>
</body>

</html>