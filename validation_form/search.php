<?php
include 'connection.php';

if (isset($_GET['input'])) {
    $searchQuery = $_GET['input'];
    $sql = "SELECT ID, fname, lname, femail, fphone, fzipcode, fgender, dob FROM registration WHERE fname LIKE '%$searchQuery%' OR lname LIKE '%$searchQuery%'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $sno = ($page - 1) * $numberPages + 1; // You may need to adjust this calculation
        while ($row = mysqli_fetch_assoc($result)) {
            // Display search result rows
            echo '<tr>
                    <th scope="row">' . $sno . '</th>
                    <td>' . $row['fname'] . '</td>
                    <td>' . $row['lname'] . '</td>
                    <td>' . $row['femail'] . '</td>
                    <td>' . $row['fphone'] . '</td>
                    <td>' . $row['fzipcode'] . '</td>
                    <td>' . $row['fgender'] . '</td>
                    <td>' . $row['dob'] . '</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href="update.php?updateid=' . $row['ID'] . '" class="text-light">EDIT</a>
                        </button>
                        <a href="delete.php?deleteid=' . $row['ID'] . '" class="btn btn-danger" data-fname="' 
                        . $row['fname'] . '" data-lname="' . $row['lname'] . '" onclick="return checkdelete(this);">DELETE</a>
                    </td>
                </tr>';
            $sno++;
        }
    }
}
?>

