<?php
session_start();

if(isset($_SESSION['username'])){
    echo "welcome ".$_SESSION['username']."<br>";
    echo "Your favourite Youtube channel is ".$_SESSION['favChannel'];
}else{
    echo "Please login to  proceed.";
}

?>