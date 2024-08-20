<?php

// Define an array
$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Define a value to search for
$searchValue = 5;

// Use array_search() to find the key of the value
$key = array_search($searchValue, $myArray);

// Check if the value was found
if ($key !== false) {
    echo "The value $searchValue was found at index $key.";
} else {
    echo "The value $searchValue was not found in the array.";
}

?>
