<?php
$postdata = $_POST;
$msg = '';
if (isset($postdata['key'])) {
    $key                =   $postdata['key'];
    $salt                =   $postdata['salt'];
    $txnid                 =     $postdata['txnid'];
    $amount              =     $postdata['amount'];
    $className          =   $postdata['class'];
    $adharNumber        =   $postdata['adharNumber'];
    $productInfo          =     $postdata['productinfo'];
    $firstname            =     $postdata['firstname'];
    $email                =    $postdata['email'];
    $udf5                =   $postdata['udf5'];
    $mihpayid            =    $postdata['mihpayid'];
    $status                =     $postdata['status'];
    $resphash                =     $postdata['hash'];
    //Calculate response hash to verify	
    $keyString               =      $key . '|' . $txnid . '|' . $amount . '|' . $productInfo . '|' . $firstname . '|' . $email . '|||||' . $udf5 . '|||||';
    $keyArray               =     explode("|", $keyString);
    $reverseKeyArray     =     array_reverse($keyArray);
    $reverseKeyString    =    implode("|", $reverseKeyArray);
    $CalcHashString     =     strtolower(hash('sha512', $salt . '|' . $status . '|' . $reverseKeyString));


    if ($status == 'success'  && $resphash == $CalcHashString) {
        $servername = "localhost";
        $username = "spycolle_root";
        $password = "jshavantkumar555";

        $dbname = "spycolle_spy";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        //Do success order processing here...
        if (($className == "I.Sc." && $amount != 4000) || ($className == "I.A." && $amount != 2600) || ($className == "I.A." && $amount != 2600)) {
            $msg = "Payment failed: Payment amount has been changed manually...";
        } else {
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                $sql = "UPDATE TABLE  registration SET paymentStatus = 'Completed', paymentAmount = $amount where adharNumber = '$adharNumber'";

                if (mysqli_query($conn, $sql)) {
                    $msg = "Registration Successful...";
                }
            }
        }
    } else {
        //tampered or failed
        $msg = "Payment failed";
    }
} else exit(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PayUmoney BOLT PHP7 Kit</title>
</head>
<style type="text/css">
    .main {
        margin-left: 30px;
        font-family: Verdana, Geneva, sans-serif, serif;
    }

    .text {
        float: left;
        width: 180px;
    }

    .dv {
        margin-bottom: 5px;
    }
</style>

<body>
    <div class="main">
        <div>
            <img src="images/payumoney.png" />
        </div>
        <div>
            <h3>PHP7 BOLT Kit Response</h3>
        </div>

        <div class="dv">
            <span class="text"><label>Merchant Key:</label></span>
            <span><?php echo $key; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Merchant Salt:</label></span>
            <span><?php echo $salt; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Transaction/Order ID:</label></span>
            <span><?php echo $txnid; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Amount:</label></span>
            <span><?php echo $amount; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Class:</label></span>
            <span><?php echo $className; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Product Info:</label></span>
            <span><?php echo $productInfo; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>First Name:</label></span>
            <span><?php echo $firstname; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Email ID:</label></span>
            <span><?php echo $email; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Mihpayid:</label></span>
            <span><?php echo $mihpayid; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Hash:</label></span>
            <span><?php echo $resphash; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Transaction Status:</label></span>
            <span><?php echo $status; ?></span>
        </div>

        <div class="dv">
            <span class="text"><label>Message:</label></span>
            <span><?php echo $msg; ?></span>
        </div>
    </div>
</body>

</html>