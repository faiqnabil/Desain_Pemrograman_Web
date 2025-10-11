<?php
$data = array("nama" => "Faiq", "usia" => 25);

if (isset($data["nama"])) {
    // Ganti \n dengan tag HTML <br>
    echo "Nama: " . $data["nama"] . "<br>"; 
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>";
}

// Tambahkan <br><br> (dua baris baru) untuk pemisah visual di browser
echo "<br>";

// Kode dari file 'isset.php'
$umur = 20; 

if (isset($umur) && $umur >= 18) {
    // Ganti \n dengan tag HTML <br>
    echo "Anda sudah dewasa.<br>"; 
} else {
    echo "Belum dewasa atau variabel 'umur' tidak ditemukan.<br>"; 
}
?>