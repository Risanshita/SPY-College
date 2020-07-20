 <?php 
 
	$servername = "localhost";
	$username = "spycolle_root";
	$password = "jshavantkumar555";
   
	//$username = "root";
//	$password = "";
    //extract($_POST);
    $utime=$_REQUEST["utime"];
    
	$res="";
  
	$dbname = "spycolle_spy";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);  
 
	if (!$conn) {
		echo "";
	}
	else{
	$sql ="SELECT notice FROM notice where ud='$utime'";
	$result = mysqli_query($conn, $sql);

 $sql ="SELECT notice FROM imagenotice where ud='$utime'";  
	$resultimage = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {  
         		$res = $row["notice"]; 
       }  
        
   } 
   if (mysqli_num_rows($resultimage) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) {  
         		$res = $row["notice"]; 
       }  
        
   } 
	mysqli_close($conn);   
	echo $res;
}
    ?> 