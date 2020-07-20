 <?php 
 
	$servername = "localhost";
        $username = "spycolle_root";
        $password = "jshavantkumar555";   
	
	//$username = "root";
//	$password = "";
    //extract($_POST);
    $username1111=$_REQUEST["email"];
    $pass1111=$_REQUEST["pass"];
$count=0;
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
	$result_image = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result_image) > 0) {
  
    $res = "<table style='width:100%;'><tr><th>Serial</th><th>Upload time</th><th>Notice</th></tr>";
    
		while($row = mysqli_fetch_assoc($result)) { 
          $count++;
          $res = $res . "<tr>";
          $res = $res . "<th>".$count."</th>";
          $res = $res . "<td>".$row['ud']."</td>";
          $res = $res . "<td>".$row['notice']."</td>";
          $res = $res . "</tr>";
        
       }  
       
		while($row = mysqli_fetch_assoc($result_image)) { 
          $count++;
          $res = $res . "<tr>";
          $res = $res . "<th>".$count."</th>";
          $res = $res . "<td>".$row['ud']."</td>";
          $res = $res . "<td>".$row['notice']."<br /><a target='_BLANK' href='" . $row['imageurl'] ."'> <img src='". $row['imageurl'] ."' style='height:300px' /></a></td>";
          $res = $res . "</tr>";
        
       }  
       $res = $res . "</table>";
   }
   
	mysqli_close($conn);   
	echo $res;
}
    ?> 