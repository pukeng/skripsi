<div class="mt-5">
<form method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input name="nama" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Jenis Air</label>
        <input type="text" class="form-control" name="jenis_air" required>
    </div>
    <button type="submit" name="tombolUji" class="btn btn-primary">Uji Air</button>
</form>
</div>
<?php
if(isset($_POST['tombolUji'])){
    $nama = $_POST['nama'];
    $jenis_air = $_POST['jenis_air'];    
    $_SESSION['nama']      = $nama;
    $_SESSION['jenis_air'] = $jenis_air;
    ?>
    <meta http-equiv="refresh" content="0;URL=index.php">
    <?php
}
?>