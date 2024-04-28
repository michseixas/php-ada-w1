//ejemplo que vimos con Raquel

<?php
// Open stdin for reading
$stdin = fopen('php://stdin', 'r');

echo "Cómo te llamas?: ";

// Read input from stdin
$input = fgets($stdin);

// Close the file handle
fclose($stdin);

echo "You entered: " . $input;
?>