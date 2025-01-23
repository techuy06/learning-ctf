<?php
// Attempt to read the flag file from the server
$flag_file = './flag.php';  // Replace with the actual path of the flag file
if (file_exists($flag_file)) {
    echo "Flag: " . file_get_contents($flag_file);  // Display the contents of the flag
} else {
    echo "Flag file not found.";
}
?>
