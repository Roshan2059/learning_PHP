<?php
include 'connection.php';

if(isset($_POST['sub'])){
    $c_uname = $_POST['uname'];
    $c_pass = $_POST['pass'];

    $sql = "SELECT * FROM test1 WHERE Username = '$c_uname' AND Password = '$c_pass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row['Username'] == $c_uname && $row['Password'] == $c_pass){
        session_start();
        $_SESSION['Username'] = $c_uname;
        header('location:welcome.php');
    }else{
        echo "Invalid username or password";    
    }

}
?>