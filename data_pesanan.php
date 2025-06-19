<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        h2 { color: #444; }
        a { text-decoration: none; color: #007BFF; }
    </style>
</head>
<body>
    <h2>Daftar Pesanan Masuk</h2>
    <a href="index.php">← Kembali ke Form</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Rasa</th>
            <th>Jumlah</th>
            <th>Catatan</th>
        </tr>

        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['rasa']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            echo "<td>".$data['catatan']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
