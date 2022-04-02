<?php
include 'connection.php';

$sql = "update cwh1 set Name = 'Gokarna Panta', Email = 'gokarna@gmail.com', Username = 'gokarna', Password = 'gokarna' where Name = 'Roshan Panta'";
$sql_exe = mysqli_query($con, $sql);
if($sql_exe){
    echo "Operation Sucessful";
}else{
    echo "Operation Unsucessful";
}
?>