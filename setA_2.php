 <?php
    if (isset($_POST['submit'])) {
        // Get the user-input string
        $inputString = $_POST['inputString'];

        // Function to find the length of the given string
        function findStringLength($str) {
            return strlen($str);
        }

        // Function to count the total number of vowels in the string
        function countVowels($str) {
            $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            return count(array_intersect(str_split($str), $vowels));
        }

        // Function to convert the string to lowercase and then to title case
        function convertToTitleCase($str) {
            return ucwords(strtolower($str));
        }

        // Function to pad the given string with "*" from left and right
        function padStringWithAsterisks($str) {
            return '*' . $str . '*';
        }

        // Function to remove leading whitespaces from the given string
        function removeLeadingWhitespace($str) {
            return ltrim($str);
        }

        // Display the results
        echo "<p>1) Length of the string: " . findStringLength($inputString) . "</p>";
        echo "<p>2) Total number of vowels: " . countVowels($inputString) . "</p>";
        echo "<p>3) String in title case: " . convertToTitleCase($inputString) . "</p>";
        echo "<p>4) String padded with '*' from left and right: " . padStringWithAsterisks($inputString) . "</p>";
        echo "<p>5) String with leading whitespaces removed: " . removeLeadingWhitespace($inputString) . "</p>";
    }
    ?>