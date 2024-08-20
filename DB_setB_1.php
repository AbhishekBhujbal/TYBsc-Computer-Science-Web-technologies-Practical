<?php
// Function to display a table row
function displayTableRow($itemCode, $itemName, $unitSold, $rate) {
    echo "<tr>";
    echo "<td>$itemCode</td>";
    echo "<td>$itemName</td>";
    echo "<td>$unitSold</td>";
    echo "<td>$rate</td>";
    echo "<td>" . number_format($unitSold * $rate, 2) . "</td>";
    echo "</tr>";
}

// Open the file for reading
$file = fopen("item.dat", "r");

// Check if the file was opened successfully
if ($file) {
    // Create an HTML table
    echo "<table border='1'>";
    echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";

    // Loop through the lines of the file
    while (($line = fgets($file)) !== false) {
        // Split the line into individual fields using the comma as a delimiter
        list($itemCode, $itemName, $unitSold, $rate) = explode(",", $line);

        // Display the item details in a table row
        displayTableRow($itemCode, $itemName, $unitSold, $rate);
    }

    // Close the table
    echo "</table>";

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file.";
}
?>
