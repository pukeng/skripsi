<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}

$tanggalawal = $_POST['tanggalawal'];
$tanggalakhir = $_POST['tanggalakhir'];
?>

<!doctype html>
<html lang="id">

<head>
    <?php include('desain.php'); ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="col-md">
                <h3 class="text-center">Monitoring Data</h3>
                <hr class="my-4">

                <div class="row">
                    <div class="col-md-8">
                        <form action="dataCari.php" method="POST" class="form-inline mt-3 mb-3">
                            <div class="form-group">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input placeholder="Tanggal Awal" type="text" class="form-control datepicker" name="tanggalawal" value="<?php echo $tanggalawal; ?>" required>
                                </div>
                            </div>
                            <div class="form-group ml-2">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input placeholder="Tanggal Akhir" type="text" class="form-control datepicker" name="tanggalakhir" value="<?php echo $tanggalakhir; ?>" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ml-2">Cari</button>
                        </form>
                    </div>
                    <div class="col">
                        <a href="print_report.php?tanggalawal=<?php echo $tanggalawal; ?>&tanggalakhir=<?php echo $tanggalakhir; ?>" class="btn btn-success text-white mt-3 mb-3" target="_blank">PRINT REPORT</a>
                    </div>
                </div>


                <div class="card border-0 shadow-sm rounded-0 border-0">
                    <div class="card-body bg-white rounded-0 border-0">
                        <!-- start tabel data anggota -->
                        <table class="table table-responsive-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Kejernihan (NTU)</th>
                                    <th scope="col">pH</th>
                                    <th scope="col">Status Kejernihan</th>
                                    <th scope="col">Status pH</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include('koneksi.php');
                                $nomor = 0;
                                $data   = mysqli_query($koneksi, "SELECT * FROM data WHERE tanggal BETWEEN CAST('$tanggalawal' AS DATE) AND CAST('$tanggalakhir' AS DATE)");
                                while ($row = mysqli_fetch_array($data)) {
                                    $no = $row['no'];
                                    $nomor++;
                                ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['waktu']; ?></td>
                                        <td><?php echo $row['kejernihan']; ?></td>
                                        <td><?php echo $row['ph']; ?></td>
                                        <td><?php echo $row['statuskejernihan']; ?></td>
                                        <td><?php echo $row['statusph']; ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>

                        </table>
                        <!-- end tabel data anggota -->
                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>




</body>

</html>