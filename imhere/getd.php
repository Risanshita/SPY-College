 <?php  

    $servername = "localhost";
	$username = "spycolle_imhere";
    $password = "8F!k(fdemIFI";

    $dbname = "spycolle_imhere";
    
	$connection = mysqli_connect($servername, $username,$password, $dbname);
	 
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error()); 
	}

	$sql ="SELECT ID,NAME, DATE FROM savedata order BY ID;";
	
	$result = mysqli_query($connection, $sql);
    $res = '';
	while($row = mysqli_fetch_assoc($result)) { 
		echo "<br />".$row["ID"].",   ".$row["DATE"].",   ".$row["NAME"];	  
	 }  
	 echo $res;
	mysqli_close($connection);   
?> 