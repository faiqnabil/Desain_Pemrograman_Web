<?php
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$matakuliah = 'Fisika';

echo "<h3>Daftar Nilai Mahasiswa</h3>";
echo "Mata Kuliah: <b>$matakuliah</b><br><br>";

foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "Nama: " . $nilai[0] . ", Nilai: " . $nilai[1] . "<br>";
}

echo "<br>";
$total = 0;
$jumlah = count($daftarNilai[$matakuliah]);

foreach ($daftarNilai[$matakuliah] as $nilai) {
    $total += $nilai[1];
}

$rata_rata = $total / $jumlah;
echo "Rata-rata nilai: " . number_format($rata_rata, 2);
?>