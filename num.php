<?php
// Specify the file name
$filename = "num.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Read the contents of the file
    $file_content = file_get_contents($filename);
    
    // Split the contents into an array of integers
    $numbers = explode(" ", $file_content); // Use explode() to create an array

    // Convert each value to an integer (to ensure we're comparing numbers)
    $numbers = array_map('intval', $numbers);

    // Find the maximum value
    $largest_number = max($numbers);

    echo "The largest number is: " . $largest_number;
} else {
    echo "The file $filename does not exist.";
}
?>
