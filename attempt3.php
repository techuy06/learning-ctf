<?php
// The target flag page URL
$flag_page = 'flag'; // You may need to adjust this if the flag page has a different name

// Attempt to inject into the page parameter by setting it manually or bypassing filters
if (isset($_GET['page']) && $_GET['page'] == $flag_page) {
    // Attempt to include the flag page by manipulating the page variable
    echo "Flag page accessed: " . $flag_page;
    // Here you could add other methods to extract or access the flag if needed
} else {
    // If not accessing flag, redirect or manipulate the URL to access secret content
    header("Location: ?page=$flag_page"); // Redirecting to flag page using URL manipulation
    exit;
}
?>
