<?php
function fizzBuzz() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo $i . "\n";
        }
    }
}

function printEvenFibonacci($count) {
    $firstTerm = 0;
    $secondTerm = 1;
    $fibonacciNumbers = [];

    for ($i = 0; $i < $count; $i++) {
        $nextTerm = $firstTerm + $secondTerm;
        $fibonacciNumbers[] = $nextTerm;

        $firstTerm = $secondTerm;
        $secondTerm = $nextTerm;
    }

    echo "Even Fibonacci numbers:\n";
    foreach ($fibonacciNumbers as $number) {
        if ($number % 2 == 0) {
            echo $number . "\n";
        }
    }
}

echo "FizzBuzz Output:\n";
fizzBuzz();

echo "\n";
printEvenFibonacci(10);
?>