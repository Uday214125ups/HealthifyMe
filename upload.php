<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file_tmp_path = $_FILES['image']['tmp_name'];  // Temporary file path
    $file_name = $_FILES['image']['name'];  // Original file name
    
    // Save the uploaded file locally
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);  // Create directory if it doesn't exist
    }

    // Define the path where the file will be saved
    $file_path = $upload_dir . basename($file_name);
    move_uploaded_file($file_tmp_path, $file_path);

    // Properly escape the file path (enclose in quotes)
    $escaped_file_path = escapeshellarg($file_path);  // Add quotes around the path

    // Execute the Python script and pass the escaped image file path
    $python_script = escapeshellcmd('C:\\Users\\uday2\\AppData\\Local\\Programs\\Python\\Python310\\python.exe process_image.py');  // Python script path
    $output = shell_exec("$python_script $escaped_file_path 2>&1");  // Execute the script and capture output

    // Redirect to display.php with the file name and Python output
    header('Location: display.php?file=' . urlencode($file_name) . '&response=' . urlencode($output));
    exit();
} else {
    echo "No image uploaded!";
}
?>
