<!DOCTYPE html>
<html>
<head>
    <title>Multi Upload Gambar</title>
</head>
<body>
    <h2>Unggah Multiple Gambar</h2>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
        <input type="submit" name="submit" value="Unggah Gambar" />
    </form>
</body>
</html>