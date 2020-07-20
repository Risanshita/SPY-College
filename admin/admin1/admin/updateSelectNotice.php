 <?php 
 
	$servername = "localhost";
	$username = "spycolle_root";
	$password = "jshavantkumar555";
   
	//$username = "root";
//	$password = "";
    //extract($_POST);
    $utime=$_REQUEST["utime"];
    $notice=$_REQUEST["notice"]; 
	$res=""; 
	$dbname = "spycolle_spy"; 
	$conn = mysqli_connect($servername, $username, $password, $dbname);   
	if (!$conn) {
		echo "";
	}
	else{
	$sql ="UPDATE notice SET notice='$notice' where ud='$utime'"; 
	if (mysqli_query($conn, $sql)) { 
         		$res = "true";  
   } 
	mysqli_close($conn);   
	echo $res;
}
    ?> 