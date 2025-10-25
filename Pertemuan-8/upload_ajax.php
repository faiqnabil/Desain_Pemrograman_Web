<?php
if (isset($_FILES['files'])) {
    $targetDirectory = "uploads/";
    
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    
    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $maxsize = 5*1024*1024; 
        
        $uploadedFiles = array();
        $errors = array();
        
        echo "<h3>Hasil Upload Gambar:</h3>";
        
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileTmpName = $_FILES['files']['tmp_name'][$i];
            $fileSize = $_FILES['files']['size'][$i];
            $targetFile = $targetDirectory . basename($fileName);
            $file_ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            
            if (!in_array($file_ext, $allowedExtensions)) {
                $errors[] = "File $fileName: Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
                continue;
            }
            
            if ($fileSize > $maxsize) {
                $errors[] = "File $fileName: Ukuran file tidak boleh lebih dari 5 MB.";
                continue;
            }
            
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "<p style='color: green;'><strong>✓ File $fileName berhasil diunggah.</strong></p>";
                echo "<p>Thumbnail Gambar:</p>";
                echo '<img src="' . $targetFile . '" width="200" style="height: auto; margin-bottom: 20px; border: 1px solid #ddd; padding: 5px;"><br>';
                $uploadedFiles[] = $fileName;
            } else {
                $errors[] = "File $fileName: Gagal mengunggah file.";
            }
        }
        
        echo "<hr style='margin: 20px 0;'>";
        echo "<p><strong>Ringkasan:</strong></p>";
        echo "<p>Total file yang berhasil diupload: <strong>" . count($uploadedFiles) . "</strong> dari <strong>" . $totalFiles . "</strong> file</p>";
        
        if (!empty($errors)) {
            echo "<p style='color: red; margin-top: 15px;'><strong>Error:</strong></p>";
            foreach ($errors as $error) {
                echo "<p style='color: red;'>✗ $error</p>";
            }
        }
    } else {
        echo "<p style='color: red;'>Tidak ada file yang dipilih untuk diupload.</p>";
    }
} else {
    echo "<p style='color: red;'>Tidak ada file yang dikirim.</p>";
}
?>