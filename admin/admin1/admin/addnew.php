 <?php 
 
	$servername = "localhost";
	$username = "spycolle_root";
	$password = "jshavantkumar555";
   
	///$username = "root";
	//$password = "";
    //extract($_POST);
    $NOTICE=$_REQUEST["NOTICE"];    

	$res="";
  
	$dbname = "spycolle_spy";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);  

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error()); 
	}

	$sql ="INSERT INTO  notice (notice) VALUES('$NOTICE')";
	 
  if (mysqli_query($conn, $sql)) {
      $res="true";
  } else {
      $res="fail";
  } 
	mysqli_close($conn);   
	echo $res;
    ?> 