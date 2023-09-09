<!DOCTYPE html>
<html>
<head>
    <title>Image Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Image Management</h1>
    
    <!-- Form to upload new images -->
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Upload Image">
    </form>
    
    <p><a href="listing.php">View uploaded images</a></p>
</body>
</html>
