<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>spycollege</title>
    <link rel="stylesheet" type="text/css" href="indexcss.css" />

    <style>
        .note {
            width: 550px;
            text-align: left;
            padding-bottom: 60px;
            font-size: 18px;
        }

        table.add-form {
            padding: 30px;
            font-size: 18px;
            border: 1px solid #ccc;
        }

        table.add-form .header {
            height: 50px;
            vertical-align: top;
            text-align: center;
            color: #00254e;
            font-size: x-large;
            font-weight: 700;
        }

        table.add-form input[type="submit"] {
            margin-top: 20px;
            height: 30px;
            width: 100px;
            background: #00254e;
            border-color: #00254e;
            color: #fff;
        }
        table.add-form select, table.add-form input[type="text"], table.add-form input[type="number"] {
            height: 25px;
            width: 350px;
        }
        table.add-form tr {
            height: 45px;
        }
    </style>
    <!------------------------------slide pics------------thru java script----------------------------------->





    <!------------------endingg of slidepics----------------------------------------------------------------------->
</head>

<body>
    <div class="con">
        <img src="img/phone.PNG" height="30" width="30" style="float-right:-20px; ">
        <!--h3 style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;"--> <b>0631-2221574<br /><img src="img/fb.jpg" height="40" width="120" style="float:right; margin-right:+35px; box-shadow:10px 10px 5px  #999999; " /></h2></b>

    </div>
    <div class="title">
        <img src="img/logo.PNG" height="95" width="110" / style="float:left;">
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
            <div class="h2"><img src="img/g-icon.png" style="float:right; margin-top:8px; margin-right:-30px;" /><img src="img/f-icon.png" style="float:right; margin-top:8px;" /><img src="img/t-icon.png" style="float:right; margin-top:8px;  " />
                <h3>
                    <ul>
                        <li style="width:auto;">
                            <a href="index.php" style="text-decoration:none; color:#FFF;"> HOME</a>
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
                                <li><a href="sec.php">SECERETARY</a></li>

                                <li><a href="mis.php">OUR MISSION</a></li>
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
                                COURSES
                                <ul>
                                    <li><a href="ug.php" style="text-decoration:none;color:#FFF;">U . G</a></li>
                                    <li><a href="isc.php" style="text-decoration:none;color:#FFF;">I.SC</a></li>

                                    <li><a href="ia.php" style="text-decoration:none;color:#FFF;">I.A</a></li>
                                    <li><a href="icom.php" style="text-decoration:none;color:#FFF;">I.COM</a></li>





                                </ul>

                            <li style="width:120px;">
                                <a href="gal.php" style="text-decoration:none;color:#FFF;"> GALLERY</a>
                            <li style="width:140px;">
                                <a href="sc.php" style="text-decoration:none; color:#FFF;">SCHOLARSHIP</a>

                            <li style="width:auto;">
                                <a href="notice.php" style="text-decoration:none;color:#FFF;"> NOTICE</a>
                            <li style="width:140px;">
                                <a href="cn_us.php" style="text-decoration:none; color:#FFF;"> CONTACT US</a>



                            </li>


                            <!--li style="width:80px;">
	  <a href="profile.php"> LOG IN</a>
		 </li>
   <li style="width:80px;">
	  <a href="signup.php">SIGN UP</a-->
                </h3>

                </li>
                </ul>
            </div>
        </center>



    </div>
    <!---------------------------------------------------body part of project--------------------------------------------------->
    <center>
        <div class="note">
            <p><b>NOTE: </b> Please keep in mind the below point while filling addmission form.</p>
            <ul>
                <li>Only one time can be used any addhar number</li>
                <li>If you have already registered before then the older information will be replace with the new information based on the adhar number</li>
                <li>After registration successful cannot be modify any information</li>
            </ul>
        </div>
        <center>

            <?php

            $servername = "localhost";
            $username = "spycolle_root";
            $password = "jshavantkumar555";

            //	$username = "root";
            //	$password = "";
            //extract($_POST);
            // $username1111=$_REQUEST["email"];
            // $pass1111=$_REQUEST["pass"];
            $count = 0;
            $res = "";

            $dbname = "spycolle_spy";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            ?>
            <form action="submit-new-addmission.php" method="post" enctype="multipart/form-data">
                <table class="add-form">
                    <tr class="header">
                        <td colspan="2" class="form-header">Online Addmission Form</td>
                    </tr>
                    <tr>
                        <td class="first-col">Class</td>
                        <td>
                            <select name="className" required>
                                <option value="" disabled selected>Choose a class</option>
                                <option value="B.A Part-1">B.A Part-1</option>
                                <option value="B.A Part-2">B.A Part-2</option>
                                <option value="B.A Part-3">B.A Part-3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="first-col">Student Name</td>
                        <td>
                            <input type="text" name="studentName" required />
                        </td>
                    </tr>
                    <tr>
                        <td class="first-col">Mobile Number</td>
                        <td>
                            <input type="number" required name="mobileNumber" maxlength="10" minlength="10" />
                        </td>
                    </tr>
                    <tr>
                        <td class="first-col">Adhar Number</td>
                        <td>
                            <input type="number" required name="adharNumber" maxlength="12" minlength="12" />
                        </td>
                    </tr>

                    <tr>
                        <td class="first-col">Admin Card</td>
                        <td>
                            <input accept=".png,.jpeg,.jpg" type="file" required name="admitCard" />
                        </td>
                    </tr>

                    <tr>
                        <td class="first-col">Marks Sheet</td>
                        <td>
                            <input accept=".png,.jpeg,.jpg" type="file" required name="marksSheet" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center> <input type="submit" value="Submit" /> </center>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <div class="fn">
            <b>
                <div class="fn1">
                    <h3>FACILITIES</h3>
                    <a href="lib.php" style="text-decoration:none; color:#666;">Library</a>
                    <p>
                        <a href="sp.php" style="text-decoration:none; color:#666;">Sports<p></a>
                        <a href="ncc.php " style="text-decoration:none; color:#666;">Ncc/Nss<p></p></a>
                        <a href="lb.php" style="text-decoration:none; color:#666;">LABS</a>
                </div>
                <div class="fn1">
                    <h3> VISIT OUR COLLEGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                    <h4 style="float:left; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> Ap Colony , Gaya , (Bihar) &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<br /> <br />Email:-info@spycollege.org &nbsp;&nbsp;
                        <br /> <br />Website:-www.spycollege.org
                </div>
                <div class="fn1">Google Map<a href="https://www.google.co.in/maps/place/Surendra+Prasad+Yadav+College/@24.7859554,84.9803732,1446m/data=!3m1!1e3!4m5!1m2!2m1!1sspy+college+gaya!3m1!1s0x0000000000000000:0xb6a0112c52bc7f99!6m1!1e1?hl=en" target="_blank">
                        <img src="img/map.PNG" height="200" width="250" /></a></div>
            </b>


            <!--div class="fn1"> <h2><b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
 Facilities</h2></b> 
<h3> Labs<BR /><br>
 SPORTS<br><br>
 NCC/NSS</div></h3-->

            <div class="fn1">
                <!--b style="color:#00254E;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"-->

                <a href="mailto:info@spycollege.org"><img src="img/Cn.PNG" height="80" width="280" /><img src="img/mail_logo.PNG" height="160" /></a>
                <p>
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
        <div class="ft"> <b style="color:#999; text-align:center; ">
                <center><br />Spy College @2015-16 All Right Reserved</center>
            </b><b style="float:right; color:#999; margin-top:-30px;">Developed BY-Jaswant singh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
                &nbsp;&nbsp;&nbsp;+918409009200</b></div>


    </center>

    </div>
</body>

</html>