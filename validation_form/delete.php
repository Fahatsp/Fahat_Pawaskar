<?php
include 'connection.php';
if (isset($_GET['deleteid'])) {
    $ID=$_GET['deleteid'];

    $sql="delete from `registration` where ID=$ID";
    $result=mysqli_query($con,$sql);
    if ($result) {
        //echo "Deleted successfull";
        header('location:display.php');
    

    }else{
        echo "Connection failed".mysqli_connect_error();
    }
}
?>
    <!--?>
        <meta http-equid = "refresh" content="0,url= http://localhost/validation_form/display.php" />-->
        
