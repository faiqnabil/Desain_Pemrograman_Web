<?php
// BAGIAN 1: KONVERSI NILAI KE GRADE
$nilaiNumerik = 92;

echo "=== PROGRAM KONVERSI NILAI KE GRADE ===<br><br>";
echo "Nilai Numerik: $nilaiNumerik<br><br>";

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
    $keterangan = "Sangat Baik";
    $status = "LULUS";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
    $keterangan = "Baik";
    $status = "LULUS";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
    $keterangan = "Cukup";
    $status = "LULUS";
} elseif ($nilaiNumerik >= 60 && $nilaiNumerik < 70) {
    echo "Nilai huruf: D";
    $keterangan = "Kurang";
    $status = "TIDAK LULUS";
} else {
    echo "Nilai huruf: E";
    $keterangan = "Sangat Kurang";
    $status = "TIDAK LULUS";
}

echo "<br><br>=== DETAIL PENILAIAN ===<br>";
echo "Keterangan: $keterangan<br>";
echo "Status: $status<br><br>";

echo "=== RENTANG NILAI ===<br>";
echo "A: 90 - 100 (Sangat Baik)<br>";
echo "B: 80 - 89 (Baik)<br>";
echo "C: 70 - 79 (Cukup)<br>";
echo "D: 60 - 69 (Kurang)<br>";
echo "E: 0 - 59 (Sangat Kurang)<br><br>";

// Validasi input
if ($nilaiNumerik > 100) {
    echo "<strong>PERINGATAN: Nilai tidak boleh lebih dari 100!</strong><br>";
} elseif ($nilaiNumerik < 0) {
    echo "<strong>PERINGATAN: Nilai tidak boleh kurang dari 0!</strong><br>";
}

// Pesan motivasi
if ($status == "LULUS") {
    echo "Selamat! Anda telah mencapai standar kelulusan.<br>";
} else {
    echo "Jangan menyerah! Tingkatkan belajar untuk hasil yang lebih baik.<br>";
}

// BAGIAN 2: PERHITUNGAN BUAH YANG AKAN DIPANEN
echo "<br>=== PERHITUNGAN BUAH YANG AKAN DIPANEN ===<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Data Pertanian:<br>";
echo "- Jumlah lahan: $jumlahLahan<br>";
echo "- Tanaman per lahan: $tanamanPerLahan<br>";
echo "- Buah per tanaman: $buahPerTanaman<br><br>";

echo "Proses perhitungan:<br>";
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $buahPerLahan = $tanamanPerLahan * $buahPerTanaman;
    echo "Lahan $i: $tanamanPerLahan tanaman x $buahPerTanaman buah = $buahPerLahan buah<br>";
}

echo "<br>Jumlah buah yang akan dipanen adalah: <strong>$jumlahBuah</strong> buah<br>";

// Informasi tambahan
$totalTanaman = $jumlahLahan * $tanamanPerLahan;
echo "<br>Ringkasan:<br>";
echo "- Total tanaman: $totalTanaman tanaman<br>";
echo "- Total buah: $jumlahBuah buah<br>";
echo "- Rata-rata buah per lahan: " . ($jumlahBuah / $jumlahLahan) . " buah<br>";

// BAGIAN 3: PERHITUNGAN SKOR UJIAN DENGAN FOREACH
echo "<br>=== PROGRAM PERHITUNGAN SKOR UJIAN ===<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "Daftar Nilai Ujian:<br>";
foreach ($skorUjian as $index => $skor) {
    echo "Ujian " . ($index + 1) . ": $skor<br>";
}
echo "<br>";

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br>";

// Perhitungan rata-rata
$jumlahUjian = count($skorUjian);
$rataRata = $totalSkor / $jumlahUjian;

echo "Jumlah ujian: $jumlahUjian<br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br><br>";

// Menentukan grade berdasarkan rata-rata
if ($rataRata >= 90) {
    $gradeArray = "A";
    $keteranganArray = "Sangat Baik";
} elseif ($rataRata >= 80) {
    $gradeArray = "B";
    $keteranganArray = "Baik";
} elseif ($rataRata >= 70) {
    $gradeArray = "C";
    $keteranganArray = "Cukup";
} elseif ($rataRata >= 60) {
    $gradeArray = "D";
    $keteranganArray = "Kurang";
} else {
    $gradeArray = "E";
    $keteranganArray = "Sangat Kurang";
}

echo "=== HASIL ANALISIS ===<br>";
echo "Grade: $gradeArray<br>";
echo "Keterangan: $keteranganArray<br><br>";

// Mencari nilai tertinggi dan terendah
$nilaiTertinggi = max($skorUjian);
$nilaiTerendah = min($skorUjian);

echo "=== STATISTIK TAMBAHAN ===<br>";
echo "Nilai tertinggi: $nilaiTertinggi<br>";
echo "Nilai terendah: $nilaiTerendah<br>";
echo "Selisih nilai: " . ($nilaiTertinggi - $nilaiTerendah) . "<br><br>";

// Kategori nilai
echo "=== KATEGORI SETIAP NILAI ===<br>";
foreach ($skorUjian as $index => $skor) {
    if ($skor >= 90) {
        $kategori = "Excellent";
    } elseif ($skor >= 80) {
        $kategori = "Good";
    } elseif ($skor >= 70) {
        $kategori = "Average";
    } else {
        $kategori = "Below Average";
    }
    echo "Ujian " . ($index + 1) . " ($skor): $kategori<br>";
}

// BAGIAN 4: PENGECEKAN NILAI SISWA DENGAN CONTINUE
echo "<br>=== PENGECEKAN STATUS KELULUSAN SISWA ===<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "Daftar Nilai Semua Siswa:<br>";
foreach ($nilaiSiswa as $index => $nilai) {
    echo "Siswa " . ($index + 1) . ": $nilai<br>";
}

echo "<br>Status Kelulusan (Nilai >= 60):<br>";
foreach ($nilaiSiswa as $index => $nilai) {
    if ($nilai < 60) {
        echo "Siswa " . ($index + 1) . ": $nilai (Tidak Lulus)<br>";
        continue;
    }
    echo "Siswa " . ($index + 1) . ": $nilai (Lulus)<br>";
}

// Statistik kelulusan
$siswaLulus = 0;
$siswaTidakLulus = 0;
$totalNilaiLulus = 0;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 60) {
        $siswaLulus++;
        $totalNilaiLulus += $nilai;
    } else {
        $siswaTidakLulus++;
    }
}

echo "<br>=== STATISTIK KELULUSAN ===<br>";
echo "Total siswa: " . count($nilaiSiswa) . "<br>";
echo "Siswa lulus: $siswaLulus siswa<br>";
echo "Siswa tidak lulus: $siswaTidakLulus siswa<br>";
echo "Persentase kelulusan: " . number_format(($siswaLulus / count($nilaiSiswa)) * 100, 1) . "%<br>";

if ($siswaLulus > 0) {
    $rataRataLulus = $totalNilaiLulus / $siswaLulus;
    echo "Rata-rata nilai siswa yang lulus: " . number_format($rataRataLulus, 2) . "<br>";
}
?>