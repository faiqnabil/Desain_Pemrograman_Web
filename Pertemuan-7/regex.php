<?php
// Pola baru: Mencocokkan 'g' diikuti 'o' minimal 1 kali dan maksimal 2 kali, lalu 'd'.
$pattern = '/go{1,2}d/'; // Cocokkan "god" (1 'o') atau "good" (2 'o').
$text = 'god is good.';

// Array untuk menyimpan hasil kecocokan
$matches = []; 

echo "Teks Asli: '{$text}'" . PHP_EOL . "<br>";
echo "Pola Digunakan: {$pattern} (1 hingga 2 huruf 'o')" . PHP_EOL . "<br>";

if (preg_match($pattern, $text, $matches)) {
    echo "Hasil Ditemukan!" . PHP_EOL . "<br>";
    echo "Cocokkan Pertama: " . $matches[0] . PHP_EOL . "<br>";
} else {
    echo "Tidak ada yang cocok!";
}
?>