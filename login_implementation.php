<?php
include 'connection.php';

if(isset($_POST['sub'])){
    $c_uname = $_POST['uname'];
    $c_pass = $_POST['pass'];

    $sql = "SELECT * FROM `test1` WHERE `username` = '$c_uname' AND `password` = '$c_pass'";
    $result = mysqli_query($con,$sql);

    if($result == true){
        header('location:welcome.php');
    }
    else{
        echo "<script>alert('Username or Password is incorrect')</script>";
    }
}
?>