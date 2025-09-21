<?php

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persenKursiTerisi = ($kursiTerisi / $totalKursi) * 100;
$persenKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "=== ANALISIS KURSI RESTORAN ===<br><br>";

echo "Data Restoran:<br>";
echo "- Total kursi: $totalKursi kursi<br>";
echo "- Kursi terisi: $kursiTerisi kursi<br>";
echo "- Kursi kosong: $kursiKosong kursi<br><br>";

echo "Analisis Persentase:<br>";
echo "- Persentase kursi terisi: " . number_format($persenKursiTerisi, 1) . "%<br>";
echo "- Persentase kursi kosong: " . number_format($persenKursiKosong, 1) . "%<br><br>";

echo "=== JAWABAN SOAL ===<br>";
echo "Berapa kursi yang masih kosong? <strong>$kursiKosong kursi</strong><br><br>";

if ($persenKursiTerisi > 70) {
    echo "Status: Restoran sedang ramai (lebih dari 70% terisi)<br>";
} elseif ($persenKursiTerisi > 50) {
    echo "Status: Restoran cukup ramai (50-70% terisi)<br>";
} else {
    echo "Status: Restoran masih sepi (kurang dari 50% terisi)<br>";
}

echo "<br>=== VALIDASI PERHITUNGAN ===<br>";
echo "Kursi terisi + Kursi kosong = $kursiTerisi + $kursiKosong = " . ($kursiTerisi + $kursiKosong) . " kursi<br>";
echo "Sesuai dengan total kursi: " . ($totalKursi == ($kursiTerisi + $kursiKosong) ? "YA" : "TIDAK") . "<br>";
?>