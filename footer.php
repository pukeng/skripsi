        <div class="footer">
            <div class="copyright">
                <p>Aplikasi Monitoring Kualitas Kejernihan dan pH Air ©2020</p>
            </div>
        </div>        
    </div>    
    <script src="vendor\global\global.min.js"></script>	  
    <script src="js\deznav-init.js"></script>
    <script src="js\custom.min.js"></script>      
    <script src="vendor\chart.js\Chart.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataIndex").load('dataIndex.php')
            }, 200);
        });
        $(document).ready(function() {
            setInterval(function() {
                $("#dataTabel").load('dataTabel.php')
            }, 200);
        });        
    </script>
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
</body>
</html>