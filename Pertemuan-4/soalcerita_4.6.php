<?php
echo "=== SOAL CERITA PRAKTIKUM 4 ===<br><br>";
echo "<strong>SOAL 1: ANALISIS NILAI UJIAN MATEMATIKA</strong><br><br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "Daftar nilai 10 siswa:<br>";
foreach ($nilaiSiswa as $index => $nilai) {
    echo "Siswa " . ($index + 1) . ": $nilai<br>";
}
$totalNilai = 0;
foreach ($nilaiSiswa as $nilai) {
    $totalNilai += $nilai;
}
echo "<br>Total nilai: $totalNilai<br>";
$nilaiTertinggi = max($nilaiSiswa);
$nilaiTerendah = min($nilaiSiswa);
echo "Nilai tertinggi: $nilaiTertinggi<br>";
echo "Nilai terendah: $nilaiTerendah<br>";
$rataRata = $totalNilai / count($nilaiSiswa);
echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br><br>";
echo "Analisis berdasarkan rata-rata:<br>";
$diAtasRataRata = 0;
$diBawahRataRata = 0;

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai > $rataRata) {
        echo "Siswa " . ($index + 1) . " ($nilai): Di atas rata-rata<br>";
        $diAtasRataRata++;
    } elseif ($nilai < $rataRata) {
        echo "Siswa " . ($index + 1) . " ($nilai): Di bawah rata-rata<br>";
        $diBawahRataRata++;
    } else {
        echo "Siswa " . ($index + 1) . " ($nilai): Sama dengan rata-rata<br>";
    }
}

echo "<br>Jumlah siswa di atas rata-rata: $diAtasRataRata siswa<br>";
echo "Jumlah siswa di bawah rata-rata: $diBawahRataRata siswa<br>";
echo "<br>=== DISTRIBUSI GRADE ===<br>";
$gradeA = 0; $gradeB = 0; $gradeC = 0; $gradeD = 0; $gradeE = 0;
foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai >= 90) {
        $grade = "A";
        $gradeA++;
    } elseif ($nilai >= 80) {
        $grade = "B";
        $gradeB++;
    } elseif ($nilai >= 70) {
        $grade = "C";
        $gradeC++;
    } elseif ($nilai >= 60) {
        $grade = "D";
        $gradeD++;
    } else {
        $grade = "E";
        $gradeE++;
    }
    echo "Siswa " . ($index + 1) . " ($nilai): Grade $grade<br>";
}
echo "<br>Distribusi Grade:<br>";
echo "Grade A (90-100): $gradeA siswa<br>";
echo "Grade B (80-89): $gradeB siswa<br>";
echo "Grade C (70-79): $gradeC siswa<br>";
echo "Grade D (60-69): $gradeD siswa<br>";
echo "Grade E (0-59): $gradeE siswa<br>";
echo "<br><br><strong>SOAL 2: DAFTAR NILAI 10 SISWA (LANGKAH 21)</strong><br><br>";
echo "Menggunakan data nilai yang sama: [85, 92, 78, 64, 90, 75, 88, 79, 70, 96]<br><br>";
echo "=== RINGKASAN ANALISIS ===<br>";
echo "1. Total nilai keseluruhan: $totalNilai<br>";
echo "2. Nilai tertinggi: $nilaiTertinggi<br>";
echo "3. Nilai terendah: $nilaiTerendah<br>";
echo "4. Rata-rata kelas: " . number_format($rataRata, 2) . "<br>";
echo "5. Jumlah siswa: " . count($nilaiSiswa) . " siswa<br>";
echo "6. Selisih nilai tertinggi dan terendah: " . ($nilaiTertinggi - $nilaiTerendah) . "<br>";

$siswaLulus = 0;
$siswaTidakLulus = 0;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 60) {
        $siswaLulus++;
    } else {
        $siswaTidakLulus++;
    }
}

echo "7. Siswa yang lulus (≥60): $siswaLulus siswa<br>";
echo "8. Siswa yang tidak lulus (<60): $siswaTidakLulus siswa<br>";
echo "9. Persentase kelulusan: " . number_format(($siswaLulus / count($nilaiSiswa)) * 100, 1) . "%<br>";

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai == $nilaiTertinggi) {
        echo "10. Nilai tertinggi diperoleh oleh Siswa " . ($index + 1) . "<br>";
        break;
    }
}

foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai == $nilaiTerendah) {
        echo "11. Nilai terendah diperoleh oleh Siswa " . ($index + 1) . "<br>";
        break;
    }
}
?>