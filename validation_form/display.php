<?php
include 'connection.php';

$sortOrder = 'asc';
if (isset($_GET['dir']) && $_GET['dir'] === 'desc') {
    $sortOrder = 'desc';
}

$orderByColumn = isset($_GET['sortBy']) && $_GET['sortBy'] === 'lname' ? 'lname' : 'fname';
$orderBy = "ORDER BY $orderByColumn $sortOrder";

$search = isset($_POST['search']) ? $_POST['search'] : '';
$searchCondition = '';
if ($search) {
    $searchCondition = "WHERE fname LIKE '%$search%' OR lname LIKE '%$search%'";
}

$sql = "SELECT ID, fname, lname, femail, fphone, fzipcode, fgender, dob FROM registration $searchCondition $orderBy";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
$numberPages = 5;
$totalPages = ceil($num / $numberPages);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$startingLimit = ($page - 1) * $numberPages;

$sql = "SELECT * FROM `registration` $searchCondition $orderBy LIMIT $startingLimit, $numberPages";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>CRUD Operation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-end mx-5 my-2">
        <button class="btn btn-primary"><a href="index.html" class="text-light">Add User</a></button>
    </div>
    <div>
    <form class="form-inline my-2 my-lg-0" method="post" action="display.php">
            <input class="form-control form-control-sm mr-sm-2" type="search" id="search" name="search" style="width: 250px;">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col"><a href='display.php?dir=<?php echo ($sortOrder === 'asc' ? 'desc' : 'asc'); ?>&sortBy=fname'>First Name</a></th>
                <th scope="col"><a href='display.php?dir=<?php echo ($sortOrder === 'asc' ? 'desc' : 'asc'); ?>&sortBy=lname'>Last Name</a></th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Zipcode</th>
                <th scope="col">Gender</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            if ($result) {
                $sno = ($page - 1) * $numberPages + 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $ID = $row['ID'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $femail = $row['femail'];
                    $fphone = $row['fphone'];
                    $fzipcode = $row['fzipcode'];
                    $fgender = $row['fgender'];
                    $dob = $row['dob'];
                    echo '<tr>
                            <th scope="row">' . $sno . '</th>
                            <td>' . $fname . '</td>
                            <td>' . $lname . '</td>
                            <td>' . $femail . '</td>
                            <td>' . $fphone . '</td>
                            <td>' . $fzipcode . '</td>
                            <td>' . $fgender . '</td>
                            <td>' . $dob . '</td>
                            <td>
                                <button class="btn btn-primary">
                                    <a href="update.php?updateid=' . $ID . '" class="text-light">EDIT</a>
                                </button>
                                <a href="delete.php?deleteid=' . $ID . '" class="btn btn-danger" data-fname="' 
                                . $fname . '" data-lname="' . $lname . '" onclick="return checkdelete(this);">DELETE</a>
                            </td>
                        </tr>';
                    $sno++;
                }
            } else {
                echo '<tr><td colspan="9">No records found.</td></tr>';
            }
            ?>

        </tbody>
    </table>
    
    <!-- Pagination Buttons -->
    <div class="text-center">
    <?php
        for ($btn = 1; $btn <= $totalPages; $btn++) {
            echo '<button class="btn btn-dark mx-1 my-3"><a href="display.php?page=' . $btn . '" 
            class="text-light">' . $btn . '</a></button>';
        }
        
        ?>
    </div>
</div>

<script>
    function checkdelete(button) {
        var fname = button.getAttribute('data-fname');
        var lname = button.getAttribute('data-lname');
        return confirm('ARE YOU SURE YOU WANT TO DELETE THE RECORD OF ' + fname + ' ' + lname + '?');
    }
</script>
</body>
</html>
