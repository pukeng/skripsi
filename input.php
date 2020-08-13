<?php
include('koneksi.php');

$ph       = $_GET['ph'];
$turbidity = $_GET['turbidity'];

date_default_timezone_set('Asia/Makassar');
$tanggal = date('Y-m-d');
$waktu = date('H:i:s');

$input = mysqli_query($koneksi, "INSERT INTO data (tanggal, waktu, ph, turbidity) VALUES ('$tanggal', '$waktu', '$ph', '$turbidity')");

if ($input == TRUE) {
    echo "Input Berhasil";
} else {
    echo "Input Gagal";
}
