<?php       
include('koneksi.php');
$data   = mysqli_query($koneksi, "SELECT pelanggan.nama, pelanggan.jenis_air, data.ph, data.turbidity FROM data left join pelanggan on data.id_pelanggan=pelanggan.id ORDER BY data.no DESC LIMIT 1");
$row = mysqli_fetch_array($data);
?>            
<div class="col-xl-6 col-xxl-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-user"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Nama Pelanggan</p>
                    <h3 class="text-white">
                    <?php
                        if(@$row['nama']){
                            echo $row['nama']; 
                        }else{
                            echo "~";
                        }                                        
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-xxl-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-tint"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Jenis Air</p>
                    <h3 class="text-white">
                    <?php
                        if(@$row['jenis_air']){
                            echo $row['jenis_air']; 
                        }else{
                            echo "~";
                        }                                        
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-xxl-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-tachometer"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">pH</p>
                    <h3 class="text-white">
                    <?php
                        if(@$row['ph']){
                            echo $row['ph']; 
                        }else{
                            echo "~";
                        }                                        
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-6 col-xxl-6 col-sm-6">
    <div class="widget-stat card bg-primary">
        <div class="card-body">
            <div class="media">
                <span class="mr-3">
                    <i class="la la-tachometer"></i>
                </span>
                <div class="media-body text-white">
                    <p class="mb-1">Kerjenihan(NTU)</p>
                    <h3 class="text-white">
                    <?php
                        if(@$row['turbidity']){
                            echo $row['turbidity']; 
                        }else{
                            echo "~";
                        }                                        
                        ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>