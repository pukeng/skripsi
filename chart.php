<div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Monitoring Kualitas pH dan Kejernihan Air</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">                            
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Chart</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Monitoring pH Air</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chart1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Monitoring NTU Air</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chart2"></canvas>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $data1 = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1 LIMIT 100;");
        $data2 = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1 LIMIT 100;");
        $data3 = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1 LIMIT 100;");
        $data4 = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1 LIMIT 100;");
        ?>