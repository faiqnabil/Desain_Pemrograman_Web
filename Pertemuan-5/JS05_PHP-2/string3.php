<?php
$pesan = "Saya arek malang";
// ubah string menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
// ubah kata dalam array menjadi kebalikanya
$pesanPerKata = array_map('strrev', $pesanPerKata);
// gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?>