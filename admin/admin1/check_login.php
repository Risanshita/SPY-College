 <?php 
 ob_start(); 
 session_start();
 
	$servername = "localhost";
	$username = "spycolle_root";
	$password = "jshavantkumar555";
   
	//$username = "root";
//	$password = "";
    //extract($_POST);
//    $username1111=$_REQUEST["email"];
  //  $pass1111=$_REQUEST["pass"];
  $username1111=$_POST["email"];
  $pass1111=$_POST["pass"];
echo $username1111;
	$res='';
  
	$dbname = "spycolle_spy";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);  

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error()); 
	}

	$sql ="SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) { 
	//echo    $row["USERNAME_ID"] . " " .$row["PASSWORD_ID"];
		while($row = mysqli_fetch_assoc($result)) { 

          if( strcmp($row["USERNAME_ID"],$username1111)==0 ){

              if(strcmp($row["PASSWORD_ID"],$pass1111)==0){                
	              $_SESSION["RISHIKUMAR"]="Rishi";
                      $res='rishi';             
                        header("location:http://spycollege.org/admin/admin1/admin/index.html");
              }
          } 
       }      
    } 
   // $res=$username1111." ".$pass1111;
	mysqli_close($conn);
//	if( strcmp($row["USERNAME_ID"],'spycollege@mail.com')==0 ){

  //            if(strcmp($row["PASSWORD_ID"],'Welcome2SPY')==0){                
	   //           $_SESSION["RISHIKUMAR"]="Rishi";
             //         $res='rishi';             
                       
             // }
         // } 
         if($res!='rishi')
    header("location:http://spycollege.org/admin/admin1/index.html");
	echo $res;
	
?> 