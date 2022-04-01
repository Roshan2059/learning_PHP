<?php
function per($marksArr){
    $result = 0;
    foreach($marksArr as $value){
        $result += $value;
    }
    return $result / count($marksArr);
}

function total($marksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

$allTotal = 600;

$roshanMarks = [78, 87, 45, 90, 95];
$roshanPer = per($roshanMarks);
$roshanTotal = total($roshanMarks);
echo "Roshan has scored $roshanPer% <br>";
echo "Roshan has scored $roshanTotal marks out of $allTotal <br> <br>";

$harryMarks = [23, 45, 67, 90, 30];
$harryPer = per($harryMarks);
$harryTotal = total($harryMarks);
echo "Harry has scored $harryPer% <br>";
echo "Harry has scored $harryTotal marks out of $allTotal<br>";
?>