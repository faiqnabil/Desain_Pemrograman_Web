<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "=== OPERATOR ARITMATIKA PHP ===<br><br>";

echo "Nilai a = $a <br>";
echo "Nilai b = $b <br><br>";

echo "Penjumlahan: $a + $b = $hasilTambah <br>";
echo "Pengurangan: $a - $b = $hasilKurang <br>";
echo "Perkalian: $a * $b = $hasilKali <br>";
echo "Pembagian: $a / $b = $hasilBagi <br>";
echo "Sisa Bagi: $a % $b = $sisaBagi <br>";
echo "Perpangkatan: $a ** $b = $pangkat <br>";

echo "<br>=== OPERATOR PERBANDINGAN ===<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Sama dengan: $a == $b = ";
echo $hasilSama ? 'true' : 'false';
echo "<br>";

echo "Tidak sama dengan: $a != $b = ";
echo $hasilTidakSama ? 'true' : 'false';
echo "<br>";

echo "Lebih kecil dari: $a < $b = ";
echo $hasilLebihKecil ? 'true' : 'false';
echo "<br>";

echo "Lebih besar dari: $a > $b = ";
echo $hasilLebihBesar ? 'true' : 'false';
echo "<br>";

echo "Lebih kecil sama dengan: $a <= $b = ";
echo $hasilLebihKecilSama ? 'true' : 'false';
echo "<br>";

echo "Lebih besar sama dengan: $a >= $b = ";
echo $hasilLebihBesarSama ? 'true' : 'false';
echo "<br>";

echo "<br>=== OPERATOR LOGIKA ===<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Logika AND: $a && $b = ";
echo $hasilAnd ? 'true' : 'false';
echo "<br>";

echo "Logika OR: $a || $b = ";
echo $hasilOr ? 'true' : 'false';
echo "<br>";

echo "Logika NOT A: !$a = ";
echo $hasilNotA ? 'true' : 'false';
echo "<br>";

echo "Logika NOT B: !$b = ";
echo $hasilNotB ? 'true' : 'false';
echo "<br>";

echo "<br>=== OPERATOR ASSIGNMENT ===<br><br>";

echo "Nilai awal: a = $a, b = $b <br><br>";

$a += $b;  
echo "Setelah a += b: a = $a <br>";

$a -= $b;   
echo "Setelah a -= b: a = $a <br>";

$a *= $b;  
echo "Setelah a *= b: a = $a <br>";

$a /= $b;  
echo "Setelah a /= b: a = $a <br>";

$a %= $b;  
echo "Setelah a %= b: a = $a <br>";

echo "<br>=== OPERATOR IDENTITAS ===<br><br>";

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai untuk perbandingan: a = $a, b = $b <br><br>";

echo "Identik (===): $a === $b = ";
echo $hasilIdentik ? 'true' : 'false';
echo "<br>";

echo "Tidak identik (!==): $a !== $b = ";
echo $hasilTidakIdentik ? 'true' : 'false';
echo "<br>";

echo "<br>Contoh dengan tipe data berbeda:<br>";
$angka = 10;
$string = "10";

echo "angka = $angka (integer), string = \"$string\" (string) <br>";
echo "angka == string: ";
echo ($angka == $string) ? 'true' : 'false';
echo " (perbandingan nilai) <br>";

echo "angka === string: ";
echo ($angka === $string) ? 'true' : 'false';
echo " (perbandingan nilai dan tipe) <br>";
?>