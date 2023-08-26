<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname = "form";

$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
    //echo "connected ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>