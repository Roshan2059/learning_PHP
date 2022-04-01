<?php
$mda = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
);

// for ($i=0; $i < count($mda); $i++) { 
//     echo var_dump($mda[$i]);
//     echo "<br>";
// }

for ($i=0; $i < count($mda); $i++) { 
    for ($j=0; $j < count($mda[$i]) ; $j++) { 
        echo $mda[$i][$j];  
        echo " "; 
    }
    echo "<br>";
;}


?>