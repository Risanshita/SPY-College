 <?php 
 header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


	 $servername = "localhost";
	$username = "spycolle_imhere";
    $password = "8F!k(fdemIFI";

    // $username = "root";
	// $password = "";
    

    $dbname = "spycolle_imhere";
    
	$connection = mysqli_connect($servername, $username,$password, $dbname); 
	
	$data = json_decode(file_get_contents("php://input"));
	
///    $data=$_REQUEST["data"];
//	$res="";
 //   if(!$data)
 //   {
  //       $data=$_POST["data"];
//}

	if (!$connection && !empty($data->data)) {
		die("Connection failed: " . mysqli_connect_error()); 
	}
    $vv= json_encode($data->data);
    
    
  //  $my_file = 'file.txt';
   // $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    
  //  fwrite($handle, $vv);
    

    $vv= str_replace("'","",$vv);
	$sql ="INSERT INTO  savedata (data) VALUES('$vv')";
	 
	if (mysqli_query($connection, $sql)) {
	        http_response_code(201);
 
        // tell the user
        echo json_encode($sql);
	} else {
		$res="fail";
	} 
	mysqli_close($connection);   
	echo $res;
?> 