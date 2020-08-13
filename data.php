<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
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
                <h3 class="text-center">Tabel Data</h3>
                <div class="card border-0 shadow-sm rounded-0 border-0 mt-5">
                    <div class="card-body bg-white rounded-0 border-0">
                        <a href="exportData.php" class="btn btn-success">Export Data</a>
                        <div class="p-md-3" id="dataTabel"></div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        setInterval(function() {
                            $("#dataTabel").load('dataTabel.php')
                        }, 200);
                    });
                </script>
                <?php include('footer.php'); ?>
            </div>
        </div>

    </div>
</body>

</html>