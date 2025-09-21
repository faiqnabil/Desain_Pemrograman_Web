<?php

$nilaiSiswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

$total = 0;
foreach ($nilaiSiswa as $siswa) {
    $total += $siswa[1];
}
$rata_rata = $total / count($nilaiSiswa);

echo "<h3>Daftar Nilai Siswa</h3>";
echo "Rata-rata kelas: " . number_format($rata_rata, 2) . "<br><br>";
echo "Siswa dengan nilai di atas rata-rata:<br>";

foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rata_rata) {
        echo "- " . $siswa[0] . ": " . $siswa[1] . "<br>";
    }
}
?>