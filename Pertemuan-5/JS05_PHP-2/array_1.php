<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    ?>
    
    <h3>Output Asli (Menggunakan Indeks Manual)</h3>
    <?php
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";  
    echo $Listdosen[1] . "<br>";
    ?>
    
    <hr>
    <h2>Menampilkan Array dengan Berbagai Loop</h2>
    
    <h3>1. Menggunakan For Loop</h3>
    <?php
    for($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i] . "<br>";
    }
    ?>
    
    <h3>2. Menggunakan Foreach Loop</h3>
    <?php
    foreach($Listdosen as $dosen) {
        echo $dosen . "<br>";
    }
    ?>
    
    <h3>3. Menggunakan Foreach dengan Index</h3>
    <?php
    foreach($Listdosen as $index => $dosen) {
        echo "Index [$index]: " . $dosen . "<br>";
    }
    ?>
    
    <h3>4. Menggunakan While Loop</h3>
    <?php
    $i = 0;
    while($i < count($Listdosen)) {
        echo $Listdosen[$i] . "<br>";
        $i++;
    }
    ?>
    
    <h3>5. Menggunakan Do-While Loop</h3>
    <?php
    $j = 0;
    do {
        echo $Listdosen[$j] . "<br>";
        $j++;
    } while($j < count($Listdosen));
    ?>
    
    <h3>6. Menampilkan dalam Format Terurut (dengan nomor)</h3>
    <?php
    foreach($Listdosen as $index => $dosen) {
        echo ($index + 1) . ". " . $dosen . "<br>";
    }
    ?>

</body>
</html>