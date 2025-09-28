<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Dosen</title>
    <style>
        table {
            border: 1px solid black;
            width: 400px;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h2>Data Dosen</h2>
    
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Keterangan</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>

</body>
</html>