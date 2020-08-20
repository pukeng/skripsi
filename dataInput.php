<?php
if(isset($_POST['tombolUji'])){
    $nama = $_POST['nama'];
    $jenis_air = $_POST['jenis_air'];    
    $input = mysqli_query($koneksi, "INSERT INTO pelanggan (nama, jenis_air) VALUES ('$nama', '$jenis_air')");        
    ?>
    <meta http-equiv="refresh" content="0;url=index.php">
    <?php
}
?>

<div class="col-xl-12 col-xxl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Input</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Air</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_air">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" name="tombolUji" class="btn btn-primary mb-2">Uji Air</button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>