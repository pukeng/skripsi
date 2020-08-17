<!-- start tabel data anggota -->
<table class="table table-responsive-sm table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Jenis Air</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">pH</th>
            <th scope="col">Kejernihan (NTU)</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include('koneksi.php');
        $nomor = 0;
        $data   = mysqli_query($koneksi, "SELECT s.no, p.nama, p.jenis_air, s.tanggal, s.waktu, s.ph, s.turbidity FROM DATA s, pelanggan p WHERE s.id_pelanggan=p.id AND (SELECT COUNT(*) FROM DATA f WHERE f.id_pelanggan=s.id_pelanggan AND f.waktu>=s.waktu)<=1;");
        while ($row = mysqli_fetch_array($data)) {
            $no = $row['no'];
            $nomor++;
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jenis_air']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktu']; ?></td>
                <td><?php echo $row['ph']; ?></td>
                <td><?php echo $row['turbidity']; ?></td>
            </tr>
        <?php } ?>

    </tbody>

</table>
<!-- end tabel data anggota -->