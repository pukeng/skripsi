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

                <div class="card">
                    <div class="card-body">
                        <canvas id="chart1"></canvas>
                    </div>
                    <div class="card-body">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>

                <!-- Chart -->

                <?php
                $data1 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 100");
                $data2 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 100");
                $data3 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 100");
                $data4 = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC LIMIT 100");
                ?>
                <script>
                    var ctx = document.getElementById('chart1').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [
                                <?php
                                while ($row1 = mysqli_fetch_array($data1)) {
                                    $waktu1 = "'" . $row1['waktu'] . "'" . ",";
                                    echo $waktu1;
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'pH',
                                backgroundColor: '#007bff',
                                borderColor: '#007bff',
                                data: [
                                    <?php
                                    while ($row2 = mysqli_fetch_array($data2)) {
                                        $ph = $row2['ph'] . ",";
                                        echo $ph;
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {}
                    });

                    var ctx = document.getElementById('chart2').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [
                                <?php
                                while ($row3 = mysqli_fetch_array($data3)) {
                                    $waktu2 = "'" . $row3['waktu'] . "'" . ",";
                                    echo $waktu2;
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'NTU',
                                backgroundColor: '#28a745',
                                borderColor: '#28a745',
                                data: [
                                    <?php
                                    while ($row4 = mysqli_fetch_array($data4)) {
                                        $ph = $row4['turbidity'] . ",";
                                        echo $ph;
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {}
                    });
                </script>
                <?php include('footer.php'); ?>
            </div>
        </div>

    </div>



</body>

</html>