<?php
// error_reporting(0);
include 'connection.php';

$ID = "";
$fname = "";
$lname = "";
$femail = "";
$fphone = "";
$fzipcode = "";
$fgender = "";
$dob = "";

if (isset($_GET['updateid'])) {
    $ID = $_GET['updateid'];
    $sql = "Select * from `registration` where ID=$ID";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $femail = $row['femail'];
    $fphone = $row['fphone'];
    $fzipcode = $row['fzipcode'];
    $fgender = $row['fgender'];
    $dob = $row['dob'];
}

if (isset($_POST['submit'])) {
    $ID = $_POST['updateid'];
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $femail = mysqli_real_escape_string($con, $_POST['femail']);
    $fphone = mysqli_real_escape_string($con, $_POST['fphone']);
    $fzipcode = mysqli_real_escape_string($con, $_POST['fzipcode']);
    $fgender = mysqli_real_escape_string($con, $_POST['fgender']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);

    $sql = "update `registration` set fname='$fname',lname='$lname',
    femail='$femail',fphone='$fphone',fzipcode='$fzipcode',fgender='$fgender',dob='$dob'
    where ID=$ID";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Update Successfully";
        header('location:display.php');
    } else {
        echo "Data is not sent";
    }
}
?>

<style>
    body {
        padding: 10px 50px;
        text-align: center;
        background-size: cover;
        color: rgb(4, 7, 7);
    }

    .formdesign {
        font-size: 25px;
    }

    .formdesign input {
        width: 40%;
        padding: 12px 20px;
        border: 2px solid black;
        margin: 14px;
        border-radius: 2px;
        font-size: 15px;
    }

    .but {
        border-radius: 9px;
        width: 100px;
        height: 50px;
        font-size: 25px;
        color: black;
        margin: 22px 20px;
        cursor: pointer;
    }
    .form-control{
        padding: 10px 50px;
        text-align: center;
        background-size: cover;
        color: rgb(4, 7, 7);
        
    }
</style>


<form action="update.php" method="post">
    <h2>UPDATE DETAILS</h2>
    <input type="hidden" name="updateid" value="<?php echo $ID; ?>">
    <div class="formdesign" id="name">
        First Name: <input type="text" id="name" name="fname" value="<?php echo $fname; ?>">
    </div>

    <div class="formdesign" id="lname">
        Last Name: <input type="text" name="lname" required value="<?php echo $lname; ?>">
    </div>

    <div class="formdesign" id="email">
        Email: <input type="email" name="femail" required value="<?php echo $femail; ?>">
    </div>

    <div class="formdesign" id="phone">
        Phone no: <input type="phone" name="fphone" required value="<?php echo $fphone; ?>">
    </div>

    <div class="formdesign" id="zipcode">
        Zip Code: <input type="zipcode" name="fzipcode" required value="<?php echo $fzipcode; ?>">
    </div>

    <div>
        <select id="gender" class="formdesign" name="fgender" required>
            <option value="">Select Gender</option>
            <option value="male" <?php if ($fgender === 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if ($fgender === 'female') echo 'selected'; ?>>Female</option>
            <option value="other" <?php if ($fgender === 'other') echo 'selected'; ?>>Other</option>
        </select>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="dob">
                <label for="dob"> <b>DATE OF BIRTH:</b></label>
                <input class="formdesign" onchange="fnCalculateAge();" max="2023-05-05" 
                type="date" name="dob" id="demo" required value="<?php echo $dob; ?>"> 
            </div>
        </div>
    </div>

    <input class="but" type="submit" name="submit" value="update">
</form>
