<?php
include 'connect.php';
$sql = "SELECT * FROM imge";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imageFileName = $row["file_name"];
        echo "<img src='uploads/$imageFileName' alt='$imageFileName'>";
    }
} else {
    echo "No images found.";
}

$conn->close();
?>
