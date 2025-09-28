<?php
function perkenalanDenganParameter($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalanDenganParameter("Hamdana", "Hello");
echo "<hr>";

$saya = "Faiq";
$ucapanSalam = "Selamat pagi";

perkenalanDenganParameter($saya);
?>