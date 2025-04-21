<?php
// Initialize an empty array to hold the random numbers
$randomNumbers = array();

// Generate 5 random numbers between 1 and 70
while (count($randomNumbers) < 1) {
    $randNumber = rand(1, 25);
    
    // Ensure the number is unique before adding it to the array
    if (!in_array($randNumber, $randomNumbers)) {
        $randomNumbers[] = $randNumber;
    }
}

// Display the generated numbers
echo "Generated random numbers: " . implode(", ", $randomNumbers);
?>
