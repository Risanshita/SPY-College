<?php /*
$servername = "localhost";
$username = "spycolle_root";
$password = "jshavantkumar555";

$dbname = "spycolle_spy";

$adharNumber = $_GET['adharNumber'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Do success order processing here...
$msg = "";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $sql = "UPDATE TABLE  registration SET paymentStatus = 'Completed' where adharNumber = '$adharNumber'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Registration Successful...";
    }
}
echo $msg; */
?>
<html>  
    <body>
        <h2>Payment successful...</h2>
    </body>
</html>