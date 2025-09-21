<?php

$poin = isset($_POST['poin']) ? (int)$_POST['poin'] : 0;
$hadiah_tambahan = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hadiah_tambahan = ($poin > 500) ? "YA" : "TIDAK";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Penghitung Skor Game</title>
</head>
<body>
    <h2>Masukkan Skor Pemain</h2>
    <form method="post">
        Poin: <input type="number" name="poin" value="<?php echo $poin; ?>" required>
        <input type="submit" value="Hitung">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h3>Hasil:</h3>
        <p>Total skor pemain adalah: <?php echo $poin; ?></p>
        <p>Apakah pemain mendapatkan hadiah tambahan? <?php echo $hadiah_tambahan; ?></p>
    <?php endif; ?>
</body>
</html>