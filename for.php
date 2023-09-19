<?php 


for ($x=0; $x <= 10 ; $x++) { 
    if ($x > 0) {
        echo "The number is : ", $x, "<br>";
    }
}

$interest = 5/100;
$deposit = 1000;

for ($years = 1; $years <= 5 ; $years ++) { 
    $deposit += ($deposit * $interest);
    echo "The total after ", $years, " year is ", $deposit, "<br>"; 
}

?>