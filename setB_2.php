<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $selectedSeparator = $_POST["separator"];

        // Split the string into separate words using the selected separator
        $words = explode($selectedSeparator, $inputString);

        // Replace all occurrences of the separator with another separator
        $newSeparator = ",";
        $modifiedString = str_replace($selectedSeparator, $newSeparator, $inputString);

        // Find the last word in the given string using strrchr()
        $lastWord = strrchr($inputString, $selectedSeparator);

        echo "1) Split the string using '$selectedSeparator':<br>";
        echo "Words: " . implode(", ", $words) . "<br><br>";

        echo "2) Replace all occurrences of '$selectedSeparator' with '$newSeparator':<br>";
        echo "Modified String: " . $modifiedString . "<br><br>";

        echo "3) Find the last word using strrchr():<br>";
        echo "Last Word: " . $lastWord . "<br>";
    }
    ?>