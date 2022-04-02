<?php
include 'connection.php';

$sql = "delete from cwh1 where Username = 'jiban'";
$sql_exe = mysqli_query($con, $sql);

if($sql_exe){
    echo "record deleted sucessfully.";
} else{
    echo "Error while deleting data.";
}
?>