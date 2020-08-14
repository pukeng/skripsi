<?php
include('koneksi.php');
$data   = mysqli_query($koneksi, "SELECT pelanggan.nama, pelanggan.jenis_air, data.ph, data.turbidity FROM data left join pelanggan on data.id_pelanggan=pelanggan.id ORDER BY data.no DESC LIMIT 1");
$row = mysqli_fetch_array($data);
?>

<div class="row">
    <div class="col">
        <div class="card border-0 rounded-0">
            <div class="card-body">
                <p>Nama Pelanggan</p>
                <h1><?php echo $row['nama']; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 rounded-0">
            <div class="card-body">
                <p>Jenis Air</p>
                <h1><?php echo $row['jenis_air']; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 rounded-0">
            <div class="card-body">
                <p>pH</p>
                <h1><?php echo $row['ph']; ?></h1>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card border-0 rounded-0">
            <div class="card-body">
                <p>Kejernihan(NTU)</p>
                <h1><?php echo $row['turbidity']; ?></h1>
            </div>
        </div>
    </div>
</div>