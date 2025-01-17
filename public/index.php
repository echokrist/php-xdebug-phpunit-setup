<?php

use App\Printer;

// Autoload dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Example 1: Simple Variable
$greeting = "Hello, Xdebug!"; // Set a breakpoint here to inspect $greeting
echo $greeting . PHP_EOL;

// Example 2: Conditional Logic
$number = 42;
if ($number > 40) { // Set a breakpoint here to inspect $number
    echo "The number is greater than 40." . PHP_EOL;
} else {
    echo "The number is 40 or less." . PHP_EOL;
}

// Example 3: Array Manipulation
$fruits = ["apple", "banana", "cherry"];
array_push($fruits, "date"); // Set a breakpoint here to inspect $fruits
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit" . PHP_EOL; // Set a breakpoint here to inspect $fruit
}

// Example 4: Using a Class
$printer = new Printer(); // Set a breakpoint here to inspect the $printer object
$printer->print("This is a message from Printer.");

// Example 5: Function Call
function add($a, $b) {
    return $a + $b; // Set a breakpoint here to inspect $a and $b
}
$result = add(5, 7); // Set a breakpoint here to inspect $result
echo "The result of addition is: $result" . PHP_EOL;

// Example 6: Exception Handling
try {
    throw new Exception("This is a test exception."); // Set a breakpoint here to inspect the exception
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . PHP_EOL; // Set a breakpoint here to inspect $e
}

// End of the script
echo "Script execution complete." . PHP_EOL; // Set a breakpoint here to confirm the end of the script

