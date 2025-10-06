<?php

$host = 'localhost';
$port = '5432';
$dbname = 'phpDatabase'; 
$user = 'postgres';
$pass = '11223344'; 

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = "SELECT 
    \"Nim\" AS \"Nim\",
    \"Nama\" AS \"Nama\",
    \"Email\" AS \"Email\",
    \"Jurusan\" AS \"Jurusan\"
FROM public.\"TB_Mahasiswa\" 
ORDER BY \"Nim\";";

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}

$nomor_urut = 1;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { font-size: 2em; font-weight: bold; margin-bottom: 20px; }
        table { 
            width: auto; 
            margin: 20px 0; 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid black; 
            padding: 8px 15px; 
            text-align: left; 
        }
        th { 
            background-color: #f2f2f2; 
            font-weight: bold;
            text-align: center; 
        }
        td {
            text-align: center;
        }
        td:nth-child(3), td:nth-child(4), td:nth-child(5) {
            text-align: left; 
        }
        .aksi a {
            margin: 0 5px;
            text-decoration: none;
            color: purple; 
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                
                echo "<td>" . $nomor_urut . "</td>";
                
                echo "<td>" . htmlspecialchars($row['Nim']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Nama']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Jurusan']) . "</td>";
                
                echo "<td class='aksi'>";
                echo "<a href='edit.php?nim=" . urlencode($row['Nim']) . "'>Edit</a> ";
                echo "<a href='hapus.php?nim=" . urlencode($row['Nim']) . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>";
                echo "</td>";
                
                echo "</tr>";
                
                $nomor_urut++;
            }
            ?>
        </tbody>
    </table>

    <?php
    
    pg_close($conn);
    ?>
</body>
</html>