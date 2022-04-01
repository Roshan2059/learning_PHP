<?php
include 'connection.php';
if (isset($_POST['sub'])) {
    if (empty($_POST['name']) || empty($_POST['uname']) || empty($_POST['pass']) || !isset($_POST['sub'])) {
        echo "<h2>Fields cannot be empty</h2>";
    } else {
        $name = $_POST['name'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $insert_query = "insert into test1 values('$name','$uname','$pass')";
        $insert_exe = mysqli_query($con, $insert_query);

        if ($insert_exe) {
            echo ("<h2>The record is inserted</h2>");
        } else {
            echo ("Record not inserted");
        }
    }
}
?> 
