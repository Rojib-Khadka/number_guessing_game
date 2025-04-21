<?php
echo "Demonstration of break and continue statements\n\n";

// Using a for loop to demonstrate continue and break
for ($i = 1; $i <= 10; $i++) {
    // If $i is 3, skip this iteration (continue)
    if ($i == 3) {
        echo "Skipping number 3\n";
        continue;
    }
    
    // If $i is 8, stop the loop completely (break)
    if ($i == 8) {
        echo "Stopping loop at number 8\n";
        break;
    }

    echo "Number: $i\n";
}

echo "\nLoop completed.";
?>
