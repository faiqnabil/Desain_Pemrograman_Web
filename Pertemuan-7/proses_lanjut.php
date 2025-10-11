<?php
// Pastikan skrip hanya memproses permintaan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data Buah
    $selectedBuah = isset($_POST['buah']) ? $_POST['buah'] : 'Tidak Dipilih';
    
    // Ambil data Warna (Checkbox)
    // Jika tidak ada yang dipilih, $_POST['warna'] tidak di-set
    $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];
    
    // Ambil data Jenis Kelamin
    $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : 'Tidak Dipilih';
    
    // --- Format Output yang akan dikirim kembali ke AJAX ---
    
    // 1. Hasil Buah
    echo "Buah yang dipilih: <strong>" . htmlspecialchars($selectedBuah) . "</strong><br>";

    // 2. Hasil Warna
    if (!empty($selectedWarna)) {
        // implode() untuk menggabungkan array menjadi string
        $warnaString = implode(", ", array_map('htmlspecialchars', $selectedWarna));
        echo "Warna favorit: <strong>" . $warnaString . "</strong><br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    // 3. Hasil Jenis Kelamin
    echo "Jenis kelamin: <strong>" . htmlspecialchars($selectedJenisKelamin) . "</strong><br>";
    
} else {
    // Respon jika diakses langsung tanpa AJAX/POST
    echo "Akses langsung ke file ini tidak diizinkan.";
}
?>