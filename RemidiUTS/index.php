<?php

$host = 'localhost';
$port = '5432';
$dbname = 'phpDatabase'; 
$user = 'postgres';
$pass = '11223344'; 

$conn = @pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("
    <!DOCTYPE html>
    <html lang='id'><head><title>Koneksi Gagal</title><style>body {font-family: Arial, sans-serif; background-color: #f8d7da; color: #721c24; padding: 20px;} .error-box {background: #f5c6cb; border: 1px solid #f5c6cb; padding: 15px; border-radius: 5px;}</style></head>
    <body>
        <div class='error-box'>
            <h1>❌ Koneksi Gagal!</h1>
            <p>Gagal terhubung ke database PostgreSQL. Silakan cek detail konfigurasi koneksi Anda.</p>
            <p><strong>Detail Error:</strong> " . pg_last_error() . "</p>
        </div>
    </body>
    </html>
    ");
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
    die('<h1>❌ Query Gagal!</h1><p>Gagal menjalankan query database.</p><p>Detail Error: ' . pg_last_error($conn) . '</p>');
}

$nomor_urut = 1;

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📝 Daftar Mahasiswa - PostgreSQL & PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1e88e5; 
            --secondary-color: #6c757d; 
            --light-bg: #f4f6f9;
            --dark-text: #212529; 
            --border-color: #e3e8ee;
            --success-color: #43a047; 
            --danger-color: #e53935; 
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            padding: 20px; 
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h1 { 
            font-size: 2.5em; 
            font-weight: 700; 
            margin-bottom: 30px; 
            color: var(--primary-color);
            border-left: 5px solid var(--primary-color);
            padding-left: 15px;
            line-height: 1.2;
        }

        table { 
            width: 100%; 
            margin: 30px 0; 
            border-collapse: collapse; 
            border-radius: 10px;
            overflow: hidden; 
        }

        th, td { 
            padding: 15px 15px; 
            text-align: left; 
            border: 1px solid var(--border-color); 
        }

        thead tr {
            background-color: var(--primary-color); 
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th { 
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 0.5px;
            text-align: center; 
        }

        td {
            background-color: #ffffff;
            text-align: center; 
            font-weight: 400;
        }
        
        tbody tr:nth-child(even) {
            background-color: #fcfcfc;
        }
    
        tbody tr:hover {
            background-color: #eef4f9;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .aksi {
            white-space: nowrap;
            text-align: center !important;
        }
        
        .aksi a {
            padding: 8px 12px;
            margin: 0 4px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9em;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
        }

        .aksi a:first-child {
            color: white; 
            background-color: var(--success-color); 
        }
        .aksi a:first-child:hover {
            background-color: #388e3c;
            transform: translateY(-1px);
        }

        .aksi a:last-child { 
            color: white;
            background-color: var(--danger-color); 
        }
        .aksi a:last-child:hover {
            background-color: #c62828;
            transform: translateY(-1px);
        }
        
        .no-data {
            text-align: center; 
            padding: 20px; 
            color: var(--secondary-color);
            font-style: italic;
        }

    </style>
</head>
<body>
    <div class="container">
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
                    echo "<a href='edit.php?nim=" . urlencode($row['Nim']) . "'>✏️ Edit</a> ";
                    echo "<a href='hapus.php?nim=" . urlencode($row['Nim']) . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">🗑️ Hapus</a>";
                    echo "</td>";
                    
                    echo "</tr>";
                    
                    $nomor_urut++;
                }
                
                if ($nomor_urut == 1) {
                    echo "<tr><td colspan='6' class='no-data'>Tidak ada data mahasiswa yang ditemukan.</td></tr>";
                }
                
                ?>
            </tbody>
        </table>

        <?php
        
        pg_close($conn);
        ?>
    </div>
</body>
</html>