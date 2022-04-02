<?php
include 'connection.php';

$sql = "select * from cwh1";
$sql_exe = mysqli_query($con, $sql);

// $row = mysqli_fetch_assoc($sql_exe);
// echo var_dump($row);
while($row = mysqli_fetch_assoc($sql_exe)){
    echo "<h2>"."Hello! " . $row['Name'] . " Your username is " . $row['Username'] . " and Your email is " . $row['Email']."<br>"."</h2>";
}
?>