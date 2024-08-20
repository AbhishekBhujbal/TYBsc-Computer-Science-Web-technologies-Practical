<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $String1 = $_POST["String1"];
        $String2 = $_POST["String2"];
        $n = $_POST["n"];
	}

        // Check if the small string appears at the start of the large string
        $startsWith = strpos($String1, $String2) === 0 ;

        // Find the position of the small string in the large string
        $position = strpos($String1, $String2);

        // Compare the strings for the first n characters (case-insensitive)
        $comparison = strncasecmp($String1, $String2, $n) === 0;
		{
        echo "1) string2 appears at the start of the string1: " . ($startsWith ? "Yes" : "No") . "<br>";
        echo "2) Position of the string2 in the string1: " . ($position !== false ? $position : "Not found") . "<br>";
        echo "3) Comparison of the first $n characters (case-insensitive): " . ($comparison ? "Match" : "No match") . "<br>";
    }
    ?>