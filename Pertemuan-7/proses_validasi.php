<?php
header('Content-Type: application/json');

$response = [];
$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? ''; 

$is_valid = true;


if (empty($nama)) {
    $is_valid = false;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $is_valid = false;
}

if (strlen($password) < 8) {
    $is_valid = false;
    $response['message'] = "Validasi Server Gagal: Password harus minimal 8 karakter."; // Pesan spesifik
} 

if (!$is_valid) {
    if (!isset($response['message'])) {
        $response['message'] = "Validasi Server Gagal: Semua field harus diisi dengan benar.";
    }
    $response['success'] = false;

} else {
    
    $response['success'] = true;
    $response['message'] = "Data berhasil dikirim. Nama: ({$nama}), Email: ({$email}), Password: (**Tersimpan Aman**).";
}

echo json_encode($response);
?>