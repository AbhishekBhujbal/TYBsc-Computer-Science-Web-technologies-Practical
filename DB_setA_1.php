<?php
$file_path = 'C:\xampp\htdocs\myproject\1NOV_ATTENDANCE.txt'; // Replace with the actual path to your file

if (file_exists($file_path)) {
    // Read the file contents
    $file_contents = file_get_contents($file_path);

    // Get the file size
    $file_size = filesize($file_path);

    // Display the contents and size
    echo "File Contents:<br>";
    echo "<pre>";
    echo $file_contents;
    echo "</pre>";
    echo "File Size: " . $file_size . " bytes";
} else {
    echo "File not found!";
}
?>
