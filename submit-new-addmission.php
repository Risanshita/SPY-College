<?php

function uploadFile($name, $prifix)
{ 

    $target_dir = "admin/admin1/admin/doc-uploads/";
    $message = "";
    $temp = explode(".",  basename($_FILES[$name]["name"]));
    $fileName= $prifix .'_'. $name . '.' . end($temp);
    $target_file = $target_dir . $fileName;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    $uploadOk = true;
    // Check if file already exists
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    // Check file size
    if ($_FILES[$name]["size"] > 5000000) {
        $message = "Maximum file size should be 5MB";
        $uploadOk = false;
    }


    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG") {
        $message = "Sorry, only JPG, JPEG & PNG  files are allowed.";
        $uploadOk = false;
    }


    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = true;
        } else {
            $message = "File is not an image.";
            $uploadOk = false;
        }
    }


    // Check if $uploadOk is set to false by an error
    if ($uploadOk == false) {
        $message = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
        } else {
            $uploadOk = false;
        }
    }
    return array($uploadOk, $fileName, $message);
}

// Class 
$className = $NOTICE = $_REQUEST["className"];
// Student name
$studentName = $NOTICE = $_REQUEST["studentName"];
// mobileNumber 
$mobileNumber = $NOTICE = $_REQUEST["mobileNumber"];
// adharNumber 
$adharNumber = $NOTICE = $_REQUEST["adharNumber"];
// fatherName 
$fatherName = $NOTICE = $_REQUEST["fatherName"];
// regSession 
$regSession = $NOTICE = $_REQUEST["session"];
// fullMarks 
$fullMarks = $NOTICE = $_REQUEST["fullMarks"];
// honorsPaper 
$honorsPaper = '';// $NOTICE = $_REQUEST["honorsPaper"];

$admitCard = uploadFile("admitCard", $adharNumber);
$marksSheet = uploadFile("marksSheet", $adharNumber);
$success = false;
$redirect = 'add-online.php';
if ($admitCard[0] == true && $marksSheet[0] == true) {
    $servername = "localhost";
    $username = "spycolle_root";
    $password = "jshavantkumar555";

    $dbname = "spycolle_spy";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        try { 
            $sql = "DELETE FROM registration WHERE adharNumber='$adharNumber'";
            mysqli_query($conn, $sql);
        } catch(Exception $ex){

        }
        $sql = "INSERT INTO  registration (class,studentName,mobileNumber,adharNumber,admitCard,marksSheet,regSession,fullMarks,fatherName,honorsPaper) VALUES('$className','$studentName','$mobileNumber','$adharNumber','$admitCard[1]','$marksSheet[1]','$regSession','$fullMarks','$fatherName','$honorsPaper')";

        if (mysqli_query($conn, $sql)) {
            $success = true;
            // $redirect = 'payment/index.php?class=' . $className . '&name=' . $studentName . '&mobileNumber=' . $mobileNumber .'&adharNumber=' .$adharNumber;
            if($className == 'I.A.') {
                $redirect = 'https://www.payumoney.com/paybypayumoney/#/3A6A30D81A38390632D450FDAAE3AD5E';
            } else if($className == 'I.Sc.') {
                $redirect = 'https://www.payumoney.com/paybypayumoney/#/FF22DF5950FB087E48903895885637DE';
            } else if($className == 'I.Com.') { 
                $redirect = 'https://www.payumoney.com/paybypayumoney/#/3A6A30D81A38390632D450FDAAE3AD5E';
            } 
            // else if($className == 'Graduation Part-1') { 
            //     $redirect = 'https://pmny.in/UIpSAzu0gkM0';
            // } else if($className == 'Graduation Part-2') { 
            //     $redirect = 'https://pmny.in/mI6OxiQ63De7';
            // } else if($className == 'Graduation Part-3') { 
            //     $redirect = 'https://pmny.in/mI6OxiQ63De7';
            // }
        }
        mysqli_close($conn);
        echo $res;
    }
}
$object = (object) [
    'success' => $success,
    'admitCard ' => $admitCard,
    'marksSheet ' => $marksSheet,
];
echo json_encode($object);
header('Location: '.$redirect);