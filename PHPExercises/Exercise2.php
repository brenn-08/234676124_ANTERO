<?php
function checkNumber($num) {

    if ($num > 0) {
        $sign = "Positive";
    } elseif ($num < 0) {
        $sign = "Negative";
    } else {
        $sign = "Zero";
    }

    if ($num % 2 == 0) {
        $parity = "Even";
    } else {
        $parity = "Odd";
    }

    echo "The number $num is $sign and $parity.\n";
}

checkNumber(20); 
checkNumber(-8);  
checkNumber(0);   
?>