<?php
$koneksi = mysqli_connect("localhost", "root", "", "po_jualan");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
