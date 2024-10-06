<?php
$file = isset($_GET['file']) ? urldecode($_GET['file']) : '';
$response = isset($_GET['response']) ? urldecode($_GET['response']) : '';

if ($file && $response) {
    echo "<h2>Uploaded Image:</h2>";
    echo "<img src='uploads/" . htmlspecialchars($file) . "' alt='Uploaded Image' style='max-width: 300px;'>";

    echo "<h2>Python Output:</h2>";
    echo "<p>" . htmlspecialchars($response) . "</p>";
} else {
    echo "No file or response received.";
}
?>
