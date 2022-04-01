<?php
echo "Multiplication table of 7 is: <br>";
for($i = 1; $i <= 10000; $i += 1){
    $const = 7;
    $mul = $i * 7;
    echo "$const * $i = $mul<br>";
}
?>