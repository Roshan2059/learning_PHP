<?php
$fruits = array("Bananas", "Apples", "Mango", "Orange", "Papaya", "Guava", "Cherry", "Watermelon");
for ($i=0; $i < count($fruits); $i++) { 
    echo $fruits[$i];
    echo "<br>";
}

foreach ($fruits as $h) {
    echo "$h <br>";
}
?>