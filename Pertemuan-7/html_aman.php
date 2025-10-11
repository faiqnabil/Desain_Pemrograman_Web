<?php
$email = "";

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    echo "--- Proses Validasi Email ---<br>";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Validasi BERHASIL.<br>";
        echo "Email Anda: <strong>" . $email . "</strong><br>";
        echo "Lanjutkan dengan pengolahan email yang aman.";
    } else {
        echo "Validasi GAGAL.<br>";
        echo "<strong>Error:</strong> Format email ('" . $email . "') tidak valid. Silakan coba lagi.<br>";
    }
} else {
    echo "Pesan: Tidak ada data email yang dikirimkan untuk divalidasi.<br>";
}
?>