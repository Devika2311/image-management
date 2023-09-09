<?php
include 'connect.php';
if ($_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    $imageFileName = $_FILES["image"]["name"];
    $targetDir = "uploads/"; // Create this directory in your project
    $targetFilePath = $targetDir . $imageFileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // Insert image details into the database
        $sql = "INSERT INTO imge (file_name) VALUES ('$imageFileName')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
} else {
    echo "Error: " . $_FILES["image"]["error"];
}

$conn->close();
?>
