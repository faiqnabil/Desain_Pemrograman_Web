<?php

$harga = 120000;

if ($harga > 100000) {
    $diskon = 0.20; 
    $jumlah_diskon = $harga * $diskon;
    $harga_setelah_diskon = $harga - $jumlah_diskon;
} else {
    $jumlah_diskon = 0;
    $harga_setelah_diskon = $harga;
}

echo "<h2>Program Menghitung Harga Setelah Diskon</h2>";
echo "<p>Harga produk: Rp " . number_format($harga, 0, ',', '.') . "</p>";
echo "<p>Diskon yang didapat: 20%</p>";
echo "<p>Jumlah diskon: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "</p>";
echo "<p><strong>Harga setelah diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "</strong></p>";
?>