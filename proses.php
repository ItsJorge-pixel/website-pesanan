<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$rasa   = $_POST['rasa'];
$jumlah = $_POST['jumlah'];
$catatan = $_POST['catatan'];


// Simpan ke database
mysqli_query($koneksi, "INSERT INTO pesanan (nama, alamat, rasa, jumlah, catatan)
VALUES ('$nama', '$alamat', '$rasa', '$jumlah', '$catatan')");

// Kirim email ke pemilik
$to      = "georgefarel123@gmail.com";
$subject = "Pesanan Baru Es Mambo";
$message = "Ada pesanan baru:\n\nNama: $nama\nAlamat: $alamat\nRasa: $rasa\nJumlah: $jumlah";
$headers = "From: noreply@po-esmambo.com";

mail($to, $subject, $message, $headers);

echo "<script>alert('Pesanan berhasil dikirim!'); window.location='index.php';</script>";
?>
