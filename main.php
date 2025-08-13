<?php

function calculate ($a, $b, $command): mixed {
    switch ($command) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'division':
            return $a / $b;
        default:
            return "Invalid Operation";
        }
}
echo calculte(a: 10, b: 5, command: 'add');
echo "\n";
echo calculte(a: 20, b: 10, command: 'subtract');
echo "\n";
echo calculte(a: 5, b: 2, command: 'multiply');
echo "\n";
echo calculte(a: 7, b: 2, command: 'division');
echo "\n";


?>