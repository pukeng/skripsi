<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
include('koneksi.php');
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
                <h3 class="text-center">Monitoring Kualitas dan pH Air</h3>
                <?php
                if($_SESSION['nama'] != "" AND $_SESSION['jenis_air'] != ""){
                ?>
                <div class="mt-5 text-center" id="dataIndex"></div>
                <?php
                }else{
                include('dataInput.php');
                }
                ?>                
                <?php include('footer.php'); ?>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataIndex").load('dataIndex.php')
            }, 200);
        });
    </script>



</body>

</html>