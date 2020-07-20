 <?php 
 
	$servername = "localhost";
	$username = "spycolle_root";
	$password = "jshavantkumar555";
   
//	$username = "root";
//	$password = "";
    //extract($_POST);
    $username1111=$_REQUEST["email"];
    $pass1111=$_REQUEST["pass"];

	$res="";
  
	$dbname = "spycolle_spy";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);  
 
	if (!$conn) {
		echo "";
	}
	else{
	$sql ="SELECT * FROM notice order by ud desc";
	$result = mysqli_query($conn, $sql);

    $sql ="SELECT * FROM imagenotice order by ud desc";
	$resultimage = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0 || mysqli_num_rows($resultimage) > 0) {
    
		while($row = mysqli_fetch_assoc($result)) { 
          
          $res = $res . "<option ";
          $res = $res . " value='" . $row['ud'] . "'>". $row['ud'];
          $res = $res . "</option>";
        
       }  
       
		while($row = mysqli_fetch_assoc($resultimage)) { 
          
          $res = $res . "<option ";
          $res = $res . " value='" . $row['ud'] . "'>". $row['ud'];
          $res = $res . "</option>";
        
       }  
        
   } 
	mysqli_close($conn);   
	echo $res;
}
    ?> 