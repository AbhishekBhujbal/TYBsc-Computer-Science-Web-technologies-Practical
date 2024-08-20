<?php
// Sample array
$myArray = ['apple', 'banana', 'cherry', 'date'];

// Item to insert
$newItem = 'grape';

// Position where you want to insert the new item (0-based index)
$insertPosition = 4;

// Using array_splice() to insert the new item
array_splice($myArray, $insertPosition, 0, $newItem);

// Display the modified array
print_r($myArray);
?>
