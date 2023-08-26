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

$fname=mysqli_real_escape_string($con, $_POST['fname']);
$lname=mysqli_real_escape_string($con, $_POST['lname']);
$femail=mysqli_real_escape_string($con, $_POST['femail']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$fpass=mysqli_real_escape_string($con, $_POST['fpass']);
$fphone=mysqli_real_escape_string($con, $_POST['fphone']);
$fzipcode=mysqli_real_escape_string($con, $_POST['fzipcode']);
$fgender=mysqli_real_escape_string($con, $_POST['fgender']);
$dob=mysqli_real_escape_string($con, $_POST['dob']);

$query = "INSERT INTO registration (fname, lname, femail, address, fpass, fphone, fzipcode, fgender, dob) VALUES('$fname','$lname','$femail','$address',
'$fpass','$fphone','$fzipcode','$fgender','$dob')";
$data= mysqli_query($con,$query);
if ($data) {
    //echo " data insert Successfully";
    header('location:display.php');
}
else{
    echo "Data is not send";
}
?>