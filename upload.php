

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);

    // Check if uploads directory exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        header("Location: learning-materials.php?upload=success");
        exit();
    } else {
        header("Location: learning-materials.php?upload=fail");
        exit();
    }
} else {
    echo "No file uploaded.";
}
?>