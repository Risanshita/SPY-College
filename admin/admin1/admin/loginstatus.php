<?php
session_start();
    $res=$_SESSION["RISHIKUMAR"];
    if($res=="Rishi"){
          echo "true";	
    }
    else{
          echo "false";
     }
?>