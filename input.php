<?php
include('koneksi.php');

$data = mysqli_query($koneksi, "SELECT id FROM pelanggan ORDER BY id DESC LIMIT 1");
$row  = mysqli_fetch_array($data);

$id_pelanggan = $row['id'];
$ph           = $_GET['ph'];
$turbidity    = $_GET['turbidity'];

date_default_timezone_set('Asia/Makassar');
$tanggal = date('Y-m-d');
$waktu   = date('H:i:s');

$input = mysqli_query($koneksi, "INSERT INTO data (id_pelanggan, tanggal, waktu, ph, turbidity) VALUES ('$id_pelanggan', '$tanggal', '$waktu', '$ph', '$turbidity')");

if ($input == TRUE) {
    echo "Input Berhasil";      
} else {
    echo "Input Gagal";
}