<?php
// mengaktifkan session php
@session_start();

$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "monitoringphturbidity";

$koneksi = mysqli_connect($server, $username, $password, $database);
if($koneksi == TRUE){
    // echo "Berhasil";
}else{
    echo "Gagal";
}
?>