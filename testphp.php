<?php
// List all PHP files in the current directory
$files = glob("*.php");
if (!empty($files)) {
    echo "PHP files in the current directory:<br><br>";
    foreach ($files as $file) {
        echo "<strong>File:</strong> " . htmlspecialchars($file) . "<br>";
        echo "<strong>Code:</strong><br>";
        echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre><br>";
    }
} else {
    echo "No PHP files found in the current directory.";
}
?>
