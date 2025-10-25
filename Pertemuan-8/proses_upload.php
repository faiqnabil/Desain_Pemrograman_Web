<?php
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_POST['submit'])) {
    if ($_FILES['images']['name'][0]) {
        $totalFiles = count($_FILES['images']['name']);
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $maxsize = 5*1024*1024; 
        
        echo "<h3>Hasil Upload Gambar:</h3>";
        
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['images']['name'][$i];
            $fileTmpName = $_FILES['images']['tmp_name'][$i];
            $fileSize = $_FILES['images']['size'][$i];
            $targetFile = $targetDirectory . basename($fileName);
            $filetype = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            
            if (in_array($filetype, $allowedExtensions) && $fileSize <= $maxsize) {
                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    echo "<p><strong>File $fileName berhasil diunggah.</strong></p>";
                    echo "<p>Thumbnail Gambar:</p>";
                    echo '<img src="' . $targetFile . '" width="200" style="height: auto; margin-bottom: 20px;"><br>';
                } else {
                    echo "<p style='color: red;'>Gagal mengunggah file $fileName.</p>";
                }
            } else {
                echo "<p style='color: red;'>File $fileName tidak valid atau melebihi ukuran maksimum 5MB.</p>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
}
?>