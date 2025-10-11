<?php

$myArray = array(); 
echo "--- Pemeriksaan Array Kosong ---<br>";

if (empty($myArray)) {
    echo "Hasil 1: Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Hasil 1: Array terdefinisi dan tidak kosong.<br>";
}

echo "<br>";

echo "--- Pemeriksaan Variabel Tidak Dideklarasikan ---<br>";

if (empty($nonExistentVar)) {
    echo "Hasil 2: Variabel tidak terdefinisi atau kosong.<br>";
} else {
    echo "Hasil 2: Variabel terdefinisi dan tidak kosong.<br>";
}
?>